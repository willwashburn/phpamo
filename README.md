[![Build Status](https://travis-ci.org/willwashburn/Phpamo.svg)](https://travis-ci.org/willwashburn/CamoClient)
[![Code Climate](https://codeclimate.com/github/willwashburn/CamoClient/badges/gpa.svg)](https://codeclimate.com/github/willwashburn/CamoClient) [![Latest Stable Version](https://poser.pugx.org/willwashburn/camo/v/stable.svg)](https://packagist.org/packages/willwashburn/camo) [![Total Downloads](https://poser.pugx.org/willwashburn/camo/downloads.svg)](https://packagist.org/packages/willwashburn/camo) [![License](https://poser.pugx.org/willwashburn/camo/license.svg)](https://packagist.org/packages/willwashburn/camo)
# Phpamo
A PHP library for Camo - the SSL image proxy 

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


