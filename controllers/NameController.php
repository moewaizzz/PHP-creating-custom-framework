<?php 
use core\App;

// require './views/name.view.php';

App::get("database")->insert([
    'name'=>$_POST['name']],"users");

header("Location: /");