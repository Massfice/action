<?php

use Massfice\ResponseStatus\ResponseStatus as rs;
use Massfice\ResponseStatus\ResponseStatusFactory as rsf;

class ResponseStatus extends rs {

    private $code;
    
    public function __construct(int $code) {
        $this->code = $code;
        parent::__construct();
    }

    public function getCode() : int {
        return $this->code;
    }
}

class ResponseStatusFactory extends rsf {
    public function create(int $code) : rs {
        $rs = parent::create($code);
        $rs = new ResponseStatus($rs->getCode());
        return $rs;
    }
}

?>