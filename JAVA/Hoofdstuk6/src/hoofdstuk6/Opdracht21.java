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
public class Opdracht21 {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        String invoer;

        System.out.print("Geef je naam op:");
        String naam = br.readLine();

        System.out.print("Geef je leeftijd op:");

        int getal;
        invoer = br.readLine();
        getal = Integer.parseInt(invoer);
        if (getal >= 1) {
            for (int i = 1; i <= getal; i++) {
                System.out.println(naam);
            }
        }

        // Uitvoer naar het beeldscherm:
    }
}
