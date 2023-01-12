<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chat_patrick";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM chat WHERE stutus_mensagem = 'FALSE' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $mensagens[] = $row["mensagem_chat"];
        }        

        $sql2 = "UPDATE chat SET stutus_mensagem='TRUE'";

        $conn->query($sql2);
    }
    

    $conn->close();

    echo json_encode($mensagens);
