import java.rmi.Naming;
import java.util.*;
public class AddClient
{
static int cost=0;
public static void main(String args[]) 
{
try
{
Scanner sc=new Scanner(System.in);
Adder ai=(Adder)Naming.lookup("//localhost/Add");
//System.out.println("The sum of 2 numbers is: "+ai.sum(10,2));
System.out.println("Enter the number of tickets");
int num=sc.nextInt();
int n=num;
if(num>=10)
System.out.println("Tickets not available");
else
{
String[] name=new String[num];
String[] dest=new String[num];
int[] age=new int[num];
int i=0;
while(num!=0)
{
System.out.println("Enter name");
name[i]=sc.next();
System.out.println("Enter age");
age[i]=sc.nextInt();
System.out.println("Enter your destination choice");
System.out.println("1)Bengaluru\n2)Kashmir\n3)New York\n4)Califonia\n5)Dubai");
int choice=sc.nextInt();
if(choice!=1||choice!=2||choice!=3||choice!=4||choice!=5)
System.out.println("Invalid choice");
switch(choice)
{
case 1: 
cost+=5000;
dest[i]="Bengaluru";
System.out.println("--Bengaluru-- COST=RS. 5000");
System.out.println("Your ticket price till now="+cost);
break;
case 2:
cost+=6000;
dest[i]="Kashmir";
System.out.println("--Kashmir-- COST=RS. 6000");
System.out.println("Your ticket price till now="+cost);
break;
case 3:
cost+=100000;
dest[i]="New York";
System.out.println("--New York-- COST=RS. 100000");
System.out.println("Your ticket price till now="+cost);
break;
case 4:
cost+=150000;
dest[i]="Califonia";
System.out.println("--Califonia-- COST=RS. 150000");
System.out.println("Your ticket price till now="+cost);
break;
case 5:
cost+=125000;
dest[i]="Dubai";
System.out.println("--Dubai-- COST=RS. 125000");
System.out.println("Your ticket price till now="+cost);
break;
}
i++;
num--;
} 
}
System.out.println("Your details are\n");
sum(dest,name,cost,n);
}
catch(Exception e)
{
System.out.println("Client Exception: "+e);
}
}
}
