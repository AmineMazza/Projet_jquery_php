<?php

// Restaurant
require 'database.php';
$id=$_GET['id'];
$sql="DELETE FROM restaurant WHERE id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:Restaurant.php");
}


// Reservation
$id=$_GET['id'];
$sql="DELETE FROM reservation WHERE id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:reservation.php");
}

// Hotels
$id=$_GET['id'];
$sql="DELETE FROM hotel WHERE id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:Hotel.php");
}

// Villes
$id=$_GET['id'];
$sql="DELETE FROM ville WHERE id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:Ville.php");
}

// Endroits
$id=$_GET['id'];
$sql="DELETE FROM lieux_touristique WHERE id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:Endroit.php");
}

// Voyage Organisé
$id=$_GET['id'];
$sql="DELETE FROM voyage WHERE id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:index.php");
}

?>