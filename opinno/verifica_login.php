<?php
include "connect.php";
//Recupero a sessão
//SESSION_START();
//$l de login
$l = isset($_SESSION["login_user"])?$_SESSION["login_user"] :"";
//$s de senha
//$s = $_SESSION["senha_user"];
$s = isset($_SESSION["senha_user"])?$_SESSION["senha_user"] :"";

if($l != "" && $s != ""){
    $dados = mysqli_query($link,"select * from tb_user WHERE email = '$l'");
    while ($d = mysqli_fetch_array ($dados)){
        $id_log =   $d['id_user'];
        $nome_log = $d['nome'];
        $sobrenome_log = $d['sobrenome'];
        $email_log = $d['email'];
        $senha_log = $d['senha'];

        // inserir um campo 'online' na base de dados e defini-lo como 'On' através deste servlet
        // inserire nel db un campo "online" e settarlo in "On" mediante questa servlet
       
    }
}else{
    header('location:perfil.php');
}

?>
