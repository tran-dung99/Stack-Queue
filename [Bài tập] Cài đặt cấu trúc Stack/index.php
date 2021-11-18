<?php
include_once "Stack.php";

$stack = new Stack(5);
$stack->add(2);
$stack->add(4);
$stack->add(6);
$stack->add(8);
$stack->add(10);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->top();
$stack->top();
$stack->top();
$stack->top();
echo"<pre>";
print_r($stack);
