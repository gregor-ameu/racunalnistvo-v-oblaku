- Najprej dobim napako pri aws cli
/ has 'other' write 40777
/snap/bin/aws

- Odstranim
sudo snap remove aws-cli

- Namestim priporočeno verzijo/obliko
curl "https://awscli.amazonaws.com/awscli-exe-linux-x86_64.zip" -o "awscliv2.zip"
unzip awscliv2.zip
sudo ./aws/install

- Preverim
which aws
aws --version

- Ob klicu Lambda funkcijo iz EC2 z AWS CLI dobim napako z avtorizacijami
An error occurred (AccessDeniedException) when calling the Invoke operation: 
User: arn:aws:sts::137119675056:assumed-role/ec2-s3-bucket-access/i-00764c68f377b9cb0 is not authorized to perform: 
lambda:InvokeFunction on resource: arn:aws:lambda:eu-central-1:137119675056:function:poslji-podatke because no identity-based policy allows the lambda:InvokeFunction action

- Dodam IAM pravice
Na rolo: ec2-s3-bucket-access
Dodam Permissions policies: AWSLambda_FullAccess

Deluje
ScreenShooti