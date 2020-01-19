<?php

namespace Massfice\Action;

class HtmlActionFactory extends ActionFactory {
    public function create(string $name) : HtmlAction {
        $action = $this->namespace.ucfirst($name);

        if(class_exists($action) && isset(class_implements($action)['Massfice\Action\HtmlAction'])) {
            return new $action();
        } else {
            return new NotFound();
        }
    }
}

?>