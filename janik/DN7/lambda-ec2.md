# lambda-ec2.md

## Uporaba AWS Lambda iz EC2 instance

### 1. Sprememba Lambda funkcije za uporabo parametrov iz dogodka (event)

Najprej sem uredil obstoječo AWS Lambda funkcijo `poslji_podatke`, da namesto vnaprej določenih (hardkodiranih) vrednosti uporablja vrednosti iz `event` objekta. Tako lahko funkcijo ponovno uporabim z različnimi podatki.

Popravljen del kode izgleda takole:

```python
stevilo = event.get("stevilo", 0)
kraj = event.get("kraj", "Neznano")
data = {
    "stevilo": stevilo,
    "kraj": kraj
}
```

S tem se funkciji ob vsakem klicu lahko dinamično posreduje nova vsebina (v JSON obliki).

---

### 2. Ustvarjanje testnega dogodka

Na AWS konzoli sem ustvaril nov testni dogodek z imenom `testCelje`, ki je vseboval naslednje podatke:

```json
{
  "stevilo": 8,
  "kraj": "Celje"
}
```

Funkcijo sem po tem zagnal iz konzole in opazoval odziv, ki je potrdil uspešno vstavljanje podatkov. Preveril sem tudi prikaz na spletni strani EC2_PUBLIC ([http://3.65.30.246/avtomobili.html](http://3.65.30.246/avtomobili.html)), kjer se je prikazal vnos `8 / Celje`, kar pomeni, da Lambda deluje pravilno.

---

### 3. Klic Lambda funkcije iz EC2 instance preko terminala z AWS CLI

Za povezavo iz EC2 instance z uporabo AWS CLI sem najprej zagotovil, da ima EC2 instanca primerno IAM vlogo. Dodal sem politiko, ki omogoča klic `lambda:InvokeFunction`.

Nato sem iz EC2_PUBLIC pošiljal podatke z naslednjim ukazom:

```bash
aws lambda invoke \
  --function-name poslji_podatke \
  --invocation-type RequestResponse \
  --cli-binary-format raw-in-base64-out \
  --payload '{"stevilo":125,"kraj":"Duplek"}' \
  output.json && cat output.json
```

Vsebina datoteke `output.json` je potrdila uspešen klic in vnos podatkov. Nato sem ponovno preveril spletno stran na EC2_PUBLIC in podatki `125 / Duplek` so bili vidni.

---

### Zaključek

S tem sem uspešno:

- prilagodil Lambda funkcijo za dinamičen vnos,
- jo testiral neposredno iz AWS konzole,
- in preveril delovanje tudi preko terminala iz EC2 instance z AWS CLI.
