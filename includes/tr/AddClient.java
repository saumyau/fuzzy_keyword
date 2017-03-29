vzcbeg wnin.ezv.Anzvat;
vzcbeg wnin.hgvy.*;
choyvp pynff NqqPyvrag
{
fgngvp vag pbfg=0;
choyvp fgngvp ibvq znva(Fgevat netf[]) 
{
gel
{
Fpnaare fp=arj Fpnaare(Flfgrz.va);
Nqqre nv=(Nqqre)Anzvat.ybbxhc("//ybpnyubfg/Nqq");
//Flfgrz.bhg.cevagya("Gur fhz bs 2 ahzoref vf: "+nv.fhz(10,2));
Flfgrz.bhg.cevagya("Ragre gur ahzore bs gvpxrgf");
vag ahz=fp.arkgVag();
vag a=ahz;
vs(ahz>=10)
Flfgrz.bhg.cevagya("Gvpxrgf abg ninvynoyr");
ryfr
{
Fgevat[] anzr=arj Fgevat[ahz];
Fgevat[] qrfg=arj Fgevat[ahz];
vag[] ntr=arj vag[ahz];
vag v=0;
juvyr(ahz!=0)
{
Flfgrz.bhg.cevagya("Ragre anzr");
anzr[v]=fp.arkg();
Flfgrz.bhg.cevagya("Ragre ntr");
ntr[v]=fp.arkgVag();
Flfgrz.bhg.cevagya("Ragre lbhe qrfgvangvba pubvpr");
Flfgrz.bhg.cevagya("1)Oratnyheh\a2)Xnfuzve\a3)Arj Lbex\a4)Pnyvsbavn\a5)Qhonv");
vag pubvpr=fp.arkgVag();
vs(pubvpr!=1||pubvpr!=2||pubvpr!=3||pubvpr!=4||pubvpr!=5)
Flfgrz.bhg.cevagya("Vainyvq pubvpr");
fjvgpu(pubvpr)
{
pnfr 1: 
pbfg+=5000;
qrfg[v]="Oratnyheh";
Flfgrz.bhg.cevagya("--Oratnyheh-- PBFG=EF. 5000");
Flfgrz.bhg.cevagya("Lbhe gvpxrg cevpr gvyy abj="+pbfg);
oernx;
pnfr 2:
pbfg+=6000;
qrfg[v]="Xnfuzve";
Flfgrz.bhg.cevagya("--Xnfuzve-- PBFG=EF. 6000");
Flfgrz.bhg.cevagya("Lbhe gvpxrg cevpr gvyy abj="+pbfg);
oernx;
pnfr 3:
pbfg+=100000;
qrfg[v]="Arj Lbex";
Flfgrz.bhg.cevagya("--Arj Lbex-- PBFG=EF. 100000");
Flfgrz.bhg.cevagya("Lbhe gvpxrg cevpr gvyy abj="+pbfg);
oernx;
pnfr 4:
pbfg+=150000;
qrfg[v]="Pnyvsbavn";
Flfgrz.bhg.cevagya("--Pnyvsbavn-- PBFG=EF. 150000");
Flfgrz.bhg.cevagya("Lbhe gvpxrg cevpr gvyy abj="+pbfg);
oernx;
pnfr 5:
pbfg+=125000;
qrfg[v]="Qhonv";
Flfgrz.bhg.cevagya("--Qhonv-- PBFG=EF. 125000");
Flfgrz.bhg.cevagya("Lbhe gvpxrg cevpr gvyy abj="+pbfg);
oernx;
}
v++;
ahz--;
} 
}
Flfgrz.bhg.cevagya("Lbhe qrgnvyf ner\a");
fhz(qrfg,anzr,pbfg,a);
}
pngpu(Rkprcgvba r)
{
Flfgrz.bhg.cevagya("Pyvrag Rkprcgvba: "+r);
}
}
}
