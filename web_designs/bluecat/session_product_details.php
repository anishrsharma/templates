<?php
session_start();

$temp = $_POST['myId'];

$_SESSION['id'] = $temp;
