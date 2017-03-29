<?php
$conn = mysqli_connect('localhost','root','','balaji');
if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
if ($_FILES["file"]["error"] > 0)
  {
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else
   {
     session_start();
     //ssession_set();
     echo $_SESSION['id'];
     $passphrase = 'My secret';
     $username = $_SESSION['id'];
     //$_SESSION['id']=$username;
      // Turn a human readable passphrase
      // into a reproducible iv/key pair
      $iv = substr(md5("\x1B\x3C\x58".$passphrase, true), 0, 8);
      $key = substr(md5("\x2D\xFC\xD8".$passphrase, true) 
        .md5("\x2D\xFC\xD9".$passphrase, true), 0, 24);
      $opts = array('iv' => $iv, 'key' => $key, 'mode' => 'stream');
       
      // Open the file
      $fp = fopen('secure.enc', 'w');
      $file = file_get_contents($_FILES["file"]["tmp_name"], true);
      // Add the Mcrypt stream filter
      // We use Triple DES here, but you
      // can use other encryption algorithm here
      stream_filter_append($fp, 'string.rot13', STREAM_FILTER_WRITE, $opts);
       $str= 'gfchgggggggggggggfbcfy y  hgvhgvy vygvyggy tyggyvv';
      // Wrote some contents to the file
      fwrite($fp, $file);
       
      // Close the file
      fclose($fp);
      $dir = $username;
      //.'/'.$_FILES["file"]["name"]
      if (!is_dir($dir)) {
      mkdir($dir);
      }
      $myfile = fopen($dir."/newfile.txt", "a+") or die("Unable to open file!");
      for($i=0;$i<strlen($_FILES["file"]["name"])-1;$i++){
        $var = substr($_FILES["file"]["name"], $i,$i+2);
       // echo "\n".$var;
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $var, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
      //echo $qEncoded;
        $qEncoded=$qEncoded."\n".$_FILES["file"]["name"]."\n\n";
        fwrite($myfile, $qEncoded);

      }
      
      fclose($myfile);  
      error_reporting(E_ERROR | E_PARSE);

      $file22 = file_get_contents($myfile);
      file_put_contents("newfile.txt",$file22);
  
      move_uploaded_file("newfile.txt", $dir );     
      
      echo $_FILES["file"]["name"];
      echo $_FILES["file"]["tmp_name"];
     $file2 = file_get_contents('secure.enc', true);
     file_put_contents($_FILES["file"]["tmp_name"] ,$file2);

     move_uploaded_file($_FILES["file"]["tmp_name"],$username.'/'.$_FILES["file"]["name"]);
     echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

     $file="images/".$_FILES["file"]["name"];
     $sql="INSERT INTO files (name, path) VALUES ('','$file')";

     //$result = $conn->query($sql);
     echo"<font size = '5'><font color=\"#0CF44A\">SAVED TO DATABASE";

 
   }
     ?>