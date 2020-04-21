# phpamo [![Build Status](https://travis-ci.org/willwashburn/phpamo.svg)](https://travis-ci.org/willwashburn/phpamo) [![Codecov](https://img.shields.io/codecov/c/github/willwashburn/phpamo.svg?maxAge=2592000&style=flat-square)](https://codecov.io/gh/willwashburn/phpamo) [![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.4-8892BF.svg?style=flat-square)](https://php.net/) [![Packagist](https://img.shields.io/packagist/dt/willwashburn/phpamo.svg?style=flat-square)](https://packagist.org/packages/willwashburn/phpamo/stats) [![Packagist](https://img.shields.io/packagist/v/willwashburn/phpamo.svg?style=flat-square)](https://packagist.org/packages/willwashburn/phpamo) [![MIT License](https://img.shields.io/packagist/l/willwashburn/phpamo.svg?style=flat-square)](https://github.com/willwashburn/phpamo/blob/master/license.txt) 
A PHP library to create urls for Camo - the SSL image proxy :lock:

> **Note:** It's pronounced Fa-fah-mo. I'll be honest, I've picked better names. Its like the "[Name Game](https://en.wikipedia.org/wiki/The_Name_Game)" for camo. Kind of. Ok whatever it doesn't make sense but the library still works!

For more infomration about Camo, please see the [atmos/camo](https://github.com/atmos/camo) repository.

## Installation
```composer require willwashburn/phpamo```

Alternatively, add ```"willwashburn/phpamo": "1.0.1"``` to your composer.json

## Usage
If you're just looking to get going with the defaults:
```PHP
    $phpamo = new \WillWashburn\Phpamo\Phpamo(
       'YOUR_CAMO_KEY',
       'YOUR_CAMO_DOMAIN'
    );
    
    // returns a url guaranteed to be https
    $phpamo->camo($url); 
```  

Perhaps you only want to camouflage urls that are http?
```PHP
    // returns a https url only when http url is used
    // otherwise returns the url
    $phpamo->camoHttpOnly($url); 
```

If you'd like to use query string urls instead of the default hex urls, just 
pass in the query string formatter when creating your object

```PHP
    $phpamo = new \WillWashburn\Phpamo\Phpamo(
       'YOUR_CAMO_KEY',
       'YOUR_CAMO_DOMAIN',
       new QueryStringFormatter(new QueryStringEncoder)
    );
    
    // returns a https url in the query string format 
    $phpamo->camo($url); 
```

## Change Log

- v1.0.1 - Fix httpOnly method
- v1.0.0 - Add support for query string formatted camo urls
- v0.0.2 - Fix namespacing issues
- v0.0.1 - Initial version
  
## Credit

Thanks to [Corey Donohoe](https://github.com/atmos) for creating Camo.

Thanks to [Andrew Kane](https://github.com/ankane/camo/) for creating the ruby client on which this was based.

## Contributing

Everyone is encouraged to help improve this project. Here are a few ways you can help:

- [Report bugs](https://github.com/willwashburn/phpamo/issues)
- Fix bugs and [submit pull requests](https://github.com/willwashburn/phpamo/pulls)
- Write, clarify, or fix documentation
- Suggest or add new features
