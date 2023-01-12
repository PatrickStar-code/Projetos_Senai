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

    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO chat (mensagem_chat,stutus_mensagem,Momento)
    VALUES ('$mensagem', 'FALSE', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo $mensagem;
    } else {
        //   echo "Error";
    }

    $conn->close();
    ?>
