<?php

namespace Iivannov\InterFax;

class InterFaxException extends \Exception {

    private static $messages = [
        -111 => "Attempting to fax to a number that is not the designated fax number in a developer account.",
        -112 => "No valid recipients added or missing fax number.",
        -114 => "Postpone date too late (can be no later than 30 days from now)",
        -123 => "No valid documents attached",
        -150 => "Internal System Error",
        -310 => "User is not authorized to operate actions on RequestedUserID",
        -311 => "Transaction does not belong to requested user",
        -312 => "Email(s) already resent",
        -710 => "At least one of the two parameter QueryControl.ReturnItems, QueryControl.ReturnStats should be set to true",
        -1002 => "Number of types does not match number of document sizes string",
        -1003 => "Authentication error",
        -1004 => "Missing file type",
        -1005 => "Transaction does not exist",
        -1007 => "Size value is not numeric or not greater than 0",
        -1008 => "Total sizes does not match filesdata length",
        -1009 => "Image not available (may happen if the 'delete fax after completion' feature is active)",
        -1011 => "Too many data requests (maximum frequency of polling for fax status defined under 'System Limitations')",
        -1030 => "Invalid Verb or VerbData",
        -1062 => "Wrong session ID",
        -1063 => "Total file size is too big",
        -1066 => "Multiple faxes are chained to the same original transaction",
        -2050 => "Invalid EmailFormat value (should be PlainText/PlainTextLink)",
        -2051 => "Invalid EmailImageFormat value (should be TIF/PDF/Default)",
        -2052 => "Invalid WebFeedBackMethod value (should be None/WS/Post)",
        -2053 => "Invalid AttachmentFormat value (should be TIF/PDF)",
        -2054 => "Invalid DeleteAfterUsage value (should be DeleteAfterWS/DeleteAfterMail/DontDelete)",
        -2055 => "Invalid DefaultRetriesInterval",
        -2056 => "Invalid DefaultPageScaling",
        -2057 => "Invalid DefaultTextFontSize",
        -2058 => "Invalid WebFeedBackType",
        -2060 => "Invalid WebFeedBackMethod",
        -2071 => "User is not authorized to operate actions on specified contact list",
        -2072 => "There is not contact list with ListID value which belong to requested userid.",
        -2073 => "There is no contact associated with ContactID",
        -2074 => "User is not authorized to operate actions on specified contact",
        -2075 => "Fax input is not a valid fax number",
        -2076 => "Contact List reached it's maximum number of contacts.",
        -2077 => "Ownername value can not be empty",
        -2078 => "Ownerid value can not be empty",
        -2084 => "The specified user does not belong to the provided superuser's accounts",
        -3001 => "Invalid MessageID",
        -3002 => "'From' parameter is larger than image size",
        -3003 => "Image doesn't exist",
        -3004 => "TIFF file is empty",
        -3005 => "Requested chunk size is invalid (less than 1 or greater than the maximum value defined under 'System Limitations')",
        -3006 => "Max item is smaller than 1",
        -3007 => "No permission for this action (In inbound method GetList, LType is set to AccountAllMessages or AccountNewMessages, when the username is not a Primary user)",
    ];


    public function __construct($code)
    {
        $message = isset(self::$messages[$code]) ? self::$messages[$code] : 'Unknown error';
        parent::__construct($message, $code);
    }


}

