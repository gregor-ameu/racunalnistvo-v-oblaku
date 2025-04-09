import boto3
import time

BUCKET_NAME = "alma-web-zigat"
FILE_NAME = "file.txt"

#defined metadata
metadata = {
        "time-created": time.strftime("%Y-%m-%d %H:%M:%S"),
        "author": "Ziga Terzic",
        "organization": "Alma Mater"
}

s3 = boto3.client("s3")
s3.upload_file(FILE_NAME, BUCKET_NAME, FILE_NAME, ExtraArgs={"Metadata": metadata}) #added metadata as extraArgs

print(f"File {FILE_NAME} uploaded to {BUCKET_NAME}/{FILE_NAME}.")
