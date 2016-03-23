# InterFax Client

Very simple client for InterFax SOAP API. For the moment it supports only sending simple text faxes and sending faxes with file attachment.
It's easily extendable to add other InterFax methods.

## Install

Via Composer

``` bash
$ composer require iivannov/interfax
```

## Usage

$interfax = new InterFax($username, $password);

//send a text $message to the given $number
$interfax->sendText($number, $message);

//send a fax with file attachment to the given $number
$interfax->sendFile($number, $filePath, $fileType);


