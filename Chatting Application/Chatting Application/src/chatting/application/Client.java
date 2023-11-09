/* Concepts Used : -
1. Java Basics
2. Java Swing and AWT
3. Socket Programming.
 */
package chatting.application;
 
import static chatting.application.Server.dout;
import static chatting.application.Server.f;
import static chatting.application.Server.formatLabel;
import static chatting.application.Server.vertical;
import javax.swing.*;
import java.awt.*;  //imported beacuse Color class lies only in this package
import java.awt.event.*; // to implemet ActionListener interface
import javax.swing.border.*;
import java.util.*;
import java.text.*;
import java.net.*;
import java.io.*;
public class Client implements ActionListener {
    
    JTextField text1; //globally declaration 
    static JPanel a1;
    static Box vertical = Box.createVerticalBox();
    static DataOutputStream dout;
    static JFrame f =new JFrame();
    
   Client() //Because we need to show the frame instantly after class runs
   {
       f.setLayout(null); // We will create our own layout
       //Now we will create a Panel over our frame. (Panel is used to add something on frame other than frame)
       JPanel p1 = new JPanel();
       p1.setBackground(new Color(7,94,84));  //here we have created the object of Color class and pass the argument of RGB
       p1.setBounds(0,0,450,70);
       p1.setLayout(null);
       f.add(p1); // to set the panel over frame
       
       ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("icons/3.png")); 
       // to use image from the directory we use an Class name ClassLoader and static method getSystemResource(-file path/name-)
       Image i2 = i1.getImage().getScaledInstance(25, 25, Image.SCALE_DEFAULT); //here we have our image re-scaled into i2 object
       ImageIcon i3 = new ImageIcon(i2); //we can't pass i2 as argument that's why we convert our scaled image into ImageIcon object.
       
       JLabel back = new JLabel(i3); //to set the image over frame (we can't set the image directly , we need to create the object of class name JLabel
       back.setBounds(5,20,25,25);  // it only takes the setBounds method only when we had set panel layput to null
       p1.add(back); //because we are adding our icon over panel
       
       back.addMouseListener(new MouseAdapter(){   //addMouseListener is an abstract method
           public void mouseClicked(MouseEvent ae){  //for mouse's click event we need mouseClicked method which take MouseEevent's object as an argument
               System.exit(0);
           }
       }); 
       //for setting second image 1.png (Profile)
       ImageIcon i4 = new ImageIcon(ClassLoader.getSystemResource("icons/2.png")); 
       // to use image from the directory we use an Class name ClassLoader and static method getSystemResource(-file path/name-)
       Image i5 = i4.getImage().getScaledInstance(50, 50, Image.SCALE_DEFAULT); //here we have our image re-scaled into i2 object
       ImageIcon i6 = new ImageIcon(i5); //we can't pass i2 as argument that's why we convert our scaled image into ImageIcon object.
       JLabel profile = new JLabel(i6); //to set the image over frame (we can't set the image directly , we need to create the object of class name JLabel
       profile.setBounds(40,10,50,50);  // it only takes the setBounds method only when we had set panel layput to null
       p1.add(profile); //because we are adding our icon over panel
       
       //for settinf third image video.png
       ImageIcon i7 = new ImageIcon(ClassLoader.getSystemResource("icons/video.png")); 
       // to use image from the directory we use an Class name ClassLoader and static method getSystemResource(-file path/name-)
       Image i8 = i7.getImage().getScaledInstance(30, 30, Image.SCALE_DEFAULT); //here we have our image re-scaled into i2 object
       ImageIcon i9 = new ImageIcon(i8); //we can't pass i2 as argument that's why we convert our scaled image into ImageIcon object.
       JLabel video = new JLabel(i9); //to set the image over frame (we can't set the image directly , we need to create the object of class name JLabel
       video.setBounds(300,20,30,30);  // it only takes the setBounds method only when we had set panel layput to null
       p1.add(video); //because we are adding our icon over panel
       
        //for settinf third image phone.png
       ImageIcon i10 = new ImageIcon(ClassLoader.getSystemResource("icons/phone.png")); 
       // to use image from the directory we use an Class name ClassLoader and static method getSystemResource(-file path/name-)
       Image i11 = i10.getImage().getScaledInstance(35, 30, Image.SCALE_DEFAULT); //here we have our image re-scaled into i2 object
       ImageIcon i12 = new ImageIcon(i11); //we can't pass i2 as argument that's why we convert our scaled image into ImageIcon object.
       JLabel phone = new JLabel(i12); //to set the image over frame (we can't set the image directly , we need to create the object of class name JLabel
       phone.setBounds(360,20,35,30);  // it only takes the setBounds method only when we had set panel layput to null
       p1.add(phone); //because we are adding our icon over panel
       
        //for settinf third image threedot.png
       ImageIcon i13 = new ImageIcon(ClassLoader.getSystemResource("icons/3icon.png")); 
       // to use image from the directory we use an Class name ClassLoader and static method getSystemResource(-file path/name-)
       Image i14 = i13.getImage().getScaledInstance(10, 25, Image.SCALE_DEFAULT); //here we have our image re-scaled into i2 object
       ImageIcon i15 = new ImageIcon(i14); //we can't pass i2 a argument that's why we convert our scaled image into ImageIcon object.
       JLabel icon = new JLabel(i15); //to set the image over frame (we can't set the image directly , we need to create the object of class name JLabel
       icon.setBounds(420,20,10,25);  // it only takes the setBounds method only when we had set panel layput to null
       p1.add(icon); //because we are adding our icon over panel
       
       JLabel name = new JLabel("Yuvraaj");
       name.setBounds(110,15,200,18);
       name.setForeground(Color.WHITE);
       name.setFont(new Font("SAN_SERIF", Font.BOLD,18));
       p1.add(name);
       
       JLabel status = new JLabel("Active Now");
       status.setBounds(110,35,100,18);
       status.setForeground(Color.WHITE);
       status.setFont(new Font("SAN_SERIF", Font.BOLD,14));
       p1.add(status);
       
       a1 = new JPanel();
       a1.setLayout(null);
       a1.setBounds(0,70,450,555);
       a1.setForeground(Color.GRAY);
        
       
       text1 =  new JTextField();
       text1.setBounds(9,510,310,40);
       text1.setFont(new Font("SANS_SERIF",Font.PLAIN,16));    
       a1.add(text1);
       
       JButton send = new JButton("Send");
       send.setBounds(320,510,100,40);
       send.setBackground(new Color(7,94,84));
       send.setForeground(Color.WHITE);
       send.addActionListener(this);  //for the event for send butttton
       send.setFont(new Font("SANS_SERIF",Font.PLAIN,16)); 
       a1.add(send);
       f.add(a1);
      // ...

/* Create a bottom panel for input and send button
JPanel bottomPanel = new JPanel();
bottomPanel.setLayout(null); // Use null layout for the bottom panel
bottomPanel.setBounds(0, 590, 450, 70);

// Create an input field for typing messages
JTextField text1 = new JTextField();
text1.setBounds(5, 5, 310, 40); // Adjusted coordinates to fit within the bottom panel
text1.setFont(new Font("SANS_SERIF", Font.PLAIN, 16));
bottomPanel.add(text1); // Added text1 to the bottom panel

// Create a "Send" button
JButton send = new JButton("Send");
send.setBounds(320, 5, 100, 40); // Adjusted coordinates and size to fit within the bottom panel
send.setBackground(new Color(7, 94, 84));
send.setForeground(Color.WHITE);
send.setFont(new Font("SANS_SERIF", Font.PLAIN, 16));
bottomPanel.add(send); // Added send button to the bottom panel

// Add the bottom panel to the main frame
add(bottomPanel);*/

// ...

    f.setSize(450,700);  //to set the size of frame
    f.setLocation(800,50);    //used to change the location from its origin
    //setUndecorated(true); //for removing default header
    f.getContentPane().setBackground(Color.WHITE);  //to change the color of whole frame
    
    f.setVisible(true); // it is mandatory mathod, used to display the frame
   }
   
   public void actionPerformed(ActionEvent ae)
   {
       try{
        String out = text1.getText(); //to get the input from send button
        //System.out.println(out); //to print the send button (casulally)
        a1.setLayout(new BorderLayout());
        
        //JLabel output = new JLabel(out); //need to convert out which is an String into an Label
        
        JPanel p2 = formatLabel(out);
       // p2.add(output); //adding the out into panel
        JPanel right = new JPanel(new BorderLayout());
        right.add(p2,BorderLayout.LINE_END); //on right side of BorderLayout
        vertical.add(right);
        vertical.add(Box.createVerticalStrut(15));
        a1.add(vertical, BorderLayout.PAGE_START);
        
        dout.writeUTF(out);
        
        text1.setText("");
        
        f.repaint();//1
        f.invalidate();//2
        f.validate(); //3. all three are the methods of JFrame's object
       }catch(Exception e){
           e.printStackTrace();
       }
   }
   
   public static JPanel formatLabel(String out)
   {
       JPanel panel = new JPanel();
       panel.setLayout(new BoxLayout(panel, BoxLayout.Y_AXIS));
       JLabel output = new JLabel("<html><p style =\"width :150px\">" + out + "</p></html>"); //to set the fixed width of messgage layout
       output.setFont(new Font("Tahoma",Font.PLAIN,16));
       output.setBackground(new Color(37,211,102));
       output.setOpaque(true); //to show the bg color
       output.setBorder(new EmptyBorder(15,15,15,15)); // it is done for padding around the message
       panel.add(output);
       Calendar cal = Calendar.getInstance();  //to show the  timing of message
       SimpleDateFormat sdf = new SimpleDateFormat("HH:mm");
       JLabel time = new JLabel();
       time.setText(sdf.format(cal.getTime())); //setting values in JLabel dynamically
       panel.add(time);
       return panel;
   }
    public static void main(String args[])
    {
        new Client(); //Anonymous object (We can create normal object too)
        try
        {
            Socket s = new Socket("127.0.0.1",6001); //arguments = (local_host, Port_Number_of_server)
            DataInputStream din = new DataInputStream(s.getInputStream()); //to receive the message
                 dout = new DataOutputStream(s.getOutputStream()); //to send the message
                 while(true) //here we will use our protocols
                {
                     a1.setLayout(new BorderLayout());
                    String msg = din.readUTF(); //reading the recieved messages
                    JPanel panel = formatLabel(msg); // to add the recieved message into our panel
                    
                    JPanel left = new JPanel(new BorderLayout());  //adjusting into border layout
                    left.add(panel, BorderLayout.LINE_START); // placing on left side
                    vertical.add(left);
                    vertical.add(Box.createVerticalStrut(15));
                    a1.add(vertical, BorderLayout.PAGE_START);
                    f.validate();
                }
        }catch(Exception e)
        {
            e.printStackTrace();
        }
    }
    
}
