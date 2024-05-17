<?php
    if(isset($_SESSION['loggedIn'])){
        $email = validate($_SESSION['LoggedInUser']['email']);
        $query = "SELECT * FROM admins WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 0){
            logoutSession();
            redirect('../login.php' , 'access_denied');
        }else{
            $row = mysqli_fetch_assoc($result);
            if($row['is_banded'] == 1){
                logoutSession();
                redirect('../login.php' , 'your account has been banned from the admin');
            }
        }
    }else{
        redirect('../login.php' , 'login to continue');
    }
?>