<?php
    
    function connection(){
        $dsn = 'mysql:host=localhost;dbname=doffice';
        $username = 'root';
        $password = '';
        return new PDO($dsn, $username, $password);
    }

    function register_user($email,$password,$usertype) {
        $dbh = connection();
        $sql = "INSERT INTO users (Email, password,UserType) VALUES(?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($email, $password,$usertype);
        $stmt->execute($parameters);
        $result = $stmt->rowCount();
        $dbh = NULL;
        return $result;
    }
        
    function login_user($email,$password,$usertype) 
    {
        $dbh = connection();
        $sql = "SELECT * FROM users WHERE Email=? && Password=? && UserType=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($email,$password,$usertype);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $id = $stmt->fetch()[0];
            session_start();
            $_SESSION['UserID'] = $id;
            $dbh = NULL;
            return $usertype;
        }
        else
        {
            $dbh = NULL;
            return false;
        }
    }

    function get_user_id($username){
        $dbh = connection();
        $sql = "SELECT UserID FROM users where Email = ?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($username);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0){
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
        else {
            $dbh = NULL;
            return false;
        }
    
    }
?>