<?php
     

    function connection(){
        $dsn = 'mysql:host=localhost;dbname=doffice';
        $username = 'root';
        $password = '';
        return new PDO($dsn, $username, $password);
    }


    function insertprofile($fullname,$mobile,$dob,$jod,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$id,$file) {
        $dbh = connection();
        $sql = "INSERT INTO profiles(FullName,MobileNo,DateOfBirth,JoinDate,Gender,City,Address,Userid) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($fullname,$mobile,$dob,$jod,$gender,$city,$address,$id);
        $stmt->execute($parameters);

        $sql="INSERT INTO customers(File_Number,PAN_Number,GST_Number,Aadhar_Number,UserID) VALUES(?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $parameters = array($file,$pannumber,$gstnumber,$adharnumber,$id);
        $stmt->execute($parameters);
        $result = $stmt->rowCount();
        $dbh = NULL;
        return $result;
    }


    function getprofile($id) 
    {
        $dbh = connection();
        $sql = "SELECT p.FullName,p.MobileNo,p.DateOfBirth,p.JoinDate,p.Gender,p.City,p.Address,c.File_Number,c.PAN_Number,c.GST_Number,c.Aadhar_Number,u.Email FROM profiles p,customers c,users u WHERE u.UserID=? AND c.UserID=? AND p.UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id, $id, $id);
        $stmt->execute($parameters);
        if($stmt->rowCount() > 0)
        {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return json_encode($result);
        }    
    }


    function updateprofile($fullname,$email,$mobile,$dob,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$id) {
        $dbh=connection();
        $sql = "UPDATE users u,profiles p,customers c SET p.FullName=?, u.Email=?, p.MobileNo=?, p.DateOfBirth=?, p.Gender=?, c.PAN_Number=?, c.Aadhar_Number=?, c.GST_Number=? ,p.City=?, p.Address=? WHERE u.UserID=? AND c.UserID=? AND p.UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($fullname,$email,$mobile,$dob,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$id, $id, $id);
        $stmt->execute($parameters);
        if($result = $stmt->rowCount() > 0) 
        {
            return $result;
        }
    }

    function get_cus($cid)
    {
        $dbh = connection();
        $sql = "SELECT
                CustomerID, 
                (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.CustomerID = ?) as FullName,
                WorkTakenOn,
                CategoryName,
                TotalCharges,
                PaidAmount,
                DueAmount,
                WorkStatus
                FROM 
                    work
                INNER JOIN customers USING (CustomerID)
                INNER JOIN workcategories USING (WorkCategoryID) 
                INNER JOIN payment USING (WorkID)
                WHERE work.CustomerID = ?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($cid,$cid);
        $stmt->execute($parameters);
        if($stmt->rowCount() > 0)  
        {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return $result;
        }
    }
    
    function get_cus_pending($cid)  
    {
            $dbh = connection();
            $sql = "SELECT
            CustomerID, 
            (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.CustomerID = ?) as FullName,
            WorkTakenOn,
            CategoryName,
            TotalCharges,
            PaidAmount,
            DueAmount,
            WorkStatus
            FROM 
                work
            INNER JOIN customers USING (CustomerID)
            INNER JOIN workcategories USING (WorkCategoryID) 
            INNER JOIN payment USING (WorkID)
        
            WHERE work.CustomerID = ? AND WorkStatus=1 AND WorkStatus=0";
            $stmt = $dbh->prepare($sql);
            $parameters = array($cid,$cid);
            $stmt->execute($parameters);
            if($stmt->rowCount() > 0)  
            {
                $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
                return $result;
            }
    }

    function get_cus_compelete($cid) {
        $dbh = connection();
        $sql = "SELECT
        CustomerID, 
        (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.CustomerID = ?) as FullName,
        WorkTakenOn,
        CategoryName,
        TotalCharges,
        PaidAmount,
        DueAmount,
        WorkStatus
    FROM 
        work
    INNER JOIN customers USING (CustomerID)
    INNER JOIN workcategories USING (WorkCategoryID) 
    INNER JOIN payment USING (WorkID)
    WHERE work.CustomerID = ? AND work.WorkStatus = 2";
        $stmt = $dbh->prepare($sql);
        $parameters = array($cid,$cid);
        $stmt->execute($parameters);
        if($stmt->rowCount() > 0)  {
            $result =  $stmt->fetchall(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>