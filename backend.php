<?php
session_start();

$username = "";
$email    = "";
$usertype = "";
$errors = array(); 

$connection = mysqli_connect('localhost','root',"",'projekat');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    if(isset($_POST['confirm_registration'])){
        $username= $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password)) { array_push($errors, "Password is required"); }

        $query = "SELECT * FROM korisnici WHERE user_name ='$username' OR user_email='$email' LIMIT 1";
        $result = mysqli_query($connection, $query);
        $user = mysqli_fetch_assoc($result);
    
        if ($user) {
            if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
            }
        
            if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
            }
        }   
            $password = md5($password);
      
            $query1 = "INSERT INTO korisnici (user_email, user_name, user_password,user_type) VALUES ('$email', '$username', '$password', 0)";
            mysqli_query($connection, $query1);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
    }
    if (isset($_POST['login_confirm'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM korisnici WHERE user_name='$username' AND user_password='$password'";
            $results = mysqli_query($connection, $query);
            if (mysqli_num_rows($results) == 1) {
            $type="SELECT user_type FROM korisnici WHERE user_name='$username' AND user_password='$password'";
            $usertype=mysqli_fetch_array(mysqli_query($connection,$type));
                if($usertype[0]=="1"){
                    $_SESSION['usertype']="1";
                }
                else{
                    $_SESSION['usertype']="0";
                }
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
  
  ?>