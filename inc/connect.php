<?php
$connection = mysqli_connect("localhost:3306", "root", "O@mO23352433", "tsa-kasiDB");
if (!$connection) {
    die(mysqli_error($connection));
}