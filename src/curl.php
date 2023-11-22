<?php

namespace MikePal;

class Curl {
    function __construct($params) {
        $this->args = ArrArgs::HandleArgs($params);
    }
}