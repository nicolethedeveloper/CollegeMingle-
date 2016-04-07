
<?php
    $dsn = 'mysql:host=localhost;dbname=college_mingle'; //dbname
    $username = 'college_mingle_user'; //uname
    $password = 'abc123'; //pword

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_errors.php');
        exit();
    }
    
    
?>
