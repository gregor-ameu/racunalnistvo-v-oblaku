# AWS Services demo

This is a simple Python Flask webapp that uploads file to S3. We also provide AWS Lambda function that logs file's name to AWS CloudWatch.

## Web application

On your EC2 instance:
1. Stop apache, from now on, we will be serving pages with flask: `sudo systemctl status apache2`
2. Install flask: `sudo apt install python3-flask`
3. Create `/home/admin/flask_s3_app/app.py` with the following content:

```
from flask import Flask, request, render_template_string
import boto3
from werkzeug.utils import secure_filename

app = Flask(__name__)

# AWS S3 configuration
S3_BUCKET = "alma-web-gregor"  # Replace with your bucket name
s3_client = boto3.client('s3') # Assumes EC2 instance has IAM role or credentials configured

# HTML template for the upload form
UPLOAD_FORM = '''
<!DOCTYPE html>
<html>
<body>
    <h2>Upload a File to S3</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
'''

@app.route('/', methods=['GET', 'POST'])
def upload_file():
    if request.method == 'POST':
        file = request.files['file']
        if file:
            filename = secure_filename(file.filename)
            s3_client.upload_fileobj(file, S3_BUCKET, filename)
            return f"File {filename} uploaded successfully to S3!"
    return render_template_string(UPLOAD_FORM)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=False)
```

4. Set S3_BUCKET var to your bucket's name
5. Run the app: `sudo python3 app.py`
6. You should see something like:

```
 * Serving Flask app 'app'
 * Debug mode: off
WARNING: This is a development server. Do not use it in a production deployment. Use a production WSGI server instead.
 * Running on all addresses (0.0.0.0)
 * Running on http://127.0.0.1:80
 * Running on http://176.16.0.10:80
Press CTRL+C to quit
```

7. Visit your EC2's public IP with browser and try uploading a file.
8. Ensure it's inside your S3 bucket.

## Lambda

Set Lambda's trigger to the same S3 bucket as you're referencing in the webapp above.

```
def lambda_handler(event, context):
    try:        
        bucket = event['Records'][0]['s3']['bucket']['name']
        filename = event['Records'][0]['s3']['object']['key']
                
        print("File uploaded: " + filename)                
    except Exception as e:
        print(e)
```
