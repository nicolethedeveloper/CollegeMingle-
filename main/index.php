<?php
require('../model/database.php');
require('../model/user_db.php');

//default users to the login page
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'login.php'; //try to change to home page? ../index.php
    }
}
if ($action == 'add_user') {
    $userSex = filter_input(INPUT_POST, 'userSex');
    $mateSex = filter_input(INPUT_POST, 'mateSex');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $college = filter_input(INPUT_POST, 'college');
    $major = filter_input(INPUT_POST, 'major');
    $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $aboutUser = filter_input(INPUT_POST, 'aboutUser');
    $types = filter_input(INPUT_POST, 'types');
    
    //code to validate input
    
    //code to add user (just the function)
}
?>

