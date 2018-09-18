/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author F
 */
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;

public class KNN {

    public static void main(String[] args) {

        class Sort implements Comparator<Sort> {

            double jarak;
            int output;

            public Sort(double jarak, int output) {
                this.jarak = jarak;
                this.output = output;
            }

            public Sort() {
            }

            @Override
            public int compare(Sort s1, Sort s2) {
                if (s1.jarak < s2.jarak) {
                    return -1;
                }
                if (s1.jarak > s2.jarak) {
                    return 1;
                }
                return 0;
            }

        }
        int jum1, jum0;
        
        BufferedReader br, brt;
        String line1, line2;
        ArrayList<String[]> training = new ArrayList();
        ArrayList<String[]> testing = new ArrayList();
        
        try {
            br = new BufferedReader(new FileReader("D:\\Tupro3\\training.csv"));
            while ((line1 = br.readLine()) != null) {
                String[] x = line1.split(",");
                training.add(x);
            }
            brt = new BufferedReader(new FileReader("D:\\Tupro3\\testing.csv"));
            while ((line2 = brt.readLine()) != null) {
                String[] x = line2.split(",");
                testing.add(x);
            }
        } catch (FileNotFoundException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        for (String[] y : testing) {
            ArrayList<Sort> hasil = new ArrayList();
            jum1 = 0;
            jum0 = 0;
            for (String[] x : training) {
                double jarak = 0;
                for (int i = 0; i <= 3; i++) {
                    jarak += Math.pow((Integer.parseInt(y[i]) - (Integer.parseInt(x[i]))), 2);
                }
                jarak = Math.sqrt(jarak);
                int n = Integer.parseInt(x[4]);
                hasil.add(new Sort(jarak, n));
                
            }

            hasil.sort(new Sort());
//            System.out.println(hasil);
//            for(Sort s : hasil) {
//                System.out.println(s.jarak+" "+s.output);
//            }
            
            for (int i = 0; i <= 90; i++) {
                
                if (hasil.get(i).output == 1) {
                    jum1++;
                } else {
                    jum0++;
                }
            }
            if (jum1 > jum0) {
                System.out.println("HOAX");
            } else {
                System.out.println("Tidak Hoax");
            }
        }

    }
}

