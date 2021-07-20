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


    function empprofile($name,$mobile,$bdate,$gender,$qua,$exp,$address,$city,$jdate,$id) {
        $dbh = connection();
        $sql = "INSERT INTO profiles(FullName,MobileNo,DateOfBirth,JoinDate,Gender,City,Address,Userid) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($name,$mobile,$bdate,$jdate,$gender,$city,$address,$id);
        $stmt->execute($parameters);
        $sql = "INSERT INTO employees(Qualification,Experience,UserID) VALUES(?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($qua,$exp,$id);
        $stmt->execute($parameters);
        $result = $stmt->rowCount();
        $dbh = NULL;
        return $result;    
    }

    function updateprofile($fullname,$email,$mobile,$dob,$gender,$qualification,$experience,$address,$city,$id)  {
        $dbh = connection();
        $sql = "UPDATE users u,profiles p,employees e SET p.FullName=?, u.Email=?, p.MobileNo=?, p.DateOfBirth=?, p.Gender=?, e.Qualification=?, e.Experience=? ,p.City=?, p.Address=? WHERE u.UserID=? AND p.UserID=? AND e.UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($fullname,$email,$mobile,$dob,$gender,$qualification,$experience,$city,$address,$id,$id,$id);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() > 0) 
        {
            return $result;
        }
    }

    function getprofile($id)  {
        $dbh = connection();
        $sql = "SELECT p.FullName,p.MobileNo,p.DateOfBirth,p.JoinDate,p.Gender,p.City,p.Address,e.Qualification	,e.Experience,u.Email FROM profiles p,employees e,users u WHERE u.UserID=? AND e.UserID=? AND p.UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id,$id,$id);
        $stmt->execute($parameters);
        if($stmt->rowCount() > 0)
        {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return json_encode($result);
        }    
    }

    function getcustomer() {
        $dbh = connection();
        $sql = "SELECT c.CustomerID, p.JoinDate,c.File_Number,p.FullName,p.MobileNo,c.PAN_Number FROM profiles p,customers c,users u WHERE u.UserID=c.UserID AND u.UserID=p.UserID AND p.UserID=c.UserID AND c.IsDeleted=0";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count > 0) {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }

    function getCategory() {
        $dbh = connection();
        $sql = "SELECT * FROM workcategories";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
        return json_encode($result);
    }

    function get_work_id($eid1)  {
        $dbh = connection();
        $sql = "SELECT WorkID FROM work WHERE EmployeeID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($eid1);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result; 
        }
        else {
            $dbh = NULL;
            return false;
        }
    }

    function get_employee_id($eid) {
        $dbh = connection();
        $sql = "SELECT EmployeeID FROM employees WHERE UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($eid); 
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
        else {
            $dbh = NULL;
            return false; 
        }      
    }

    function addwork($cid,$eid1,$catid,$tamount,$pamount,$dueamount,$today,$date,$comment) {
        $dbh = connection();
        $sql = "INSERT INTO work(WorkComment,WorkTakenOn,WorkApproxCompletionDate,EmployeeID,WorkCategoryID,CustomerID) VALUES(?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($comment,$today,$date,$eid1,$catid,$cid);
        $stmt->execute($parameters);
        $workid = $dbh->lastInsertId();
        $sql = "INSERT INTO payment(TotalCharges,PaidAmount,DueAmount,LastDate,WorkID,EmployeeID) VALUES(?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($tamount,$pamount,$dueamount,$date,$workid,$eid1);
        $stmt->execute($parameters);
        $result = $stmt->rowCount();
        $dbh = NULL;
        return $result;    
    }

    function changestatus($status,$id) {
        $dbh = connection();
        $sql = "UPDATE work SET WorkStatus=? WHERE WorkID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($status,$id);
        $stmt->execute($parameters);
        $stmt->execute();
        if($result = $stmt->rowCount() > 0) {
            return $result;
        }
    }

    function compelete($id,$status) {
        $dbh = connection();
        $sql = "UPDATE work SET WorkStatus=? WHERE WorkID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($status,$id);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() > 0) {
            return $result;
        }
    }

    function fetch_emp($id1)
    {
        $dbh = connection();
        $sql = "SELECT EmployeeID FROM employees WHERE UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id1);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
    }

    function fetchwork($id1,$id )  {
        $eid1 = fetch_emp($id1);
        $dbh = connection();
        $sql = "SELECT
        CustomerID, 
        (SELECT FullName FROM profiles WHERE UserID = employees.UserID AND employees.EmployeeID = ?) as FullName,
        WorkTakenOn,
        CategoryName,
        TotalCharges,
        PaidAmount,
        DueAmount,
        WorkStatus,
        WorkID
        FROM 
            work
        INNER JOIN employees USING (EmployeeID)
        INNER JOIN customers USING (CustomerID)
        INNER JOIN workcategories USING (WorkCategoryID) 
        INNER JOIN payment USING (WorkID)
        WHERE work.CustomerID = ?";         
        $stmt = $dbh->prepare($sql);
        $parameters = array($eid1,$id);
        $stmt->execute($parameters);
        $count = $stmt->rowCount();
        if($count > 0) {
            $result =  $stmt->fetchALL(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }   

    function fetpending($id) {
        $dbh = connection();
        $sql = "SELECT
        CustomerID, 
        (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.CustomerID = ?) as FullName,
        WorkTakenOn,
        CategoryName,
        TotalCharges,
        PaidAmount,
        DueAmount,
        WorkStatus,
        WorkID
        FROM 
            work
        INNER JOIN customers USING (CustomerID)
        INNER JOIN workcategories USING (WorkCategoryID) 
        INNER JOIN payment USING (WorkID)
        WHERE work.CustomerID = ? AND work.WorkStatus = 1 OR work.WorkStatus = 0";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id,$id);
        $stmt->execute($parameters);
        $count = $stmt->rowCount();
        if($count > 0) {
            $result =  $stmt->fetchALL(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }

    function fetch_emp2($id2) {
        $dbh = connection();
        $sql = "SELECT EmployeeID FROM employees WHERE UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id2);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
    }

    function fetchcompelete($id2,$id) {
        $eid2 = fetch_emp2($id2);
        $dbh = connection();
        $sql = "SELECT
        CustomerID, 
        (SELECT FullName FROM profiles WHERE UserID = employees.UserID AND employees.EmployeeID = ?) as FullName,
        WorkTakenOn,
        CategoryName,
        TotalCharges,
        PaidAmount,
        DueAmount,
        WorkStatus,
        WorkID
        FROM 
            work
        INNER JOIN employees  USING (EmployeeID)
        INNER JOIN customers USING (CustomerID)
        INNER JOIN workcategories USING (WorkCategoryID) 
        INNER JOIN payment USING (WorkID)
        WHERE work.CustomerID = ? AND work.WorkStatus = 2";
        $stmt = $dbh->prepare($sql);
        $parameters = array($eid2,$id);
        $stmt->execute($parameters);
        $count = $stmt->rowCount();
        if($count > 0) {
            $result =  $stmt->fetchALL(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    
    function delete_customer($id) {
        $dbh = connection();
        $sql = "UPDATE customers SET IsDeleted=1 WHERE CustomerID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id);
        $stmt->execute($parameters);
        $ret = $stmt->rowCount();
        return $ret;
    }
    
    function get_user_id($username) {
        $dbh = connection();
        $sql = "SELECT UserID FROM users where Email = ?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($username);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0)  {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
        else {
            $dbh = NULL;
            return false;
        }
    }

    function get_userid($email) {
        $dbh = connection();
        $sql = "SELECT UserID FROM users WHERE Email=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($email);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0)  {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
        else {
            $dbh = NULL;
            return false;
        }
    }

    function insertprofile($fullname,$email,$password,$mobile,$dob,$jod,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$file,$usertype) {
        $dbh = connection();
        $sql = "INSERT INTO users(Email,Password,UserType) VALUES(?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($email,$password,$usertype);
        $stmt->execute($parameters);
        $userid = get_userid($email);
        $sql = "INSERT INTO profiles(FullName,MobileNo,DateOfBirth,JoinDate,Gender,City,Address,Userid) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($fullname,$mobile,$dob,$jod,$gender,$city,$address,$userid);
        $stmt->execute($parameters);
        $sql="INSERT INTO customers(File_Number,PAN_Number,GST_Number,Aadhar_Number,UserID) VALUES(?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($file,$pannumber,$adharnumber,$gstnumber,$userid);
        $stmt->execute($parameters);
        $result = $stmt->rowCount();
        $dbh = NULL;
        return $result;
    }

    function get_u_id($id) {
        $dbh  = connection();
        $sql  = "SELECT UserID FROM customers WHERE CustomerID=?";
  
        $stmt = $dbh->prepare($sql);
        $parameters = array($id);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0)  {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
        else {
            $dbh = NULL;
            return false;
        }
    }

    function cus_getprofile($id) {
        $uid = get_u_id($id);
        $dbh = connection();
        $sql = "SELECT p.FullName,p.MobileNo,p.DateOfBirth,p.JoinDate,p.Gender,p.City,p.Address,c.File_Number,c.PAN_Number,c.GST_Number,c.Aadhar_Number,u.Email FROM profiles p,customers c,users u 
                WHERE u.UserID=? AND c.UserID=? AND p.UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($uid,$uid,$uid);
        $stmt->execute($parameters);
        if($stmt->rowCount() > 0)   {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return json_encode($result);
        }    
    }

    function up_fate_id($id) {
        $dbh = connection();
        $sql  = "SELECT UserID FROM customers WHERE CustomerID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0)  {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result;
        }
        else {
            $dbh = NULL;
            return false;
        }
    }


    function cus_updateprofile($cid,$fullname,$email,$mobile,$dob,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address) {
        $uid = up_fate_id($cid);
        $dbh = connection();
        $sql = "UPDATE users u,profiles p,customers c SET p.FullName=?, u.Email=?, p.MobileNo=?, p.DateOfBirth=?, p.Gender=?, c.PAN_Number=?, c.Aadhar_Number=?, c.GST_Number=? ,p.City=?, p.Address=? WHERE u.UserID=? AND c.UserID=? AND p.UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($fullname,$email,$mobile,$dob,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$uid,$uid,$uid);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() > 0)  {
            return $result;
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
    
    function get_cat() {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cb FROM workcategories";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return json_encode($res);
        }
    }

    function d_compelete() {
        $dbh = connection();
        $sql = "SELECT COUNT(*) cn FROM work WHERE WorkStatus=2";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }
    
    function d_pending() {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkStatus=1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }
    
    function d_t_work() {
        $dbh = connection();
        $sql = "SELECT COUNT(*) FROM work WHERE WorkStatus=1 OR WorkSTatus=2";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($result = $stmt->rowCount() != 0)  {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function d_n_cus($date) {
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

    function d_n_work($date) {
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

    function d_n_work_p($date) {
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
    
    function get_emp_id($wid) {
        $dbh = connection();
        $sql = "SELECT EmployeeID FROM work WHERE WorkID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($wid);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0) {
            $res = $stmt->fetch()[0];
            return $res;
        }
    }

    function upadte_work($wid,$total_dueamount,$date)  {
        $eid1 = get_emp_id($wid);
        $dbh = connection();
        $sql = "UPDATE payment p,work w SET w.WorkCompletedOn=?,p.ReceivedDate=?,p.ReceivedBy=?,p.DueAmount=? WHERE p.WorkID=? AND w.workID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($date,$date,$eid1,$total_dueamount,$wid,$wid);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() != 0)   {
            return $result;
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