<?php

namespace Iivannov\InterFax;

class InterFaxClient extends \SoapClient implements InterFaxContract {


    public function SendCharFax($params)
    {
        return $this->SendCharFax($params);
    }


    public function Sendfax($params)
    {
        return $this->Sendfax($params);
    }
}

