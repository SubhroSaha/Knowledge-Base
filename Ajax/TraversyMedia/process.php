<?php

// echo 'Processing...';

// Check for GET variable
if(isset($_GET['name'])){
    echo 'GET: Your name is '.$_GET['name'];
}

// Check for POST variables
if(isset($_POST['name'])){
    echo 'POST: Your name is '.$_POST['name'];
}