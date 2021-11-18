<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function add($item) {
        if(count($this->stack) < $this->limit)
        array_unshift($this->stack,$item);
        else
            echo "Đầy rồi không thêm được nữa!!!";

    }

    public function pop() {
        if(!$this->isEmpty()) {
        array_shift($this->stack);
        }else {
            echo "Không có cái nào trong stack";
        }
    }

    public function top() {
        if(!$this->isEmpty()) {
        return end($this->stack);
        }else {
            echo "Không có cái nào trong stack";
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}