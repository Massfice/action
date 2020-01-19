<?php

namespace Massfice\Action;

interface HtmlAction extends JsonAction {
    public function onDisplay(array $data);
    public function onError(array $errors);
}

?>