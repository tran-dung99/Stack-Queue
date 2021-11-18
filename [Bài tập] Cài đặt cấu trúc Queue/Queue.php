<?php

class Queue
{
    public $font;
    public $back;

    public function __construct()
    {
        $this->font = null;
        $this->back = null;
    }

    public function isEmpty()
    {
        return $this->font == null;
    }

    public function add($data) {
        $node = new Node($data);
        $node->next = $this->font;
        $this->font = $node;
        if($this->isEmpty()) {
            $this->back = $node;
        }
    }

    public function addFirstNode($data) {
        $newNode = new Node($data);

        $newNode->next = $this->font;
        $this->font = $newNode;

        if(is_null($this->back)){
            $this->back = $newNode;
        }
    }
    public function enqueue($data)
    {
        if(!is_null($this->font)) {
            $newNode = new Node($data);
            $this->back->link = $newNode;
            $this->back = $newNode   ;
            $newNode->next = null;}

            else {
          $this->addFirstNode($data);

        }

    }

    public function dequeue() {
        if(!$this->isEmpty()) {
          $this->font = $this->font->next;
        }else {
           echo "hết zồi";
        }
    }
}