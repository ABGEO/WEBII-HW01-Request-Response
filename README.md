# WEBII-HW01-Request

## Including

Include Autoloader
```php
require_once __DIR__ . '/Services/autoloader.php';
```
Import class
```php
use web2hw\Request;
```
Crete class new object
```php
$request = new Request();
```

## Class Methods

### getHeaders()

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

#### Allowed headers
[MDN -  HTTP headers](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers "MDN -  HTTP headers")

**2019 &copy; Temuri Takalandze**
