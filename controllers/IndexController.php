<?php 
use core\App;

$tasks = App::get('database')->selectAll('tasks');

view('index',$tasks);