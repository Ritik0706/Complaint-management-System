<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if(mysqli_connect_error())
{
    echo "Cannot connect";
}
else
{
    echo "connect";
}

?>