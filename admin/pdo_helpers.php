<?php

    function connection(){
        $dsn = 'mysql:host=localhost;dbname=doffice';
        $username = 'root';
        $password = '';
        return new PDO($dsn, $username, $password);
    }


    function addCategories($addname) {
            $dbh = connection();
            $sql = "INSERT INTO workcategories(CategoryName) VALUES (?)";
            $stmt = $dbh->prepare($sql);
            $parameters = array($addname);
            $stmt->execute($parameters);
            $result = $stmt->rowCount();
            return $result;  
    }
    
    function getCategories(){
        $dbh = connection();
        $sql = "SELECT WorkCategoryID, CategoryName FROM workcategories";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
        return json_encode($result);
    }

    function addemployee($email,$password,$type) {
        $dbh = connection();
        $sql = "INSERT INTO users (Email, password,UserType) VALUES(?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($email,$password,$type);
        $stmt->execute($parameters);
        $result = $stmt->rowCount();
        return $result;  
    }


    function empprofile($name,$mobile,$bdate,$gender,$qua,$exp,$address,$city,$jdate) {
        $dbh = connection();
        $sql = "INSERT INTO profiles(FullName,MobileNo,DateOfBirth,JoinDate,Gender,City,Address,Userid) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($fullname,$mobile,$bdate,$jod,$gender,$city,$address,$id);
    }

    function adminlogin($username,$password,$usertype) {
        $dbh = connection();
        $sql = "SELECT * FROM users WHERE Email=? && Password=? && UserType=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($username,$password,$usertype);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $id = $stmt->fetch()[0];
            session_start();
            $_SESSION['userid'] =  $id;
            $dbh = NULL;
            return $usertype;
        }
        else {
            $dbh = NULL;
            return false;
        }
    }

    function getcustomer() {
        $dbh = connection();
        $sql = "SELECT c.CustomerID, p.JoinDate,c.File_Number,p.FullName,p.MobileNo,c.PAN_Number FROM profiles p,customers c,users u WHERE u.UserID=c.UserID AND u.UserID=p.UserID AND p.UserID=c.UserID AND c.IsDeleted=0";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count > 0)
        {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return json_encode($result);
            }
    }

    function getemployees()  
    {
        $dbh = connection();
        $sql = "SELECT e.EmployeeID,p.JoinDate,e.Qualification,p.FullName,p.MobileNo, (SELECT count(*) FROM work WHERE EmployeeID = e.EmployeeID) as WorkCount FROM profiles p,employees e,users u WHERE u.UserID=e.UserID AND u.UserID=p.UserID AND p.UserID=e.UserID";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count > 0) {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }

    function get_cu_count() {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cn FROM customers";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return json_encode($res);
        }
    }

    function get_es_count() {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cnp FROM employees";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return json_encode($res);
        }
    }
    
    function get_cat()
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cb FROM workcategories";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return json_encode($res);
        }
    }

    function d_compelete()
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cn FROM work WHERE WorkStatus=2";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }
    
    function d_pending()
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkStatus=1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }
    

    function d_t_work()
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkStatus=1 OR WorkSTatus=2";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function d_n_cus($date)
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cn FROM profiles WHERE JoinDate=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function d_n_work($date)
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkTakenOn=? AND WorkStatus=0";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function d_n_work_p($date) 
    {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkTakenOn=? AND WorkStatus=1";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function d_n_work_c($date) {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkTakenOn=? AND WorkStatus=2";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function payemnt() 
    {
        $dbh = connection();
        $sql = "SELECT sum(PaidAmount) FROM payment";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }
    
    function payment_d()
    {
        $dbh = connection();
        $sql = "SELECT sum(DueAmount) FROM payment";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function payment_t()
    {
        $dbh = connection();
        $sql = "SELECT sum(TotalCharges) FROM payment";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function current_payment($date) {
        $dbh = connection();
        $sql = "select sum(PaidAmount) FROM payment INNER JOIN work on work.WorkID = payment.WorkID WHERE work.WorkTakenOn=? ";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0) {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function due_amount($date) {
        $dbh = connection();
        $sql = "select sum(DueAmount) FROM payment INNER JOIN work on work.WorkID = payment.WorkID WHERE work.WorkTakenOn=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0) {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }
?>
