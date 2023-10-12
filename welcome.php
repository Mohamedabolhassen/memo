<?php
$email="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["email"])){
        echo "Email is Required";
    }
}









?>