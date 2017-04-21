package project123;
import java.util.*;
import java.io.*;
public class fileDataToHashMap
{
	public static void main(String[] args) throws IOException 
	{
	    getHashMap("");
    }

    public static Map getHashMap(String location)throws IOException
    {
    		Map<String, ArrayList<String>> map = new HashMap<String, ArrayList<String>>();
            ArrayList<String> fileNameList;
            BufferedReader br = new BufferedReader(new FileReader(location+"/newfile2.txt"));
            String index="";
            String file="";
            while (file != null)
            {
                index=br.readLine();
                file=br.readLine();    
                if(map.get(index)==null)
                {
                    fileNameList = new ArrayList<String>();
                }
                else
                {
                    fileNameList = map.get(index);
                }
                fileNameList.add(file);
                map.put(index,fileNameList);
                file = br.readLine();
            }
            for (Map.Entry entry : map.entrySet())
            {
              //System.out.println(entry.getKey() + " : " + map.get(entry.getKey()));
        	}
        	return map;
        }
}