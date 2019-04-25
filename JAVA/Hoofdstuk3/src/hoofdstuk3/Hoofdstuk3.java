/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package hoofdstuk3;

/**
 *
 * @author Dunccan
 */
public class Hoofdstuk3 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a= 1, b= 2, c, d;
        c = ++a;    //a=2, c=2
        c = a++;    //a=3, c=2 (!)
        d = --b;    //b=1, d=1
        --b;        //b=0
        ++b;        //b=1
        b++;        //b=2
    }
    
}
