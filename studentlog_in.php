<?php      
    include('connection.php');  
    $username = $_POST['stulogemail'];  
    $password = $_POST['stulogpass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from student where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script type="text/JavaScript"> 
            alert("Login Successful");
            window.location.href="https://www.w3schools.com/js/js_popup.asp";
            </script>' ;
        }  
        else{  
            echo '<script type="text/JavaScript"> 
            alert("Invalid E-mail or Password");
            window.location.href="index.php";
            </script>'
       ;  
        }     
?>
