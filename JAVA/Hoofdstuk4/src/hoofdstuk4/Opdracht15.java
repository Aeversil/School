/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package hoofdstuk4;

/**
 *
 * @author Dunccan
 */
public class Opdracht15 {

    /**
     * @param args the command line argument
     */
    public static void main(String[] args) {
        double cijfer = -8;
        if (cijfer <0 || cijfer >10) {
            System.out.println("Het cijfer is niet gelegen tussen de 0 en 10");
        } else if (cijfer <= 3) {
            System.out.println("Het cijfer is een Zwaare onvoldoende.");
        } else if (cijfer <= 5.5) {
            System.out.println("Het cijfer is een onvoldoende!");
        } else if (cijfer < 8) {
            System.out.println("Het cijfer is een voldoende.");
        } else if (cijfer >= 8) {
            System.out.println("Het cijfer is een dikke voldoende, goed gedaan!");
        }
    }

}
