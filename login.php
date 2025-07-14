<?php  
        session_start();
        if (isset($_SESSION["email"])) {
            header("Location: dashboard_html.php");
            exit();
        }

        $servername="localhost";
        $username="root";
        $password="";
        $database="inventrix";

        // To connect to the database
        $conn=mysqli_connect($servername,$username,$password,$database);
        if (!$conn){
            die("Sorry we failed to connect: ".mysqli_connect_error()); 
        }


        if ($_SERVER['REQUEST_METHOD']=='POST'){           
        $email=trim($_POST['email']);
        $pass=trim($_POST['password']);
       
        
        // To check if the user already exists and if the password is correct
        $sql="SELECT * FROM `user` WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        if($num>0) {
            $row=mysqli_fetch_assoc($result);
                if(password_verify($pass, $row['password'])){    //extracts salt form stored hash and uses it to hash the entered password and then compares it with the stored hash
                    $_SESSION['email'] = $email; 
                    $_SESSION['date'] = $row['date'];
                    $_SESSION['success'] = "Logged in successfully!";
                    header("Location: dashboard_html.php");
                    exit();
                }
        
                else{                    
                    $_SESSION['error'] = "Invalid password! Please try again.";
                    header("Location: login_html.php");
                    exit();
                }
               
        }
        
        else {
            $_SESSION['error'] = "User does not exist! Please check your email.";
            header("Location: login_html.php");
            exit();
        }
    }
?>

