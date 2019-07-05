<?php
$con = mysqli_connect("localhost", "root", "", "lifestylestore_db")or die($mysqli_error($con));
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}