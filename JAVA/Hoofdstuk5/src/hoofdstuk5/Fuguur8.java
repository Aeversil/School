/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package hoofdstuk5;

/**
 *
 * @author Dunccan
 */
public class Fuguur8 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        for (int regel = 1; regel <= 8; regel++) {
            //System.out.println(teller);
            for (int space = 1; space <= (8 - regel); space++){
                System.out.print(" ");
            }
            for (int getal = 1; getal <= regel; getal++) {
                System.out.print(getal);
            }
               System.out.println();
        }

    }
}
