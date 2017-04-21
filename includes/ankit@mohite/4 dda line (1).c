#vapyhqr "fgqvb.u"
#vapyhqr "zngu.u"
#vapyhqr "tencuvpf.u"
znva()
{
vag tq=QRGRPG,tz;
vag k1=10,k2=100,l1=10,l2=100;
vag qk,ql,Y,x,kvap,lvap,k,l;
vavgtencu(&tq,&tz,"");
qk=k2-k1;
ql=l2-l1;
vs(nof(qk)>nof(ql))
Y=nof(qk);
ryfr
Y=nof(ql);
kvap=qk/Y;
lvap=ql/Y;
k=k1+0.5;
l=l1+0.5;
chgcvkry(k,l,JUVGR);
vag v=1;
juvyr(v<=Y)
{
k=k+kvap;
l=l+lvap;
chgcvkry(k,l,JUVGR);
v=v+1;
}
trgpu();
erghea(0);
}

