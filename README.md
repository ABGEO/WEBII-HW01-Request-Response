# WEBII-HW01-Request

### Using

1. Include Autoloader

    `require_once __DIR__ . '/Services/autoloader.php';`

1. Import class

    `use web2hw\Request;`

1.  Crete class new object

    `$request = new Request();`

1. Get all headers

	`$allHeaders = $request->getHeaders();`

1. Get single header (Ex.: Host)

	`$singleHeader = $request->getHeaders('Host');`

1. Get more then one header

	`$manyHeaders = $request->getHeaders(['Accept',  'accept-encoding']);`

### Allowed headers

[MDN -  HTTP headers](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers "MDN -  HTTP headers")