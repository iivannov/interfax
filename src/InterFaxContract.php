<?php

namespace Iivannov\InterFax;


interface InterFaxContract
{
    public function SendCharFax($params);

    public function Sendfax($args);
}