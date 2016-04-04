<?php

namespace Iivannov\InterFax;

class InterFaxClient extends \SoapClient implements InterFaxContract {

    public function SendCharFax($params)
    {
        return parent::SendCharFax($params);
    }


    public function Sendfax($params)
    {
        return parent::Sendfax($params);
    }
}

