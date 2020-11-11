<?php

declare(strict_types=1);

namespace classes;

class Form
{
    private $startform;
    private $endform;
    private $inputs;
    private $method;
    private $action;

    public function __construct(string $method, string $action, $hidden = null)
    {
        $this->method = $method;
        $this->action  = $action;
        $this->startform($hidden);
        $this->endform();
        $this->inputs = [];
    }

    private function startform($hidden)
    {
        $this->startform = [];
        $inicio = "<form action='$this->action' method='$this->method' novalidate> <div class='col1'>";
        array_push($this->startform, $inicio);

        if (!empty($hidden)) {
            $this->startform[0] .= "<input type='hidden' name='function' value='$hidden'>";
        }
    }

    public function add($input)
    {
        $name = get_class($input);


        if (strpos($name, "InputText")) {
            $input = "<input type='text' name='$input->name' placeholder='$input->placeholder'>";
            array_push($this->inputs, $input);
        }
    }

    private function endform()
    {
        $this->endform = [];
        $fim = "</div> <button> Registrar </button></form>";
        array_push($this->endform, $fim);
    }

    public function render()
    {
        echo $this->startform[0];
        foreach ($this->inputs as $key => $value) {
            echo $value;
        }
        echo $this->endform[0];
    }
}