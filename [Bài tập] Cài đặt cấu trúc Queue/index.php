<?php
include_once "Queue.php";
include_once "Node.php";

$queue = new Queue();
$queue->enqueue(3);
$queue->enqueue(5);
$queue->enqueue(6);
 $queue->dequeue();
echo"<pre>";
print_r($queue);
