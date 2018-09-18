
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author F
 */
public class tuproFuzzy {

    private double findMax(double... vals) {
        double max = 0.0;

        for (double d : vals) {
            if (d > max) {
                max = d;
            }
        }

        return max;
    }

    public static void main(String[] args) {
        Scanner n = new Scanner(System.in);
        tuproFuzzy fuzz = new tuproFuzzy();
        double tidak[]= new double [20];
        double emosi;
        double provokasi;
        double tanpa_emo;
        double sedikit_emo;
        double normal;
        double emo;
        double emo_parah;
        double emo_akut;
        double tidak_provo;
        double sedikit;
        double provo;
        double provokasi_parah;
        double provokasi_akut;
        double tidak1;
        double tidak2;
        double tidak3;
        double tidak4;
        double tidak5;
        double tidak6;
        double tidak7;
        double tidak8;
        double tidak9;
        double tidak10;
        double tidak11;
        double tidak12;
        double tidak13;
        double tidak14;
        double tidak15;
        double tidak16;
        double tidak17;
        double tidak18;
        double tidak19;
        double tidak20;
        double maxtidak;
        double ya1;
        double ya2;
        double ya3;
        double ya4;
        double ya5;
        double ya6;
        double ya7;
        double ya8;
        double ya9;
        double ya10;
        double ya11;
        double ya12;
        double ya13;
        double ya14;
        double ya15;
        double ya16;
        double maxya;
        double hasil;
        tanpa_emo = 0;
        sedikit_emo = 0;
        normal = 0;
        emo = 0;
        emo_parah = 0;
        emo_akut = 0;
        tidak_provo = 0;
        sedikit = 0;
        provo = 0;
        provokasi_parah = 0;
        provokasi_akut = 0;
        hasil = 0;
        
        emosi = n.nextDouble();
        provokasi = n.nextDouble();
        if (emosi >= 0 && emosi <= 10) {
            tanpa_emo = 1;
        } else if (emosi > 10 && emosi <= 20) {
            tanpa_emo = (20 - emosi) / 10;
            sedikit_emo = (emosi - 10) / 10;
        } else if (emosi > 20 && emosi <= 30) {
            sedikit_emo = 1;
        } else if (emosi > 30 && emosi <= 40) {
            normal = (emosi - 30) / 10;
            sedikit_emo = 40 - emosi / 10;
        } else if (emosi > 40 && emosi <= 50) {
            normal = 1;
        } else if (emosi > 50 && emosi <= 60) {
            emo = (emosi - 50) / 10;
            normal = (60 - emosi) / 10;
        } else if (emosi > 60 && emosi <= 70) {
            emo = 1;
        } else if (emosi > 70 && emosi <= 80) {
            emo_parah = (emosi - 70) / 10;
            emo = (80 - emosi) / 10;
        } else if (emosi > 80 && emosi <= 90) {
            emo_parah = 1;
        } else if (emosi > 90 && emosi <= 100) {
            emo_akut = (emosi - 90) / 10;
            emo_parah = (100 - emosi) / 10;
        } else {
            System.out.println("Error");
        }

        if (provokasi >= 0 && provokasi <= 10) {
            tidak_provo = 1;
        } else if (provokasi > 10 && provokasi <= 20) {
            sedikit = (provokasi - 10) / 10;
            tidak_provo = (20 - provokasi) / 10;
        } else if (provokasi > 20 && provokasi <= 30) {
            sedikit = 1;
        } else if (provokasi > 30 && provokasi <= 40) {
            normal = (provokasi - 30) / 10;
            sedikit = (40 - provokasi) / 10;
        } else if (provokasi > 40 && provokasi <= 50) {
            normal = 1;
        } else if (provokasi > 50 && provokasi <= 60) {
            provo = (provokasi - 50) / 10;
            normal = (60 - provokasi) / 10;
        } else if (provokasi > 60 && provokasi <= 70) {
            provo = 1;
        } else if (provokasi > 70 && provokasi <= 80) {
            provokasi_parah = (provokasi - 70) / 10;
            provo = (80 - provokasi) / 10;
        } else if (provokasi > 80 && provokasi <= 90) {
            provokasi_parah = 1;
        } else if (provokasi > 90 && provokasi <= 100) {
            provokasi_akut = (provokasi - 90) / 10;
            provokasi_parah = (100 - provokasi) / 10;
        } else {
            System.out.println("Error");
        }
        
 
        tidak1 = Math.min(tanpa_emo, tidak_provo);
        tidak2 = Math.min(sedikit_emo, tidak_provo);
        tidak3 = Math.min(normal, tidak_provo);
        tidak4 = Math.min(emo, tidak_provo);
        tidak5 = Math.min(emo_parah, tidak_provo);
        tidak6 = Math.min(emo_akut, tidak_provo);
        tidak7 = Math.min(tanpa_emo, sedikit);
        tidak8 = Math.min(sedikit_emo, sedikit);
        tidak9 = Math.min(normal, sedikit);
        tidak10 = Math.min(emo, sedikit);
        tidak11 = Math.min(emo_parah, sedikit);
        tidak12 = Math.min(emo_akut, sedikit);
        tidak13 = Math.min(tanpa_emo, normal);
        tidak14 = Math.min(sedikit_emo, normal);
        tidak15 = Math.min(normal, normal);
        tidak16 = Math.min(emo, normal);
        tidak17 = Math.min(tanpa_emo, provo);
        tidak18 = Math.min(sedikit_emo, provo);
        tidak19 = Math.min(normal, provo);
        tidak20 = Math.min(emo, provo);
        maxtidak = fuzz.findMax(tidak1	,tidak2	,tidak3	,tidak4	,tidak5	,tidak6	,tidak7	,tidak8	,tidak9	,tidak10,tidak11,tidak12,tidak13,tidak14,tidak15,tidak16,tidak17,tidak18,tidak19,tidak20);
        ya1 = Math.min(emo_parah, normal);
        ya2 = Math.min(emo_akut, normal);
        ya3 = Math.min(emo_parah, provo);
        ya4 = Math.min(emo_akut, provo);
        ya5 = Math.min(tanpa_emo, provokasi_parah);
        ya6 = Math.min(sedikit_emo, provokasi_parah);
        ya7 = Math.min(normal, provokasi_parah);
        ya8 = Math.min(emo, provokasi_parah);
        ya9 = Math.min(emo_parah, provokasi_parah);
        ya10 = Math.min(emo_akut, provokasi_parah);
        ya11 = Math.min(tanpa_emo, provokasi_akut);
        ya12 = Math.min(sedikit_emo, provokasi_akut);
        ya13 = Math.min(normal, provokasi_akut);
        ya14 = Math.min(emo, provokasi_akut);
        ya15 = Math.min(emo_parah, provokasi_akut);
        ya16 = Math.min(emo_akut, provokasi_akut);
        maxya = fuzz.findMax(ya1,ya2,ya3,ya4,ya5,ya6,ya7,ya8,ya9,ya10,ya11,ya12,ya13,ya14,ya15,ya16);
        
        System.out.println(maxya);
        System.out.println(maxtidak);
        double b = maxtidak+maxya;
        hasil = ((10*maxtidak)+(20*maxya))/b;
        if (hasil > 10){
            System.out.println("Hoax");  
        }else {
            System.out.println("Tidak");
        }
    }

}
