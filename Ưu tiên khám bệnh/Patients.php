<?php

class Patients
{
    public $people;
    public $paitents;
    public $arr = [];

    public function __construct()
    {
        $this->people = [];
        $this->paitents = [];
    }


    public function enqueue($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->people, $patient);
    }

    public function dequeue()
    {
        $arr = [];
        foreach ($this->people as $value) {
            array_push($arr, $value->code);
        }
        $min = min($arr);
        foreach ($this->people as $key => $value) {
            if ($value->code == $min) {
                $this->paitents = array_splice($this->people, $key, 1);
                $this->action();
                break;
            };
        }

    }

    public function exitPatient() {
        echo "Bệnh nhân đã khám là : ";
        foreach ($this->arr as $key => $value) {
            echo "<br>".($key+1)."<br>".$value->name.'-'.$value->code;
        }

    }

    public function display()
    {
        echo "<pre>";
        print_r($this->people);
    }

    /**
     * @return array
     */
    public function action()
    {
        foreach ($this->paitents as $key => $value) {
            $exitPatient = new Patient($value->name, $value->code);
            array_push($this->arr, $exitPatient);
        }
    }


}