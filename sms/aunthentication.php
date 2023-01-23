<?php     
    session_start();
    include('includes\conn.php');  
    $admin_user = $_POST['user'];  
    $admin_pass = $_POST['pass'];  
    
        //to prevent from mysqli injection  
        $admin_user = stripcslashes($admin_user);  
        $admin_pass = stripcslashes($admin_pass);  
        $admin_user = mysqli_real_escape_string($conn,$admin_user);  
        $admin_pass = mysqli_real_escape_string($conn, $admin_pass);  
      
        $sql = "select * from login where admin_user  = '$admin_user' and admin_pass = '$admin_pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script>
	                    window.location = 'index.php';
                </script>";
        }  
        else{  
            echo "<script>
	                    window.location = 'login.php';
                </script>";
                  
        }     
?>  