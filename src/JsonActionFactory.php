<?php

namespace Massfice\Action;

class JsonActionFactory extends ActionFactory {
    public function create(string $name) : JsonAction {
        $action = $this->namespace.ucfirst($name);

        if(class_exists($action) && isset(class_implements($action)['Massfice\Action\JsonAction'])) {
            return new $action();
        } else {
            return new NotFound();
        }
    }
}

?>