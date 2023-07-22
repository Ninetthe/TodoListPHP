<?php 
require_once ("c://xampp/htdocs/femcoders/todoList/controller/UsernameController.php");
//echo $_POST['nombre'];
$obj = new UsernameController();
$obj->save($_POST[$task], [$states], [$dates]);


?>