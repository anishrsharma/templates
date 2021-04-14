<?php

session_start();

$inpval = $_POST['inpval'];

$_SESSION['input_value'] = $inpval;

