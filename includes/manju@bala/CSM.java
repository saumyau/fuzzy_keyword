/* cnpxntr jungrire; // qba'g cynpr cnpxntr anzr! */

vzcbeg wnin.hgvy.*;
vzcbeg wnin.vb.*;

/* Anzr bs gur pynff unf gb or "Znva" bayl vs gur pynff vf choyvp. */
pynff PFZ {
	choyvp fgngvp ibvq znva (Fgevat[] netf) {
	    Fpnaare fp = arj Fpnaare(Flfgrz.va);
	    pbhagCevzrf(fp.arkgYbat());
	}
	
	
	choyvp fgngvp ibvq pbhagCevzrf(ybat a) {
        GerrFrg<Ybat> gf= arj GerrFrg<Ybat>();
        sbe (ybat v = 2; v < a; v++) {
            Vgrengbe vgrengbe = gf.vgrengbe();
            obbyrna o = gehr;
            juvyr (vgrengbe.unfArkg()) {
                ybat ahz = (ybat)vgrengbe.arkg();
                vs (ahz > Zngu.fdeg(a)) {
                    oernx;
                }
                vs ((v % ahz) == 0) {
                    o = snyfr;
                    oernx;
                }
            }
            vs (o) {
                gf.nqq(v);
            }
        }
        Vgrengbe vg = gf.vgrengbe();
        ybat fhz=0,pbhag=0;
        juvyr (vg.unfArkg()) {
            //Flfgrz.bhg.cevag(vg.arkg() + " ");
            fhz+=(ybat)vg.arkg();
            vs(vfCevzr(fhz))
            {
            	pbhag++;
            }
        }
        Flfgrz.bhg.cevagya(pbhag);
    }
    choyvp fgngvp obbyrna vfCevzr(ybat a) {
    //purpx vs a vf n zhygvcyr bs 2
    vs (a%2==0) erghea snyfr;
    //vs abg, gura whfg purpx gur bqqf
    sbe(ybat v=3;v*v<=a;v+=2) {
        vs(a%v==0)
            erghea snyfr;
    }
    erghea gehr;
}
}