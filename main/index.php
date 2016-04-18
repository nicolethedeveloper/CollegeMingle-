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
    //user is attempting to register on registration.php
    $user_sex = filter_input(INPUT_GET, 'userSex');
    $wanted_sex = filter_input(INPUT_GET, 'mateSex');
    $first_name = filter_input(INPUT_GET, 'firstName');
    $last_name = filter_input(INPUT_GET, 'lastName');
    $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
    $city = filter_input(INPUT_GET, 'city');
    $state = filter_input(INPUT_GET, 'state');
    $college = filter_input(INPUT_GET, 'college');
    $major = filter_input(INPUT_GET, 'major');
    $year = filter_input(INPUT_GET, 'year');
    $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_GET, 'username');
    $password = filter_input(INPUT_GET, 'password');
    $bio = filter_input(INPUT_GET, 'bio');
    $wanted_type = filter_input(INPUT_GET, 'types');
    
    //code to validate input from registration page
    if ($user_sex === NULL || $user_sex === FALSE || $user_sex === "") {
        $error = "Invalid data entry. You must select your sex! Please go back and try again.";
        include('../errors/error.php');
    } else if ($wanted_sex === NULL || $wanted_sex === FALSE || $wanted_sex === "") {
        $error = "Invalid data entry. You must enter select the sex you are interested in! Please go back and try again.";
        include('../errors/error.php');
    } else if ($first_name === NULL || $first_name === FALSE || $first_name === "") {
        $error = "Invalid data entry. You must enter a first name! Please go back and try again.";
        include('../errors/error.php');
    } else if ($last_name === NULL || $last_name === FALSE || $last_name === "") { 
        $error = "Invalid data entry. You must enter a last name! Please go back and try again.";
        include('../errors/error.php');
    } else if ($age === NULL || $age === FALSE || $age === "") { 
        $error = "Invalid data entry. You must enter an age! Please go back and try again.";
        include('../errors/error.php');
    } else if ($city === NULL || $city === FALSE || $city === "") {
        $error = "Invalid data entry. You must enter a city! Please go back and try again.";
        include('../errors/error.php');
    } else if ($state === NULL || $state === FALSE || $state === "") {
        $error = "Invalid data entry. You must enter select a state! Please go back and try again.";
        include('../errors/error.php');
    } else if ($college === NULL || $college === FALSE || $college === "") {
        $error = "Invalid data entry. You must select your college! Please go back and try again.";
        include('../errors/error.php');
    } else if ($major === NULL || $major === FALSE || $major === "") {
        $error = "Invalid data entry. You must enter your major! Please go back and try again.";
        include('../errors/error.php');
    } else if ($year === NULL || $year === FALSE || $year === "") {
        $error = "Invalid data entry. You must enter your year in college! Please go back and try again.";
        include('../errors/error.php');
    } else if ($email === NULL || $email === FALSE || $email === "") {
        $error = "Invalid data entry. You must enter a valid email address! Please go back and try again.";
        include('../errors/error.php');
    } else if ($username === NULL || $username === FALSE || $username === "") {
        $error = "Invalid data entry. You must enter a username! Please go back and try again.";
        include('../errors/error.php');
    } else if ($password === NULL || $password === FALSE || $password === "") {
        $error = "Invalid data entry. You must enter a password! Please go back and try again.";
        include('../errors/error.php');
    } else if ($bio === NULL || $bio === FALSE || $bio === "") {
        $error = "Invalid data entry. You must enter what you think your best friend would say about you! Please go back and try again.";
        include('../errors/error.php');
    } else if ($wanted_type === NULL || $wanted_type === FALSE || $wanted_type === "") {
      $error = "Invalid data entry. You must select the type you are interested in.";
      include('../errors/error.php');
    } else {  
        //add user to db
        add_user($user_sex, $wanted_sex, $first_name, $last_name, $age, $city, $state, 
        $college, $major, $year, $email, $username, $password, $bio, $wanted_type);
        header("Location: browse_matches.php");   
    }
    
} else if ($action == 'login') {
    $uname_login = filter_input(INPUT_POST, 'uname_login');
    $pword_login = filter_input(INPUT_POST, 'pword_login');
    
    //validate input
    if ($uname_login === NULL || $pword_login === NULL || $uname_login === FALSE || $pword_login === FALSE) {
        $error = "Invalid login data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        //look in database for these credentials and see if they exists, if not, relocate to registration
        echo 'You have logged in successfully!';
    }
} else if ($action == 'view_match1') {
    $user = getUser1();
    include 'view_match.php';
} else if ($action == 'browse_matches') {
    include 'browse_matches.php';
} 
?>

