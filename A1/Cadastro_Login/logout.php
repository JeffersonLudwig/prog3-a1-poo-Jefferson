<?php
include '../Classes/Sessao.php';

Sessao::iniciar();
Sessao::destruir();

header("Location: login.php");
exit;
?>