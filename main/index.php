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
    $user_sex = filter_input(INPUT_POST, 'userSex');
    $wanted_sex = filter_input(INPUT_POST, 'mateSex');
    $first_name = filter_input(INPUT_POST, 'firstName');
    $last_name = filter_input(INPUT_POST, 'lastName');
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $college = filter_input(INPUT_POST, 'college');
    $major = filter_input(INPUT_POST, 'major');
    $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $bio = filter_input(INPUT_POST, 'bio');
    $wanted_type = filter_input(INPUT_POST, 'types');
    
    //code to validate input
    if ($first_name === FALSE || $last_name === FALSE || $age === FALSE || $city === FALSE
            || $state === FALSE || $college === false
            || $major === false || $year === FALSE || $email === NULL || $username === false
            || $password === NULL || $bio === false || $wanted_type === FALSE) {
      $error = "Invalid data entry. Check all fields and try again.";
      include('../errors/error.php');
    } else {  
        //code to add user (just the function)
        add_user($user_sex, $wanted_sex, $first_name, $last_name, $age, $city, $state, 
        $college, $major, $year, $email, $username, $password, $bio, $wanted_type);
        header("Location: browse_matches.php");
        echo 'adding user';
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

