<?php 
    require_once('db.php');

    function login($username, $password){
        $con = dbConnection();
        $sql = "select * from employee where Username='{$username}' AND Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllEmployee(){
        $con = dbConnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){

    }

    function createEmployee($user){
        $con = dbConnection();
        $sql = "insert into employee values('', '{$user['Name']}', '{$user['ContactNo']}', '{$user['Username']}', '{$user['Password']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteEmployee($id){
        $con = dbConnection();
        $sql = "delete from employee where eID = '$id'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateEmployee($id, $name, $phone, $uname, $password) {
        $con = dbConnection();
        $sql = "update employee set Name = '$name', ContactNo = '$phone', Username = '$uname', Password = '$password' where eID = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            return true;
        } else {
            return false;
        }
    }

    function getEmployeedetails($id) {
        $con = dbConnection();
        $sql = "select * FROM employee WHERE eID = '$id'";
        $result = mysqli_query($con, $sql);
        $name = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($name, $row);
        }
        return $name;
    }

    function searchEmployee($arg){
        $con = dbConnection();
        if($arg['uname'] == "" && $arg['id'] == ""){
            $sql = "select * FROM employee WHERE Name LIKE '%" . $arg['name'] . "%'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } elseif($arg['uname'] == ""){
            $sql = "select * FROM employee WHERE Name LIKE '%" . $arg['name'] . "%' AND eID = '{$arg['id']}'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } elseif($arg['name'] == "" && $arg['id'] == ""){
            $sql = "select * FROM employee WHERE Username = '{$arg['uname']}'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } else {

            echo "No data found!";
        }
    }
    
    function addProduct($pdt){
        $con = dbConnection();
        $sql = "insert into product values('', '{$pdt['Name']}', '{$pdt['Quantity']}', '{$pdt['Price']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getAllProduct(){
        $con = dbConnection();
        $sql = "select * from product";
        $result = mysqli_query($con, $sql);
        $products = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($products, $row);
        }

        return $products;
    }

    function deleteProduct($id){
        $con = dbConnection();
        $sql = "delete from product where pID = '$id'";       
        $result = mysqli_query($con, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateProduct($id, $pname, $quantity, $price){
        $con = dbConnection();
        $sql = "update product set Name = '$pname', Quantity = '$quantity', Price = '$price' where pID = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            return true;
        } else {
            return false;
        }
    }

    function getProduct($id) {
        $con = dbConnection();
        $sql = "select * FROM product WHERE pID = '$id'";
        $result = mysqli_query($con, $sql);
        $details = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($details, $row);
        }
        return $details;
    }

?>