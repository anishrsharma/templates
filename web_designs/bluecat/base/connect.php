<?php


$con = new mysqli("localhost", "root", "Anish@123", "bluecat2");

if ($con->connect_error) {
    die("Connection failed" . $con->connect_error);
}