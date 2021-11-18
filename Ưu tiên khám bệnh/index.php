<?php
include_once "Patients.php";
include_once "Patient.php";

$patients = new Patients();
$patients->enqueue("Smith" ,5);
$patients->enqueue(" Jones" ,4);
$patients->enqueue("Fehrenbach" ,6);
$patients->enqueue("Brown" ,1);
$patients->enqueue("Ingram" ,1);
$patients->display();
echo "<br>";
$patients->dequeue();
$patients->exitPatient();
echo "<br>";
$patients->display();
$patients->dequeue();
$patients->exitPatient();
echo "<br>";
$patients->display();

?>
