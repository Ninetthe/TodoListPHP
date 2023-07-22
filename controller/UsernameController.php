<?php 
class UsernameController{
    private $model;
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/model/usernameModel.php");
        $this->model = new usernameModel();
    }
    public function save($task, $states, $dates){
        $this->model->insert($task, $states, $dates);
        return($id=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }


}



?>