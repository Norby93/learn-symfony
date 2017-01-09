<?php
$input = $_GET['name'];
$input = isset($_GET['name']) ? $_GET['name'] : 'World';

printf('hello %s',$input);

