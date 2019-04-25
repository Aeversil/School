/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication11;
import java.util.Scanner;
public class Opdracht2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args){
        System.out.print("Voer een nummer in:");
        Scanner scan = new Scanner(System.in);
        int number = scan.nextInt();
        int x = number;
        int fact = 1;
        
        if (x == 0 || x == 1) System.out.println("1");
        else {
            while(x > 1){
                fact = fact * x;
                x--;
            }
        }
        System.out.println("De faculteit van " + number + " is " + fact);
    
}
}