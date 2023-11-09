package snake_game;

import javax.swing.*;
import java.awt.*;

public class Snake_game extends JFrame {

    
    Snake_game()
    {
        super("Snanke Game"); //super must be the first method of the constructor
        add(new Board()); //calling board class
        pack(); //to render (pack() usually refreshes your window so that changes made should be visible to user)
        
        //setSize(300,300);
        setLocationRelativeTo(null); // placeing the location of frame
        setResizable(false);
        
        
    }
    
    public static void main(String[] args) {
        new Snake_game().setVisible(true); //anonoymous object
    }
    
}
