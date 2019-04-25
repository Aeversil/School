/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication11;

/**
 *
 * @author Dunccan
 */
public class JavaApplication11 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here       
        int a = 1;
        int b = 0;
        int c = 0;

        for (int i = 0; i <= 20; i++) {
            System.out.println(c);
            c = b + a;
            a = b;
            b = c;
        }
    }
}

    

