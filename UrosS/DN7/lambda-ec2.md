1. klic lambda funkcije in pošiljanja podatkov iz EC2
   ukaz ki sem ga uporabil za uspešno izvedbo naloge je:
   aws lambda invoke --function-name posliPodatke --payload '{"stevilo":"22", "kraj":"Postojna"}' --cli-binary-format raw-in-base64-out request.json
2. izvedba:
   ukaz sem poklical iz EC2 instance kjer imam postavljeno spletno stran.
   funkcija lambde je izvedla shrani.php iz instnce EC2-public, ki smo jo ustvarili med pradavanji in napolnila tabelo na EC2-DB instanci.
   z podatki, ki sem jih poslal preko aws-cli.
