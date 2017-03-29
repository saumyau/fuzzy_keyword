<?php
//session_set();
session_start();
/*class Encryption {

    protected $cipher = '';

    
    protected $mode = '';

    
    protected $rounds = 100;

    
    public function __construct($cipher, $mode, $rounds = 100) {
        $this->cipher = $cipher;
        $this->mode = $mode;
        $this->rounds = (int) $rounds;
    }

    
    public function decrypt($data, $key) {
        $salt = substr($data, 0, 128);
        $enc = substr($data, 128, -128);
        $mac = substr($data, -128);

        list ($cipherKey, $macKey, $iv) = $this->getKeys($salt, $key);

        if (!hash_equals(hash_hmac('sha512', $enc, $macKey, true), $mac)) {
             return false;
        }

        $dec = mcrypt_decrypt($this->cipher, $cipherKey, $enc, $this->mode, $iv);

        $data = $this->unpad($dec);

        return $data;
    }

    /*
     * Encrypt the supplied data using the supplied key
     * 
     * @param string $data The data to encrypt
     * @param string $key  The key to encrypt with
     *
     * @returns string The encrypted data
     *--------------------------------------------
    public function encrypt($data, $key) {
        $salt = mcrypt_create_iv(128, MCRYPT_DEV_URANDOM);
        list ($cipherKey, $macKey, $iv) = $this->getKeys($salt, $key);

        $data = $this->pad($data);

        $enc = mcrypt_encrypt($this->cipher, $cipherKey, $data, $this->mode, $iv);

        $mac = hash_hmac('sha512', $enc, $macKey, true);
        return $salt . $enc . $mac;
    }
    */
    /*
     * Generates a set of keys given a random salt and a master key
     *
     * @param string $salt A random string to change the keys each encryption
     * @param string $key  The supplied key to encrypt with
     *
     * @returns array An array of keys (a cipher key, a mac key, and a IV)
     *--------------------------
    protected function getKeys($salt, $key) {
        $ivSize = mcrypt_get_iv_size($this->cipher, $this->mode);
        $keySize = mcrypt_get_key_size($this->cipher, $this->mode);
        $length = 2 * $keySize + $ivSize;

        $key = $this->pbkdf2('sha512', $key, $salt, $this->rounds, $length);

        $cipherKey = substr($key, 0, $keySize);
        $macKey = substr($key, $keySize, $keySize);
        $iv = substr($key, 2 * $keySize);
        return array($cipherKey, $macKey, $iv);
    }
    */
    /*
     * Stretch the key using the PBKDF2 algorithm
     *
     * @see http://en.wikipedia.org/wiki/PBKDF2
     *
     * @param string $algo   The algorithm to use
     * @param string $key    The key to stretch
     * @param string $salt   A random salt
     * @param int    $rounds The number of rounds to derive
     * @param int    $length The length of the output key
     *
     * @returns string The derived key.
     /----------------
    protected function pbkdf2($algo, $key, $salt, $rounds, $length) {
        $size   = strlen(hash($algo, '', true));
        $len    = ceil($length / $size);
        $result = '';
        for ($i = 1; $i <= $len; $i++) {
            $tmp = hash_hmac($algo, $salt . pack('N', $i), $key, true);
            $res = $tmp;
            for ($j = 1; $j < $rounds; $j++) {
                 $tmp  = hash_hmac($algo, $tmp, $key, true);
                 $res ^= $tmp;
            }
            $result .= $res;
        }
        return substr($result, 0, $length);
    }

    protected function pad($data) {
        $length = mcrypt_get_block_size($this->cipher, $this->mode);
        $padAmount = $length - strlen($data) % $length;
        if ($padAmount == 0) {
            $padAmount = $length;
        }
        return $data . str_repeat(chr($padAmount), $padAmount);
    }

    protected function unpad($data) {
        $length = mcrypt_get_block_size($this->cipher, $this->mode);
        $last = ord($data[strlen($data) - 1]);
        if ($last > $length) return false;
        if (substr($data, -1 * $last) !== str_repeat(chr($last), $last)) {
            return false;
        }
        return substr($data, 0, -1 * $last);
    }
}

*/

$conn = mysqli_connect('localhost','root','','balaji');

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
$uid = $_POST['uidy'];
$pwd = $_POST['pwdy'];

$sqll = "SELECT * FROM users where uid='$uid'";
$result = $conn->query($sqll);
$row = $result->fetch_assoc();
$enc_pwd = $row['pwd'];
//$hash = password_verify($pwd,$hash_pwd);
$key = 'hello';
if($pwd==''||$uid==''){
	header("Location: ../login.php?error=empty");
	exit();
}
//echo $enc_pwd;
$data = base64_decode($enc_pwd);
$iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

$decrypted = rtrim(
    mcrypt_decrypt(
        MCRYPT_RIJNDAEL_128,
        hash('sha256', $key, true),
        substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
        MCRYPT_MODE_CBC,
        $iv
    ),
    "\0"
);

//$e2 = new Encryption(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
//$data = $e2->decrypt($enc_pwd, $key);

//echo $enc_pwd;
echo $decrypted;

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$enc_pwd'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_id = row['uid'];
echo "*".$sql;
if($decrypted!=$pwd&&$user_id!=$uid){
	//echo "$data"."hello";
	echo "username or password don't match!";
}
else{
	$_SESSION['id'] = $uid;
	echo "you are logged in!".$_SESSION['id'];
}
//exit();
header("Location: ../dataownlogin.php");
//exit();
?>