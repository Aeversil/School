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
public class Figuur6 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       for (int regels = 1; regels <= 5; regels++) {

            for (int kolom = 5; kolom >= regels; kolom--) {
                System.out.print(regels);
            }
            System.out.println();
        }
    }

}
