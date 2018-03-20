<?php
include 'db.php';
session_start();
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username=\"". $username."\"";

    $mode = "LOGIN";
    if(isset($_POST['secretCode']) && $_POST['secretCode']=="sigaji2018")
        $mode = "REGISTER";

    if($mode == "REGISTER"){
        $passwordhash = password_hash($password, PASSWORD_BCRYPT);
        $sqlRegister = 'INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL , "' . $username .'", "' . $passwordhash .'" )';
        $conn->query($sqlRegister);
        echo "successfully registered. Wait!";
        header( "Refresh:2; url=./"); 
    }
    else{    
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                echo "<h1> Silahkan tunggu ...</h1>";
                $_SESSION['username'] = $username;
                header( "Refresh:2; url=./home.php");                
            }
            else{
                echo "Password incorrect!";
                header( "refresh:0;url=./?passwordincorrect");                
            }
        }
        else{
            echo "<h1> Username did not exist </h1>";
            header( "Refresh:0; url=./?usernamenotexist");
        }
    }

    $conn->close();
}
else{
    echo "Go away !";
}

?>