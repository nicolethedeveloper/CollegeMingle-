<?php
require('../model/database.php');
require('../model/user_db.php');

<<<<<<< HEAD
=======
//persistent sessions
$name = 'user1';
$value = ajones;
$expire = strtotime('+3 years');
$path = '/';
setcookie($name, $value, $expire, $path);

$name = 'user2';
$value = mcooper;
$expire = strtotime('+3 years');
$path = '/';
setcookie($name, $value, $expire, $path);

$name = 'user3';
$value = jsanchez;
$expire = strtotime('+3 years');
$path = '/';
setcookie($name, $value, $expire, $path);

$name = 'user4';
$value = jthompson;
$expire = strtotime('+3 years');
$path = '/';
setcookie($name, $value, $expire, $path);

$name = 'user5';
$value = zmalik;
$expire = strtotime('+3 years');
$path = '/';
setcookie($name, $value, $expire, $path);

$name = 'user6';
$value = kurban;
$expire = strtotime('+3 years');
$path = '/';
setcookie($name, $value, $expire, $path);

$lifetime = 60 * 60 * 24 * 365; // 1 year in seconds
session_set_cookie_params($lifetime, '/');
session_start();

$_SESSION['username'] = '';
$_SESSION['password'] = '';


//create a user profile array
if (empty($_SESSION['user_profiles'])) { $_SESSION['user_profiles'] = array(); }

>>>>>>> origin/master
//default users to the login page
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'login.php'; //try to change to home page? ../index.php
    }
}
//if the user is registering...
if ($action == 'add_user') {
    //user is attempting to register on registration.php
    $user_sex = filter_input(INPUT_POST, 'userSex');
    $wanted_sex = filter_input(INPUT_POST, 'mateSex');
    $first_name = filter_input(INPUT_POST, 'firstName');
    $last_name = filter_input(INPUT_POST, 'lastName');
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $college = filter_input(INPUT_POST, 'college');
    $major = filter_input(INPUT_POST, 'major');
    $year = filter_input(INPUT_POST, 'year');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $bio = filter_input(INPUT_POST, 'bio');
    $wanted_type = filter_input(INPUT_POST, 'types');
    
    //validate input from registration page
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
//if the user is trying to login
} else if ($action == 'login') {
    $uname_login = filter_input(INPUT_POST, 'uname_login');
    $pword_login = filter_input(INPUT_POST, 'pword_login');
    $usernameExists = usernameExists($uname_login);
    $passwordExists = passwordExists($pword_login);
    $isAdmin = isAdmin($uname_login);
  
    //validate input & log user in
    if ($uname_login === NULL || $pword_login === NULL || $uname_login === FALSE || $pword_login === FALSE) {
        $error = "Invalid login data. Check all fields and try again.";
        include('../errors/error.php');
    } else if(!empty($isAdmin)) {
        //if the user is an admin, redirect them to the admin page
        header("Location: ?action=admin_page"); //admin page  
    } else if (empty($usernameExists && empty($isAdmin))) {
        //if the user is not in the database, redirect to registration
        header("Location: registration.php");
    } else if ((empty($usernameExists) && !empty($passwordExists)) || (!empty($usernameExists) && empty($passwordExists))) {
        echo"You are registered but your login credentials do not match, please try again";
    } else if (!empty($usernameExists)) {
        //look in database for these credentials and see if they exists, if not, relocate to registration
        echo 'You have logged in successfully!';
        header("Location: browse_matches.php");
    } else {
        $error = "Unknown Login Error. Try again";
        include('../errors/error.php');
    }
        
        
//if the user is trying to view a profile    
} else if ($action == 'view_match') {
    $user_id = filter_input(INPUT_POST, 'user_id');
    $users = getUser($user_id);
    include 'view_match.php';
} else if ($action == 'browse_matches') {
    include 'browse_matches.php';
} else if ($action == 'Email Match') {
    
} else if ($action == 'admin_page') {         //for the admin stuff, create it's own header page for admins only
    $allUsers = displayAllUsers();  //displays all users so admin can delete
    $nullType = 'none';
    $nullUsers = nullUserType($nullType);    //displays users with no type
    include 'admin.php';
    
} else if ($action == 'delete_user') {      //if the admin is deleting a user
    $userID = filter_input(INPUT_POST, 'user_id');
    //method to delete selected user
    deleteUser($userID);
    header("Location: ?action=admin_page");   
}
?>

