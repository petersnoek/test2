<?php 

// make sure our code knows about class Student
include 'person.php';
include 'student.php';


// create new objects from class 'Student'
$tristan = new Student('Tristan', 'de', 'Jager', '99389420');
$jelle = new Student('Jelle', 'van den', 'Berg', '94382394');
$lucas = new Person('Lukas', 'kleihn', 'Hanenburgt');

echo '<h1>Welkom!</h1>';

echo 'çonflict!';

// print the contents
echo $tristan->ToString();
echo '<br/>';
echo $jelle->ToString();
echo '<br/>';
echo $lucas->ToString();

