<?php

namespace MikePal;

class Curl {
    function __construct($params) {
        $this = ArrArgs::HandleArgs($params);
    }
}