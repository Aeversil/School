/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package hoofdstuk6;
import java.io.*;

/**
 *
 * @author Dunccan
 */
public class Hoofdstuk6 {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
       BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        String invoer;
        System.out.print("Geef je naam op:");
        // De variable invoer vullen:
        invoer = br.readLine();
        // Uitvoer naar het beeldscherm:
        System.out.println("Hallo " + invoer);
    }
}


