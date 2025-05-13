# Arhitektura rešitve

## Komponente

- VPC: lastno omrežje v AWS
- Javno podomrežje: za EC2 z WordPress
- Zasebno podomrežje: za EC2 z MariaDB
- S3: za slike iz WordPressa (Media Cloud)
- IAM: pravice za Lambda in S3
- Lambda: funkcija za varnostno kopijo slik v S3
- GitHub: repozitorij z vso kodo in dokumentacijo


