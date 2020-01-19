<?php

namespace Massfice\Action;

abstract class ActionFactory {

    protected $namespace;

    public function __construct(string $namespace) {
        $this->namespace = $namespace;
    }
}

?>