# AWS CLI – `mv` in `sync`

Ukaza `aws mv` in `aws sync` sta del AWS CLI (Command Line Interface) in služita za upravljanje datotek v Amazon S3. 

---

## `aws s3 mv`

Ukaz **`mv`** pomeni *move* — premakni datoteko ali mapo.

### Sintaksa:
```bash
aws s3 mv <vir> <cilj> [--recursive]
```

### Primeri:

1. **Premakni eno datoteko v S3:**
   ```bash
   aws s3 mv lokalna_datoteka.txt s3://moj-bucket/
   ```

2. **Premakni mapo rekurzivno (potem se lokalne datoteke izbrišejo):**
   ```bash
   aws s3 mv ./moja-mapa s3://moj-bucket/ --recursive
   ```

3. **Premakni datoteke iz enega S3 bucket-a v drugega:**
   ```bash
   aws s3 mv s3://bucket1/pot/ s3://bucket2/pot/ --recursive
   ```

### Pomembno:
- `mv` **izbriše** datoteke iz izvorne lokacije po prenosu.
- Ne sinhronizira datotek, samo premakne tiste, ki obstajajo.

---

## `aws s3 sync`

Ukaz **`sync`** pomeni *synchronize* — uskladi vsebino dveh lokacij (lokalno ↔ S3 ali S3 ↔ S3).

### Sintaksa:
```bash
aws s3 sync <vir> <cilj> [opcije]
```

### Primeri:

1. **Sinhroniziraj lokalno mapo z bucketom:**
   ```bash
   aws s3 sync ./moja-mapa s3://moj-bucket/
   ```

2. **Sinhroniziraj S3 bucket z lokalno mapo:**
   ```bash
   aws s3 sync s3://moj-bucket/ ./backup/
   ```

3. **Sync med dvema bucketoma:**
   ```bash
   aws s3 sync s3://bucket1/ s3://bucket2/
   ```

### Pomembno:
- Prenese **samo nove ali spremenjene** datoteke.
- Ne briše privzeto ničesar – razen če dodamo `--delete`.

### Primer z brisanjem:
```bash
aws s3 sync ./moja-mapa s3://moj-bucket/ --delete
```
⬆️ S tem ukazom se **v cilju izbrišejo** datoteke, ki jih v viru ni več – popolna sinhronizacija.

---

## Razlike na kratko:

| Funkcija             | `aws s3 mv`                           | `aws s3 sync`                       |
|----------------------|---------------------------------------|-------------------------------------|
| Namen                | Premikanje (z brisanjem iz izvora)    | Sinhronizacija                      |
| Brisanje iz izvora   | Da                                    | Ne (razen z `--delete` na cilju)    |
| Podpora za rekurzijo | Z `--recursive`                       | Vedno rekurzivno                    |
| Primeren za backup   | Ne (izbriše izvor!)                   |  Da                                 |
