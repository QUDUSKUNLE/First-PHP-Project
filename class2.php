<?php
// Collecting data from the form action
    $name = $_POST['name'];
    $email = $_POST['email'];
    $yearOfbirth = $_POST['yearOfbirth'];
    $password = $_POST['password'];
    $encPass = Sha1($password);

    // Database of data
    $uSers = [
                ['name' => 'Qudus Kunle', 'email' => 'quduskunle@gmail.com', 'password' => 'quduskunle08971'],
                ['name' => 'Kunle', 'email' => 'kunle@gmail.com', 'password' => 'kunle08971'],
                ['name' => 'Shola', 'email' => 'shola@gmail.com', 'password' => 'shola08971'],
                ['name' => 'Sir_Yekeens', 'email' => 'sir_yekeens@gmail.com', 'password' => 'sir_yekeens08971']
            ];
    // Authentication function.
    function authenTicate($email, $password, $db){
        $e = '';
        $p = '';
        foreach($db as $value){
            if($email == $value['email'] && $password == $value['password']){
                $e = $email;
                $p = $password;
                $name = $value['name'];
                break;
            };
        };
        if($e == '' || $p == ''){
            die("Get Out");
        };
        echo 'Welcome ', $name, ', you are have been authenticated!!!';
    };
    authenTicate($email, $password, $uSers);
?>