deploy:
	aws s3 mb s3://cyve-test-lambda-bref
	sam package --template-file lambda.yaml --output-template-file .cloudformation.yaml --s3-bucket cyve-test-lambda-bref
	sam deploy --template-file .cloudformation.yaml --capabilities CAPABILITY_IAM --region us-east-1 --stack-name test-lambda-bref
.PHONY: deploy
