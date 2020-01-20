<?php

namespace Massfice\Action;

class VerifyStatus {
    private $data;
    private $status;
    private $substitut;

    public function __construct(bool $status = true) {
        $this->data = [];
        $this->substitut = null;
        $this->status = $status;
    }

    public function setSubstitut(JsonAction $action) {
        $this->substitut = $action;
        $this->status = false;
    }

    public function setData(array $data) {
        $this->data = $data;
    }

    public function getStatus() : bool {
        return $this->status;
    }

    public function getData() : array {
        return $this->data;
    }

    public function getSubstitut() : ?JsonAction {
        return $this->substitut;
    }

}

?>