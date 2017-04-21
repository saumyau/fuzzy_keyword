package project123;
import java.util.*;
import java.io.*;
public class searchFile
{
	public static void main(String[] args)throws IOException {
		Scanner sc = new Scanner(System.in);
		//System.out.println("Enter the file name to be searched");
		//String searchString = sc.nextLine();
		String searchString = args[0];
		String location = args[1];
		System.out.println(location);
		//String location = "C:/xamppy/htdocs/fuzzy/includes/ankit@mohite";
		Map<String, ArrayList<String>> map = getFileToHashMap(location);
		ArrayList<String> nGramSearchString = new ArrayList<String>();
		nGramSearchString = breakSearchIntoNGram(searchString);
		System.out.println(nGramSearchString);
		computeRank(searchString, nGramSearchString,map,location);
		
	}

	public static Map getFileToHashMap(String location) throws IOException
	{
		fileDataToHashMap obj = new fileDataToHashMap();
		Map<String, ArrayList<String>> map = obj.getHashMap(location);
		for (Map.Entry entry : map.entrySet()) 
		{
                //System.out.println(entry.getKey() + " : " + map.get(entry.getKey()));  
		}
		return map;
	}

	public static ArrayList<String> breakSearchIntoNGram(String searchString)
	{
		ArrayList<String> nGramSearchString = new ArrayList<String>();
		String temp;
		for(int i=0;i<searchString.length()-1;i++)
		{
			temp = "" + searchString.charAt(i) + searchString.charAt(i+1);
			nGramSearchString.add(temp);
		}
		return nGramSearchString;
	}

	public static void computeRank(String searchString, ArrayList<String> nGramSearchString, Map<String, ArrayList<String>> map,String location) throws IOException
	{
		int k=0;
		Map<String, Integer> fileNameIndex = new HashMap<String, Integer>();
		ArrayList<Integer> frequencyList = new ArrayList<Integer>();
		ArrayList<Integer> scoreList = new ArrayList<Integer>();
		for(int i=0;i<nGramSearchString.size();i++)
		{
			if(map.get(nGramSearchString.get(i))!=null)
			{
				//System.out.println(nGramSearchString.get(i) + ":" + map.get(nGramSearchString.get(i)));
				ArrayList<String> storedFileNameList = map.get(nGramSearchString.get(i));
				for(int j=0;j<storedFileNameList.size();j++)
				{
					//System.out.println("j = " +j);
					if(fileNameIndex.get(storedFileNameList.get(j))!=null)
					{
						//System.out.println("in if");
						int index = fileNameIndex.get(storedFileNameList.get(j));
						int countIncrement = frequencyList.get(fileNameIndex.get(storedFileNameList.get(j)))+1;
						//System.out.println(index + " " + countIncrement);
						frequencyList.set(index,countIncrement);
					}
					else
					{
						//System.out.println("in else");
						fileNameIndex.put(storedFileNameList.get(j),k);
						frequencyList.add(k,1);
						k++;
					}
				}
			}
		}
		for(int i=0;i<frequencyList.size();i++)
		{
			String fileName = getKeyFromValue(fileNameIndex,i);
			int score = getScore(fileName,searchString) - frequencyList.get(i);
			scoreList.add(score);
			//System.out.println(fileName + " "+ frequencyList.get(i) + " " + scoreList.get(i));
		}

		ArrayList<Integer> sortedScoreList = getSortedScore(scoreList);
		//System.out.println(sortedScoreList);
		ArrayList<String> rankedFileList = getRankedFile(sortedScoreList,fileNameIndex,location);
		System.out.println(rankedFileList);
	}

	public static ArrayList<String> getRankedFile(ArrayList<Integer> sortedScoreList, Map<String, Integer> fileNameIndex,String location) throws IOException
	{
		ArrayList<String> rankedFileList = new ArrayList<String>();
		for(int i=0;i<sortedScoreList.size();i++)
		{
			String fileName = getKeyFromValue(fileNameIndex,sortedScoreList.get(i));
			rankedFileList.add(fileName);
			//System.out.println(fileName);
		}
		copyFileToFolder obj1 = new copyFileToFolder();
		obj1.fileToFolder(rankedFileList,location);
		return rankedFileList;
	}


	public static ArrayList<Integer> getSortedScore(ArrayList<Integer> scoreList)
	{
		int minScore = 500;
		int minIndex = -1;
		ArrayList<Integer> sortedScoreList = new ArrayList<Integer>();
		int len = scoreList.size();
		for(int i=0;i<len;i++)
		{
			minScore = 500;
			for(int j=0;j<scoreList.size() ;j++)
			{
				if(scoreList.get(j) < minScore && scoreList.get(j)<500)
				{
					minScore = scoreList.get(j);
					minIndex = j;
				}
			}
			scoreList.remove(minIndex);
			scoreList.add(minIndex,500);
			sortedScoreList.add(minIndex);
		}
		return sortedScoreList;
	}

	public static int getScore(String fileName,String searchString)
	{
		return Math.max(fileName.length()-1,searchString.length()-1);
	}

	public static String getKeyFromValue(Map<String,Integer> map,int value) {
    	for (Map.Entry entry : map.entrySet())
        {
        	if(map.get(entry.getKey()).equals(value))
        	{
               return (String)entry.getKey();
        	}
        }
        return "";
  	}
}