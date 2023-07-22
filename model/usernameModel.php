<?php 

class usernameModel{
    private $PDO;
    
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/configuration/Database.php");
        $con = new Database();
        $this->PDO = $con->conexion();
    }

    public function insert($task, $states, $dates){
        $stament = $this->PDO->prepare("INSERT INTO username VALUES(:task, :states; :dates)");
        $stament->bindParam(":task",$task, ":states", $states, ":dates",$dates);
        return($stament->execute()) ? $this->PDO->lastInsertId() : false;


    }
}


?>