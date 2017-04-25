<?php

session_start();
// define a username and password for test you can change this to a query m database or anything else that fetch a username and password
$username = 'demouser';
$password = 'demopass';
if (isset($_POST)) { // if ajax request submitted
    $post_username = $_POST['username']
; // the ajax post username
    $post_password = $_POST['password']

; // the ajax post password
    if ($username == $post_username && $password == $post_password) { // if the username and password are right
    $_SESSION['username']


 = $post_username; // define a session variable
    echo $post_username; // return a value for the ajax query
    }
}
