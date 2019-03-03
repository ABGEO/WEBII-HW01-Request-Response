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

#### hasHeader($key)
Check if request has header

#### getPath()
Get request path

#### getScheme()
Get request scheme(http or https)

#### getQueryParams()
Get request query parameters

#### getQuery($key)
Get request query parameter by key

#### getData()
Get request data by method

## Class Response
Import class
```php
use web2hw\Response;
```

Prepare data for transmission (Ex.: Array)
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
```

Crete class new object
Class takes 3 arguments:
- Content (**Required**; Mixed) - The data for returning
- Status Code (**Optional**; 200 by default; Integer) - The HTTP Status Code
- HTTP Headers (**Optional**; empty by default; Key Value Array) - The HTTP Headers


```php
$response = new Response(json_encode($arr), 200, ['Content-Type' => 'application/json']);
```

And send it
```php
echo $response->sendResponse();
```

**2019 &copy; Temuri Takalandze**
