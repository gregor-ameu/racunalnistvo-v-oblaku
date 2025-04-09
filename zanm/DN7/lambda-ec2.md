### Ugotovitve pri delu z EC2 in Lambdo

Da lahko preko EC2 pokličemo lambdo funkcijo, moramo EC2 IAM roli dodati nov policy in sicer mora ta imeti popoln dostop do Lambde.
Ime police je: AWSLambda_FullAccess

Ko imamo to nastavljeno lahko iz naše EC2 instance kličemo lambda funkcijo. Pokličemo jo z naslednjim ukazom:
aws lambda invoke \
 --function-name IME_TVOJE_FUNCKIJE \
 --payload file://payload.json \
 --cli-binary-format raw-in-base64-out

payload.json je JSON datoteka z ustrteznimi podatki
