<?php

$conn = mysqli_connect('localhost','root','','win');
if(!$conn){
    echo "Error : " . mysqli_connect_errno();
}