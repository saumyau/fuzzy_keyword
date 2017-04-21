package project123;
import java.util.*;
import java.io.*;
class copyFileToFolder
{
	public static void main(String[] args)throws IOException {		
	}
	public static void fileToFolder(ArrayList<String> rankedFileList,String location) throws IOException
	{
		File directory = new File("C:/xamppy/htdocs/fuzzy/searcheditems");
		for(File f: directory.listFiles()){
			f.delete();
		}
        
		int len = rankedFileList.size();
		for(int i=0;i<len;i++)
		{
		File file = new File("C:/xamppy/htdocs/fuzzy/includes/ankit@mohite/"+rankedFileList.get(i));
        File copy = new File("C:/xamppy/htdocs/fuzzy/searcheditems/"+rankedFileList.get(i));
        copy.createNewFile();
        FileInputStream fis = new FileInputStream(file);
        FileOutputStream fos = new FileOutputStream(copy);

        byte[] buffer = new byte[1024];

        int length;
        // copy the file content in bytes
        while ((length = fis.read(buffer)) > 0) {

            fos.write(buffer, 0, length);

        }

        fis.close();
        fos.close();
    	}
		/*int len = rankedFileList.size();
		String path = "cd "+location;
		System.out.println(path);
		try{
			System.out.println(Runtime.getRuntime().exec(path));
		}
		catch(IOException e)
		{

		}
		String loc = location+"/";
		String dest = "\" \"C:/xamppy/htdocs/fuzzy/searched_items\"";
		for(int i=0;i<len;i++)
		{
			try{
			String myCommand = "copy \""+loc+rankedFileList.get(i)+dest;
			System.out.println(myCommand);
			Runtime.getRuntime().exec(myCommand);
		}		
		catch(IOException e)
		{

		}

		}*/
	}
}
