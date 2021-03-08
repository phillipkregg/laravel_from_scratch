<?php

namespace App;

class Example {

    protected $collaborator;

    public function __construct(Collaborator $collaborator, $foo)
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;

    }

    public function handle() {
        die('it workds '.$this->collaborator->collaborate());
    }
}
