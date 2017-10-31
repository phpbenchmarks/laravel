### [1.0.2](../../compare/1.0.1...1.0.2) - 2017-10-31

- Remove _parent::boot()_ in RestApiProvider::boot() : useless in Laravel <= 5.2, not found in Laravel >= 5.3

### [1.0.1](../../compare/1.0.0...1.0.1) - 2017-10-29

- Hello World now have just it's routes, and Rest API route is defined first in 500 routes, because of Router low performances
- Remove all middlewares and routerMiddlewares in Kernel.php

### 1.0.0 - 2017-10-26

- Create Hello World an Rest API benchmarks
