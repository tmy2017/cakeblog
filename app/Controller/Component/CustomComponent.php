<?php

App::uses('Component', 'Controller');

class CustomComponent extends Component
{
    // the other component your component uses
    public $components = ['Existing'];

    public function initialize(Controller $controller)
    {
        $this->Existing->foo();
    }

    public function bar()
    {
        // ...
    }
}
