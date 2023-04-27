<?php

$name = $_POST["name"];
$phone = $_POST["number"];


if(preg_match("/([0-9]{3})-([0-9]{3})-([0-9]{4})$/", $phone)){
    print "phone number entered is correct";
}else{
    print "phone number entered is incorrect";
}
