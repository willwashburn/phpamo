# CamoClient
[![Build Status](https://travis-ci.org/willwashburn/CamoClient.svg)](https://travis-ci.org/willwashburn/CamoClient)
[![Code Climate](https://codeclimate.com/github/willwashburn/CamoClient/badges/gpa.svg)](https://codeclimate.com/github/willwashburn/CamoClient) [![Latest Stable Version](https://poser.pugx.org/willwashburn/camo/v/stable.svg)](https://packagist.org/packages/willwashburn/camo) [![Total Downloads](https://poser.pugx.org/willwashburn/camo/downloads.svg)](https://packagist.org/packages/willwashburn/camo) [![License](https://poser.pugx.org/willwashburn/camo/license.svg)](https://packagist.org/packages/willwashburn/camo)

A PHP client for Camo - the SSL image proxy.

For more infomration about Camo, please see the [atmos/camo] (https://github.com/atmos/camo) repository.

## Installation
```composer require willwashburn/camo```

Alternatively, add ```"willwashburn/camo": "0.0.1"``` to your composer.json

## Usage
```PHP
  $camo = new WillWashburn\Camo\Client();
  $camo->setDomain('YOUR_CAMO_DOMAIN');
  $camo->setCamoKey('YOUR_CAMO_KEY');
  
  $camo->proxy($url); // returns the proxy url 
```  
  


