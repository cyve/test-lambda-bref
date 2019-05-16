# cyve/test-lambda-bref

# Installation
https://bref.sh/docs/installation.html

# Deployment
```bash
composer install --optimize-autoloader --no-dev
aws s3 mb s3://cyve-test-lambda-bref
sam package --template-file lambda.yaml --output-template-file .cloudformation.yaml --s3-bucket cyve-test-lambda-bref
sam deploy --template-file .cloudformation.yaml --capabilities CAPABILITY_IAM --region us-east-1 --stack-name test-lambda-bref
```

# Test
```bash
vendor/bin/bref invoke test-lambda-bref-hello --event='{"name": "Cyril" }'
```

# Usage
```php
use Aws\Lambda\LambdaClient;

$lambda = new LambdaClient(['version' => 'latest', 'region' => 'us-east-1']);
$result = $lambda->invoke([
    'FunctionName' => 'test-lambda-bref-hello',
    'Payload' => json_encode(['name' => 'Cyril']),
]);
var_dump(json_decode($result->get('Payload')->getContents()));

```

# Documentation
https://bref.sh/docs/
