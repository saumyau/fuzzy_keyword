import java.rmi.*;
import java.util.*;
public interface Adder extends Remote
{
public void sum(String[] dest,String[] name,int cost,int n) throws RemoteException;
}
