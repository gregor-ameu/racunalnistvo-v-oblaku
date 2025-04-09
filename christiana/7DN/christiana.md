Opis, kaj smo delali za 7DN:

Prilagoditev AWS-Lambda funkcije:

Funkcija poslji-podatke je bila prilagojena tako, da sprejema vhodne parametre iz dogodka event. 
Parametra stevilo in kraj se zdaj prebereta iz JSON objekta, kot določa testni primer: 
{ "stevilo": 8, "kraj": "Celje" }. 
Funkcija sestavi JSON telo in ga pošlje kot HTTP POST zahtevek na oddaljeno PHP skripto z uporabo urllib.request.

Dodana je tudi obravnava HTTP in URL napak ter preverjanje odziva strežnika, kar omogoča zanesljivejše 
delovanje funkcije v primeru nepričakovanih odzivov ali napak.

Obstoječa funkcionalnost za branje podatkov (GET) je ostala nespremenjena in omogoča prikaz vseh obstoječih zapisov.

Preverjanje delovanja celotne poti:

Po prilagoditvah je bila Lambda funkcija ponovno zagnana s testnimi parametri. Odziv funkcije je potrdil uspešno 
pošiljanje podatkov. Ob osvežitvi spletne strani, ki uporablja fetch() klic za branje podatkov iz tabela.php, 
je bil nov zapis viden v HTML tabeli, kar potrjuje, da je celoten proces deloval pravilno: Lambda → PHP → MySQL → HTML.

Izklop EventBridge proženja:

Po navodilih iz naloge je bil odstranjen EventBridge sprožilec iz AWS Lambda funkcije. 
To je bilo izvedeno prek konzole AWS pod zavihkom Configuration > Triggers, 
kjer je bil izbran EventBridge in kliknjeno “Delete”.