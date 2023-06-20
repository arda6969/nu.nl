<?php

if (isset($_post['uname']) && isset($_POST['password'])) { 
    function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)){
        header("Location: index.php?error=User Name is required");
        exit();
    }else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }else {
        echo "Valid input";
    }


} else{
    header("Location: index.php");
    exit();
} 

?>