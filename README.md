# laravel-macros-response-customised


laravel package to control the response and customise the dataname as per the requirement. 

## Installation

This package can be installed using composer. Find the comand below

``` bash
composer require freniz/laravel-macros-response-customised
```

## Usage

### Message
``` php
return response()->message('Welcome to laravel macro's", 200);
```

Result

``` json
{
    "message": "Welcome to laravel macro's"
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
