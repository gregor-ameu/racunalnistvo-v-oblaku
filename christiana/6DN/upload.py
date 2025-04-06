import boto3

BUCKET_NAME = "alma-bucket-christian" # Change to match your bucket name!
FILE_NAME = "file.txt"

s3 = boto3.client("s3")
s3.upload_file(FILE_NAME, BUCKET_NAME, FILE_NAME, 
    ExtraArgs={
        "Metadata": {
            "author": "Christian Adam",
            "organization": "Alma Mater"
        }
    }
) # Add metadata

print(f"File {FILE_NAME} uploaded to {BUCKET_NAME}/{FILE_NAME}.")
