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
public class Hoofdstuk4 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a = 19, b = 9;
        int verschil = 0;
        
        if(a > b){
                verschil= a - b;
        }else{
                verschil= b - a;
        }
        System.out.println("Verschil tussen " + a + " en " + b + " is " + verschil);
    }
    
}
