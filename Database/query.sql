-- SELECT
--     CustomerID, 
--     (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.CustomerID = 18) as FullName,
--     WorkTakenOn,
--     CategoryName,
--     TotalCharges,
--     PaidAmount,
--     DueAmount,
--     WorkStatus
-- FROM 
--     work
-- INNER JOIN customers USING (CustomerID)
-- INNER JOIN workcategories USING (WorkCategoryID) 
-- INNER JOIN payment USING (WorkID)
-- WHERE work.CustomerID = 18

-- SELECT
--         CustomerID, 
--         (SELECT FullName FROM profiles WHERE UserID = employees.UserID AND employees.EmployeeID = 6) as FullName,
--         WorkTakenOn,
--         CategoryName,
--         TotalCharges,
--         PaidAmount,
--         DueAmount,
--         WorkStatus,
--         WorkID
--         FROM 
--             work
--         INNER JOIN employees USING (EmployeeID)
--         INNER JOIN customers USING (CustomerID)
--         INNER JOIN workcategories USING (WorkCategoryID) 
--         INNER JOIN payment USING (WorkID)
--         WHERE work.CustomerID = 17




-- SELECT
--     CustomerID, 
--     (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.CustomerID = 18) as FullName,
--     WorkTakenOn,
--     CategoryName,
--     TotalCharges,
--     PaidAmount,
--     DueAmount,
--     WorkStatus
-- FROM 
--     work
-- INNER JOIN customers USING (CustomerID)
-- INNER JOIN workcategories USING (WorkCategoryID) 
-- INNER JOIN payment USING (WorkID)
-- WHERE work.CustomerID = 18 AND work.WorkStatus = 1 AND work.WorkStatus = 0


-- SELECT
--     UserID, 
--     (SELECT FullName FROM profiles WHERE UserID = customers.UserID AND customers.UsersID = 18) as FullName,
--     WorkTakenOn,
--     CategoryName,
--     TotalCharges,
--     PaidAmount,
--     DueAmount,
--     WorkStatus
-- FROM 
--     work
-- INNER JOIN customers USING (CustomerID)
-- INNER JOIN workcategories USING (WorkCategoryID) 
-- INNER JOIN payment USING (WorkID)
-- WHERE work.CustomerID = 18 AND work.WorkStatus = 1



-- SELECT e.EmployeeID,p.JoinDate,e.Qualification,p.FullName,p.MobileNo, (SELECT count(*) FROM work WHERE EmployeeID = e.EmployeeID) as WorkCount FROM profiles p,employees e,users u WHERE u.UserID=e.UserID AND u.UserID=p.UserID AND p.UserID=e.UserID
-- $id = $_SESSION['UserID'];

-- function connection(){
--     $dsn = 'mysql:host=localhost;dbname=doffice';
--     $username = 'root';
--     $password = '';
--     return new PDO($dsn, $username, $password);
-- }

-- function get_customer_id($id)
-- {
--     $dbh  = connection();
--     $sql  = "SELECT CustomerID FROM customers WHERE UserID=?";
--     $stmt = $dbh->prepare($sql);
--     $parameters = array($id);
--     $stmt->execute($parameters);
--     $res = $stmt->rowCount();
--     if($res > 0)
--     {
--         $result = $stmt->fetch()[0];
--         return $result;
--     } 
-- }
-- $cid = get_customer_id($id);