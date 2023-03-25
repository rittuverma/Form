<?php
session_start();
if(isset($_POST["f_name"])){

    $f_name = $_POST["f_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    if(empty($f_name)||empty($email)||empty($mobile)){
        echo
        <div class='alert-warning'>
        </div>
        exit();
    }
    else{

    }
    
}
<html>
<body>
<form name="myform" method="POST" action"" onsubmit="returnvalidation()">
Name:<input type>="text" name="name"</br>
Email:<input type>="password" name="password"</br>
Phone:<input type>="num" name="num"</br>
<input type>="Submit" name="name"</br>
</form>
</body>
</html>
