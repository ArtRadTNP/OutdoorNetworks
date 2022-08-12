<?php
    session_start();

    include("includes/connection.php");

    if (isset($_POST['login'])) {
        $u_name = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

        $select_user = "select * from users where user_name='$u_name' AND user_pass='$pass'";
        $query = mysqli_query($con, $select_user);
        $check_user = mysqli_num_rows($query);
         if($check_user == 1){
             $_SESSION['user_name'] = $u_name;

             echo "<script>window.open('journalUch.php', '_self')</script>";
         }else{
             echo "<script>alert('Ваш username или пароль введены не правильно!!!')</script>";
            }
    }
?>