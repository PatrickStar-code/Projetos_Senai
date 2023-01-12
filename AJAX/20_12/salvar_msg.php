<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chat_patrick";

    $msg = $_POST['mensagem'];
    $user = $_SESSION["user"][0];
    $cor = $_SESSION["user"][1];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO chat (mensagem_chat,user,cor) VALUES ('$msg','$user','$cor')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
?>