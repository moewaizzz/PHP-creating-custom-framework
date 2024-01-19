<?php require './views/partials/header.php' ?>


<h1>UserNames</h1>
<?php foreach($users as $user){
    echo "<h5>$user->name</h5>";
}
?>


<h1>Submit your name</h1>
<form action="/names" method="POST">
    <input type="text" name='name'>
    <input type="submit" value="submit">
</form>
    
<?php require './views/partials/footer.php' ?>

