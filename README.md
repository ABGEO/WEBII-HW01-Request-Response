# WEBII-HW01-Request-Response

## Including

Include Autoloader
```php
require_once __DIR__ . '/Services/autoloader.php';
```
## Class Request
Import class
```php
use web2hw\Request;
```
Crete class new object
```php
$request = new Request();
```

### Class Methods
#### getHeaders()
Get request HTTP Headers

Get all headers
```php
$allHeaders = $request->getHeaders();
```
Get single header (Ex.: Host)
```php
$singleHeader = $request->getHeaders('Host');
```
Get more then one header
```php
$manyHeaders = $request->getHeaders(['Accept',  'Accept-Encoding']);
```

##### Allowed headers
[MDN -  HTTP headers](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers "MDN -  HTTP headers")

#### getMethod()
Get request HTTP method

#### getPath()
Get request path

#### getScheme()
Get request scheme(http or https)

#### getQueryParams()
Get request query parameters

#### get($key)
Get request query parameter by key

#### getPost()
Get request post data

## Class Response
Import class
```php
use web2hw\Response;
```

Crete class new object
```php
$request = new Response();
```

For sending the response you might:
- Set status code
```php
$response->setStatusCode(200);
```

- Set HTTP Headers
```php
$response->setHeaders([
    'Content-Type: application/json'
]);
```

- Set Content
```php
$arr = [
    'test' => 'vTest',
    'test2' => [
        'test2.1' => '2.1',
        'test2.2' => [
            'test2.2.1' => '2.2.1'
        ]
    ]
];

$response->setContent(json_encode($arr));
```

- Send it
```php
print_r($response->send());
```

**2019 &copy; Temuri Takalandze**
