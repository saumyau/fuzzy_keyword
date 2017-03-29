import java.rmi.*;
import java.rmi.server.*;
public class Add extends UnicastRemoteObject implements Adder
{
int num1,num2;
public Add() throws RemoteException
{
}
public void sum(String[] dest,String[] name,int cost,int n) throws RemoteException
{
int i=0;
while(n!=0)
{
System.out.println("TICKET ["+i+"]");
System.out.println("Name="+name[i]);
System.out.println("Destination="+dest[i]);
i++;
n--;
}
System.out.println("Your total cost is="+cost);
}
}
