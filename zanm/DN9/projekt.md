## Opis projektne naloge

### Naloga "scrappanja" podatkov o igralcih v spletni igri Buzzerbeater
Link do igre: https://www.buzzerbeater.com/default.aspx?lang=sl-SI


### Opis igre
To je igra, ki je simulacija košarkarskega managerja. Uporabniki po državah igrajo med seboj in znotraj so narejene določene lige, ki so sortirane podobno kot v realnosti. Vsaka država ima svojo ligo in v vsaki državi so lige razvršečene po težavnosti. Tako je cilj igre čimvečkrat postati prvak svoje lige in se uvrstiti v prvo slovensko ligo, kjer igra 16 najboljših ekip, 16 najboljših uporabnikov. Da pa bi to dosegel moraš pokazati odlične sposobnosti pri izbiri dobrih igralcev, treningu igralcev ter pametnem in potrpežljivem vodenju kluba.

### Opis problema
Vsak igralec ima svoje sposobnosti, ki so kategorizirane po jakosti od 1 (grozljiv) do 20 (mitski). (Primer: Igralec ima sposobnost meta iz skoka 11 (Iztopajoč))
Glede na te sposobnosti se igralcu določi njegova plača, ki je pomemben del pri sestavljanju ekipe. S skupino prijeteljev, ki igramo skupaj smo ugotovili, da nekatere sposobnosti precej bolj vplivajo na povišanje plače kot druge in dostikrat se sprašujemo kako bi sestaavili svojo ekipo, da bi bila čimboljša in finančno ugodna.
Cilj moje naloge je da, pridobim čimveč podatkov o igralcih, ki so trenutno na trgu (tem igralcem so videne sposobnosti, ostalim, ki niso naprodaj, pa ne) in ugotovim katere so tiste sposobnosti, ki delajo igralce tako drage in kako to znanje izkoristiti za napredek.

Napisano že imam python skripto, ki mi pridobi podatke o približno 900 igralcev na enkrat. Ideja je, da imam postavljena javna serverja, na enem bo tekla ta python skripta, na drugem pa bo prikaz podatkov. Na tega drugega bom verjetno tudi postavil gumb, ki bo tisto skripto zagnal. Podatke bom pridobival vsake 3 dni, saj je to najmanjše možno število, kolikor dni je igralec lahko na trgu, tako da bom dobival sveže igralce brez preveč podvajanj. Podatke bom shranjeval v neko bazo, najverjetneje v S3. V delo bom vključil še kakšno rešitev iz AWS-a.
