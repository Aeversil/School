/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication11;

import java.text.DecimalFormat;
import java.util.Scanner;

public class Opdracht3 {


 
    public static void main(String[] args) {
        java.text.DecimalFormat df = new DecimalFormat("#");
df.setMaximumFractionDigits(0);
        Scanner sc = new Scanner(System.in);
        System.out.println("Geef een nummer op: ");    
        int getal = sc.nextInt();
        System.out.println("Geef het exponent op: ");    
        int exp = sc.nextInt();
        System.out.printf(getal + " ^ " + exp + " is "
                +df.format (Math.pow((double) getal, (double) exp)));    
    }
}
