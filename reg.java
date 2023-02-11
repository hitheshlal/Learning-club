import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.Connection;
import java.sql.ResultSet;

/**
 *
 * @author hithe
 */
public class reg {
    PreparedStatement ps =null;
    Connection con=null;
    ResultSet rs=null;


/**
 * 
 */
public reg() {

try {
Class.forName("com.mysql.cj.jdbc.Driver");
        con = DriverManager.getConnection("jdbc:mysql://localhost:3306/learning-club","root","");
        
        System.out.println("DB connected");
        }
catch (Exception e)
{
System.out.println("DB not connected");
        System.out.println(e);
        
}
}
}