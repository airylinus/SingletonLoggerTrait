# SingletonLoggerTrait

- In class

```php

use airylinus\singletonLoggerTrait;

class Something {
    
    use SingletonLoggerTrait;

    public function foo() {
        try {
            //
        } catch (Exception $e) {
            self::getLogger()->error($msg);
        }
    }
}
```

- setLogger

```php

//index.php
use monolog\Logger;
$logger = new Logger();
Something::setLogger($logger);
//then you cant $logger will works
```
