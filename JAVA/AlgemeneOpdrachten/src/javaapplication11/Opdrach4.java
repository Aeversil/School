/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication11;

import java.util.Scanner;


public class Opdrach4 {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        {
            
            System.out.println("Geef een Binair getal op");
            String s2 = in.nextLine();
            if ("#".equalsIgnoreCase(s2.trim())){
                
            }
            System.out.println(hoi(s2));
        }
    }
    

    private static String hoi(String s){
        int degree = 1;
        int n = 0;
        for (int k=s.length()-1; k>=0; k--){
            n += degree * (s.charAt(k) - '0');
            degree *= 2;
        }
        return "Het Decimale getal is: " + n;
    }

}