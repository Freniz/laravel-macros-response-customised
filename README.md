# laravel-macros-response-customised


laravel package to control the response and customise the dataname as per the requirement. 

## Installation

This package can be installed using composer. Find the comand below

``` bash
composer require freniz/laravel-macros-response-customised
```

## Usage

### Custom

To use custom run this comand to config the custom variables

``` bash
cp 'vendor/freniz/laravel-macros-response-customised/config/laravelmacros.php' config/laravelmacros.php
```

path : config/laravelmacros.php

custom => array('status', 'message')

then 

``` php
return response()->message([1, 'Welcome to the laravel macros'], 200);
```

### Message
``` php
return response()->message('Welcome to laravel macros", 200);
```

Result

``` json
{
    "message": "Welcome to laravel macros"
}
```
With the Http `Status Code: 200`

### Error
``` php
return response()->error('Error message to be displayed', $statuscode = 400);
```

Result

``` json
{
    "message": "Error message to be displayed"
}
```
With the Http `Status Code: 400`

### Success
``` php
return response()->success(['dataname' => 'data'], $statuscode = 200);
```

Result

``` json
{
    "data": {"dataname": "data"}
}
```
With the Http `Status Code: 200`

### PDF

PDF responses.

``` php
return response()->pdf($pdfcontent, 'name.pdf', $download = false);
```



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
