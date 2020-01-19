<?php

namespace Massfice\Action;

use Massfice\ResponseStatus\ResponseStatus;

interface JsonAction {
    public function notAllowedFor() : array;
    public function load() : ?array;
    public function validate(?array $data) : ResponseStatus;
    public function execute(?array $data) : array;
}

?>