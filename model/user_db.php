<?php

//add_user function
function add_user($user_sex, $wanted_sex, $first_name, $last_name, $age, $city, $state, 
        $college, $major, $year, $email, $username, $password, $bio, $wanted_type) {
    global $db;
    $query = 'INSERT INTO users
                 (user_sex, wanted_sex, first_name, last_name, age, city, state, college, 
                 major, year, email, username, pass, bio, wanted_type)
              VALUES
                 (:user_sex, :wanted_sex, :first_name, :last_name, :age, :city, :state, 
                 :college, :major, :year, :email, :username, :password, :bio, :wanted_type)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_sex', $user_sex);
    $statement->bindValue(':wanted_sex', $wanted_sex);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':college', $college);
    $statement->bindValue(':major', $major);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':bio', $bio);
    $statement->bindValue(':wanted_type', $wanted_type);
    $statement->execute();
    $statement->closeCursor();
}

//delete_user function
function deleteUser($user_id) {
    global $db;
    $query = 'DELETE FROM users
              WHERE user_id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

//quick_match function

//function to view a user
function getUser($user_id) {
    global $db;
    $query = 'SELECT * FROM users
              WHERE user_id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

function usernameExists($username) {
    global $db;
    $query = 'SELECT username
               FROM users
               WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);  
    $statement->execute();
    $db_user = $statement->fetchAll();
    $statement->closeCursor();
    return $db_user;
}

function passwordExists($pass) {
    global $db;
    $query = 'SELECT pass
               FROM users
               WHERE pass = :pass';
    $statement = $db->prepare($query); 
    $statement->bindValue(':pass', $pass);
    $statement->execute();
    $db_pass = $statement->fetchAll();
    $statement->closeCursor();
    return $db_pass;
}

function isAdmin($username) {
        global $db;
    $query = 'SELECT username
               FROM admin
               WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);  
    $statement->execute();
    $db_user = $statement->fetchAll();
    $statement->closeCursor();
    return $db_user;
}

//function to diplay all users in the db for admin
function displayAllUsers() {
    global $db;
    $query = 'SELECT * FROM users
              ORDER BY last_name';
    $statement = $db->prepare($query);
    $statement->execute();
    $allUsers = $statement->fetchAll();
    $statement->closeCursor();
    return $allUsers;
}

//function to return users with a type of null for admin
function nullUserType($nullType) {
    global $db;
    $query = 'SELECT * FROM users '
            . 'WHERE user_type = :nullType '
            . 'ORDER BY last_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':nullType', $nullType);  
    $statement->execute();
    $nullUsers = $statement->fetchAll();
    $statement->closeCursor();
    return $nullUsers;
}

?>

