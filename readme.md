# InterFax Client

Very simple client for InterFax SOAP API. For the moment it supports only sending simple text faxes and sending faxes with file attachment.
It's easily extensible to add other InterFax methods.

## Install

Via Composer

``` bash
$ composer require iivannov/interfax
```

## Usage

``` bash
$interfax = new InterFax($username, $password);

//send a text $message to the given $number
$interfax->sendText($number, $message);

//send a fax with file attachment to the given $number
$interfax->sendFile($number, $filePath, $fileType);
```



## Usage with Laravel

If you are using Laravel, the package contains a Service Provider and a Facade for you.

1. First you need to add the ServiceProvider and Facade classes in your `config\app.php`

``` php
'providers' => [
    ...
    Iivannov\Interfax\Support\InterFaxServiceProvider::class,
];

'aliases' => [
    ...
    'Interfax' => Iivannov\Interfax\Support\Facade\Interfax::class
];
```

2. Then you need to add your username and password in `config\services.php`

``` php
'interfax' => [
    'username' => YOUR_INTERFAX_USERNAME,
    'password' => YOUR_INTERFAX_PASSWORD
]
```

3. You are ready to go, just use it like this


``` php
//send a text $message to the given $number
Interfax::sendText($number, $message);

//send a fax with file attachment to the given $number
Iterfax::sendFile($number, $filePath, $fileType);

```