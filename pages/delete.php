<?php

require_once 'actions/user.php';


if (isset($_POST['id']))
    deleteUserAction($conn, $_POST['id']);

?>
<div class="container">
    <div class="row">
        <a href="incio">
            <h1>Users - Delete</h1>
        </a>
        <a class="btn btn-success text-white" href="incio">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="deletar" method="POST">
                <label>Do you really want to remove the user?</label>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>" required />

                <button class="btn btn-success text-white" type="submit">Yes</button>
            </form>
        </div>
    </div>
</div>