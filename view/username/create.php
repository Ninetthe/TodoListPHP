<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off" >
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write your task">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="index.php">Cancel</a>
</form>


<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/footer.php");
?>