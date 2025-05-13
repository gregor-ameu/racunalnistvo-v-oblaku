Izdelaj nov test event za funkcijo, ki smo jo naredili na predavanju. Testne parametre definiraj kot 
{ "stevilo": 8, "kraj": "Celje" }. Popravi funkcijo, da se bosta vrednosti spremenljivk stevilo in 
kraj vzeli iz parametra event.  

1) Funkcijo sem prilagodil na naslednji način:  
   1.1) V url povezavi sem namesto že vnesenih spremenljiv vnesel spremenljivki {stevilo} in {kraj}.  
   1.2) Tem sem nato določil vrednosti v testu.  

2) Nato sem funkcijo pognal, katera mi je na strani delovala.  
   (slika 2.png)  

---

1. Razišči možnost klica Lambda funkcije poslji-podatke iz svoje EC2 instance z AWS CLI (ki smo ga uporabili za S3).  

   a) Pod Lambda --> Add triggers, sem dodal nov trigger, kateri naj bi se zagnal ob nalaganju novih datotek.  
   b) Pod events sem vključil vse možnosti za dodajanje in brisanje datotek.  
   (slika 3.png)  
   c) Triger sem uspešno kreiral in ga povezal.  
   (slika 4.png, slika 4.1.png)  

   d) Ob uspešnem vnosu datoteke naj bi se zagnal trigger, vendar v mojem primeru se je neuspešno zagnal.  
