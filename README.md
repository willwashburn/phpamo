

# phpamo [![Build Status](https://travis-ci.org/willwashburn/phpamo.svg)](https://travis-ci.org/willwashburn/phpamo)
A PHP library for Camo - the SSL image proxy :lock:

For more infomration about Camo, please see the [atmos/camo] (https://github.com/atmos/camo) repository.

## Installation
```composer require willwashburn/phpamo```

Alternatively, add ```"willwashburn/phpamo": "0.0.1"``` to your composer.json

## Usage
```PHP
  $camo = new WillWashburn\Phpamo\Client();
  $camo->setDomain('YOUR_CAMO_DOMAIN');
  $camo->setCamoKey('YOUR_CAMO_KEY');
  
  $camo->proxy($url); // returns the proxy url 
```  
  
## Credit

Thanks to [Corey Donohoe](https://github.com/atmos) for creating Camo.

Thanks to [Andrew Kane](https://github.com/ankane/camo/) for creating the ruby client on which this was based.

## Contributing

Everyone is encouraged to help improve this project. Here are a few ways you can help:

- [Report bugs](https://github.com/willwashburn/camoclient/issues)
- Fix bugs and [submit pull requests](https://github.com/willwashburn/camoclient/pulls)
- Write, clarify, or fix documentation
- Suggest or add new features


