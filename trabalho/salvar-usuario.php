<?php

switch ($_REQUEST["acao"]){
case 'cadastrar';
$name = $_POST["name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$birth = $_POST["birth"];
$bio = $_POST["bio"];
$type = $_POST["type"];
$date = $_POST["date"];
$avatar = $_POST["avatar"];
$status = $_POST["status"];

$sql ="insert into users (name, email, password, birth, bio, type, date, avatar, status) values ('{$name}', '{$email}','{$password}','{$birth}','{$bio}','{$type}','{$date}','{$avatar}','{$status}')";

$res = $conn ->query ($sql);

if($res==true){
print "<script>alert('cadastrado com sucesso');</script>";
print "<script>location.href='?page=lista';</script>";

}else{

    print "<script>alert('Não foi possível cadastrar');</script>";
print "<script>location.href='?page=lista';</script>";


}


break;

case 'editar';
$name = $_POST["name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$birth = $_POST["birth"];
$bio = $_POST["bio"];
$type = $_POST["type"];
$date = $_POST["date"];
$avatar = $_POST["avatar"];
$status = $_POST["status"];

$sql = "update users set 
name= '{$name}',
email= '{$email}',
password= '{$password}',
birth= '{$birth}',
bio= '{$bio}',
type= '{$type}',
date= '{$date}',
avatar= '{$avatar}',
status= '{$status}'
where
id=" .$_REQUEST["id"];

$res = $conn->query($sql);


if($res==true){
print "<script>alert('Editado com sucesso')</script>";
print "<script>location.href='?page=lista';</script>";

}else{

    print "<script>alert('Não foi possível editar')</script>";
print "<script>location.href='?page=lista';</script>";


}

break;


case 'excluir';
$sql = "delete from users where id=" .$_REQUEST["id"];

$res = $conn ->query ($sql);


if($res==true){
print "<script>alert('Excluido com sucesso')</script>";
print "<script>location.href='?page=lista';</script>";

}else{

print "<script>alert('Não foi possível excluir')</script>";
print "<script>location.href='?page=lista';</script>";


}

break;

}


?>
