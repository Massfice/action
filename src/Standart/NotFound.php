<?php

namespace Massfice\Action\Standart;

use Massfice\Action\HtmlAction;
use Massfice\Action\VerifyStatus;
use Massfice\ResponseStatus\ResponseStatus;
use Massfice\ResponseStatus\ResponseStatusFactory;

class NotFound implements HtmlAction {
    public function verify() : VerifyStatus {
        return new VerifyStatus();
    }

    public function load(array $data, array $config) : array {
        return [];
    }

    public function validate(array $data) : ResponseStatus {
        $status = ResponseStatusFactory::create(404);
        $status->addError("Not found.");
        return $status;
    }

    public function execute(array $data) : array {
        return [];
    }

    public function onDisplay(array $data) {

    }

    public function onError(array $errors) {

    }
}

?>