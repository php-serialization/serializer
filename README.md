## Serialization abstraction.

[![static analysis](https://github.com/php-serialization/serializer/workflows/static%20analysis/badge.svg)](https://github.com/php-serialization/serializer/actions?query=workflow%3A%22static+analysis%22)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/php-serialization/serializer.svg?style=flat-square)](https://packagist.org/packages/php-serialization/serializer)

Each implementation must implement the `PhpSerializer\Serializer\SerializeObject` and `PhpSerializer\Serializer\UnserializeObject` interfaces or `PhpSerializer\Serializer\Serializer` that already implement them.

Usage is quite simple.

`SerializeObject` example:
```php
<?php

use PhpSerializer\Serializer\SerializeObject;

public function method(SerializeObject $serializeObject): void
{
    $a = $serializeObject->serialize(new A(name: 'Test')); // O:1:"A":1:{s:4:"name";s:4:"Test";}
}
```

`UnserializeObject` example:
```php
<?php

use PhpSerializer\Serializer\UnserializeObject;

public function method(UnserializeObject $unserializeObject): void
{
    $a = $unserializeObject->unserialize(A::class, ['name' => 'Test']);

    assert($a instanceof A);
}
```