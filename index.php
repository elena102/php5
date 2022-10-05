<?php

require_once 'Task.php';

$task = new Task();

$task 
 -> setDescription ('')
 -> dateCreated ()
 -> dateUpdated ()
 -> dateDone ()
 -> priority ();
 



var_dump($task); 