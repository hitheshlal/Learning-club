<?php
$fname = $_GET[fname];
$lname = $_GET[lname];
$user = $_GET[username];
$email = $_GET[email];
$quali = $_GET[qualification];
$passwd = $_GET[pwd];

$con = mysql_connect("jdbc:mysql://localhost:3306/learning-club","root","");
if(!$con){
    echo "DB connection error";
}
$sql = "INSERT INTO `l-registration`(`Uid`, `Firstname`, `Lastname`, `Username`, `Email`, `Qualification`, `password`) 
        values("$fname","$lname","$user","$email","$quali","$passwd")";
$res = mysql_query($sql,$con);
if($res){
    echo "Data inserted Successfully";
}else{
    echo "Insertion error";
}
?>