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
function deleteUser() {
        gloabl $db;
        $query = 'DELETE * FROM users
                  WHERE username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $success = $statement->execute();
        $statement->closeCursor();
}
//quick_match function
function quickMatch() {
        global $db;
        $query = 'SELECT * FROM users
                  WHERE wanted_sex = :wanted_sex';
        $statement = $db->prepare($query);
        $statement->bindValue(':wanted_sex', $wanted_sex);
        $success = $statement->execute();
        $statement->closeCursor();
        
        $query = 'SELECT * FROM users
                  WHERE wanted_type = :wanted_type';
        $statement = $db->prepare($query);
        $statement->bindValue(':wanted_type', $wanted_type);
        $success = $statement->execute();
        $statement->closeCursor();
        
}

//function to view a user
function viewUser1() {
    global $db;
    $query = 'SELECT * FROM users
              WHERE last_name = "Jones"
              ';
    $statement = $db->prepare($query);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}


?>

