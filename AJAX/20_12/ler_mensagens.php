<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chat_patrick";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $last_id = $_POST['last_id'];



    if($last_id==0){
        $sql = "SELECT * from chat ORDER BY id_chat DESC limit 1";
    } else {
        $sql = "SELECT * from chat WHERE id_chat > '$last_id' ";   
    }

    // echo $sql;

    $result = mysqli_query($conn, $sql);

    

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $mensagens=array();
        while($row = mysqli_fetch_assoc($result)) {
            $item=array($row["id_chat"],$row['user'],$row["cor"] ,$row["momento"],$row["mensagem_chat"]);
            array_push($mensagens,$item);
        }
        echo json_encode($mensagens);
    } else {
        $mensagens=array();
        echo json_encode($mensagens);
    }

    mysqli_close($conn);