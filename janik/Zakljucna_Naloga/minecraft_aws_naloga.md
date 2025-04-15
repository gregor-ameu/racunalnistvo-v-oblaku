# Načrt za izvedbo naloge: Minecraft strežniška platforma na AWS

Za najino projektno nalogo bova pripravila rešitev, ki bo temeljila na AWS oblaku in bo omogočala delovanje več Minecraft strežnikov z možnostjo centraliziranega upravljanja prek lastne spletne aplikacije. 
Celotna rešitev bo zasnovana kot zasebna igralna platforma za prijatelje ali ožji krog uporabnikov, z možnostjo avtomatskega zagona, izklopa in dnevnega varnostnega kopiranja "minecraft svetov".


## 1. Infrastruktura v AWS - Jani in Christian

Vzpostavila bova **VPC (Virtual Private Cloud)**, znotraj katerega boma ustvarila dve ločeni **podomrežji (subneta)**:
- **Javno podomrežje**, kamor boma namestila manjšo EC2 instanco za spletno upravljalno stran.
- **Zasebno podomrežje**, v katerem bo tekla glavna EC2 instanca s strežniki za igranje in Aurora RDS podatkovno bazo.


## 2. Minecraft strežniki v Dockerju - Jani

Na glavni EC2 instanci (predvidoma tipa `t3.large`) boma namestila **Docker** in konfigurirala tri ločene kontejnerje:
- `survival` (za preživetveni način)
- `creative` (za ustvarjalni način)
- `custom` (modiran strežnik z dodatki)

Vsak kontejner bo uporabljal svoj port (npr. 25565, 25566, 25567) in bo imel lastno mapo za shranjevanje sveta, ki jo bova mountala kot volumen v Docker.


## 3. Upravljalna spletna stran (Admin UI) - Christian

Na manjši EC2 instanci (`t3.micro`) bom postavila **spletno aplikacijo** (pisano v Pythonu – Flask), ki bo služila kot **nadzorna plošča** za administratorje. Stran bo omogočala:
- Pregled whiteliste uporabnikov (podatki iz Aurora RDS)
- Dodajanje novih igralcev
- Pregled aktivnih igralcev na strežnikih
- Pošiljanje zahtevkov za zagon/izklop glavnega strežnika

Spletna aplikacija bo komunicirala z drugimi komponentami prek **RDS** (za whitelist) in **Lambda funkcij** (za vklop glavne EC2, če bo izklopljena).


## 4. Aurora RDS (MySQL baza) - Jani 

V zasebnem subnetu boma vzpostavila **Aurora RDS** z MySQL pogonom, kjer bomo hranili vse podatke o uporabnikih:
- Igralne račune (uporabniška imena)
- Ime in priimek

Te podatke bo uporabljala tako spletna stran kot skripte, ki bodo generirale `whitelist.json` datoteko za Minecraft strežnike.


## 5. Samodejen vklop in izklop strežnikov - Christian

Za varčevanje s stroški boma implementirala **pametno upravljanje virov**:
- Glavni strežnik se bo **vklopili na zahtevo** prek admin spletne strani. Administrator bo kliknil gumb, ki bo sprožil zahtevek na **API Gateway**, ta pa bo poklical **Lambda funkcijo**, ki bo zagnala EC2 instanco ali določen Docker kontejner.
- Strežnik bo preverjal število aktivnih igralcev (prek RCON ali `mcstatus`). Če bo strežnik več kot določen čas prazen, se bo **samodejno izklopil**.

Ta logika bo omogočila, da bo glavni strežnik tekel le takrat, ko ga bo kdo uporabljal, kar bo bistveno zmanjšalo stroške delovanja. Lahko ga bo pa admin kadarkoli prižgal.


## 6. Varnostne kopije v S3 (prek EventBridge + Lambda) - Jani

Dnevne varnostne kopije svetov boma izvedla z uporabo **AWS EventBridge (CloudWatch)**. V EventBridge boma nastavila pravilo, ki bo vsak dan ob določeni uri sprožilo **Lambda funkcijo**, ta pa bo izvedla naslednje korake:
- Povezala se bo z EC2 instanco prek **SSM (AWS Systems Manager)** in bo dostopala do shranjenih svetov.
- Arhiv bo naložila v **S3 bucket**, v ustrezno mapo glede na strežnik in datum (npr. `backups/survival/2025-04-10.tar.gz`).

S tem pristopom bova dosegla popolnoma avtomatizirano, zanesljivo in razširljivo varnostno kopiranje, ki ne bo odvisna od razpoložljivosti EC2 instanc ali notranjih skript.


## 7. GitHub + GitHub Actions - Christian

Kodo spletne aplikacije za upravljanje (Flask) boma naložila na **GitHub repozitorij**. Uporabila bova **GitHub Actions**, ki bo ob vsakem `push`-u:
- Avtomatsko vzpostavil povezavo z admin EC2 instanco prek SSH
- Prenesel novo verzijo aplikacije
- Ponovno zagnal Flask aplikacijo

S tem bova vzpostavila sistem, ki bo omogočal enostavno in hitro posodabljanje admin strani brez ročnega poseganja na strežnik.


## Zaključek

Z zgornjo rešitvijo bova pokrila vse zahteve naloge:
- AWS VPC, subneti, EC2, Lambda, S3, RDS, API Gateway, Docker, Flask
- Docker virtualizacijo in avtomatizacijo znotraj EC2
- Pametno upravljanje virov (on-demand delovanje + samodejen izklop)
- Varnostne kopije z uporabo EventBridge + Lambda
- Uporabo GIT-a in GitHub Actions
- Grajen grafični vmesnik (web UI) za centralno upravljanje strežnikov
