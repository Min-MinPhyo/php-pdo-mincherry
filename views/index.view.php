<?php require "views/partials/heading.php";  ?>



<h3>Get Name Data is :</h3>

<?php foreach($manyTasks as $task) : ?>

<li><?= $task->name  ; ?></li>

<?php endforeach; ?>

<h2> Submit Name :</h2>

<form action="names" method="GET">
    <input type="text" name="name">

    <input type="submit" name="submit">

</form>




<?php require "views/partials/footer.php"; ?>