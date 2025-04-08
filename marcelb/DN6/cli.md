## aws mv
# Premakne datoteko in jo izbriše z izvorne lokacije.

# Premik datoteke iz EC2 v S3:
aws s3 mv file.txt s3://alma-bucket-marcel/file.txt

# Premik datoteke znotraj S3 (v mapo backup):
aws s3 mv s3://alma-bucket-marcel/file.txt s3://alma-bucket-marcel/backup/file.txt

## aws sync
# Sinhronizira vse datoteke iz lokalne mape v S3
# Naloži samo nove ali spremenjene datoteke

# Sinhronizacija lokalne mape DN6 z S3:
aws s3 sync ./DN6 s3://alma-bucket-marcel/DN6

# Sinhronizacija iz S3 nazaj na lokalni računalnik:
aws s3 sync s3://alma-bucket-marcel/DN6 ./DN6

# --delete (zbriše lokalne datoteke, ki jih ni več na S3)
aws s3 sync s3://alma-bucket-marcel/DN6 ./DN6 --delete
