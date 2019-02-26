# WEBII-HW01-Request

## Including

1. Include Autoloader
```php
require_once __DIR__ . '/Services/autoloader.php';
```

1. Import class
```php
use web2hw\Request;
```

1.  Crete class new object
```php
$request = new Request();
```

## Class Methods

### getHeaders()

Get request HTTP Headers

1. Get all headers
```php
$allHeaders = $request->getHeaders();
```

1. Get single header (Ex.: Host)
```php
$singleHeader = $request->getHeaders('Host');
```

1. Get more then one header
```php
$manyHeaders = $request->getHeaders(['Accept',  'Accept-Encoding']);
```

#### Allowed headers
[MDN -  HTTP headers](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers "MDN -  HTTP headers")

**2019 &copy; Temuri Takalandze**
