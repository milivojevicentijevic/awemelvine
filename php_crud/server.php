<?php
    $name = "";
    $address = "";
    $id = 0;
    // connect to database
    $db = mysqli_connect('localhost','root','','awecrud');
    // if save button is clicked
    if (isset($_POST['save'])) {
        if (!empty($_POST['name']) && !empty($_POST['address'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $insert_query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
            mysqli_query($db, $insert_query);
            header('location: index.php');
        }
    }

    // retreive records
    $select_query = "SELECT * FROM info";
    $results = mysqli_query($db, $select_query);

?>