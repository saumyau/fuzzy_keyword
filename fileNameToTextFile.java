import java.util.*;
import java.io.File;
class fileNameToTextFile
{
	public static void main(String[] args) {
				File folder = new File("/home/parth/testing");
				File[] listOfFiles = folder.listFiles();
    			for (int i = 0; i < listOfFiles.length; i++) {
      			if (listOfFiles[i].isFile()) {
        	System.out.println("File " + listOfFiles[i].getName());
      	} 
      }
  	}		
}