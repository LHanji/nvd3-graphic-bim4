<?php
    $banco = "nomedobanco";
    $usuario = "nomeuser";
    $senha = "1234";
    $servidor = "localhost";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conn){
        die(mysqli_error($conn));
    }

    if(isset($_POST['enviar'])){
        $nomejogo = $_POST['nomejogo'];

        $query = "UPDATE nometabela SET total += 1 WHERE nomejogo = '$nomejogo'";
        mysqli_query($conn, $query);

        unlink('data.csv');
        fopen('data.csv','w+');
        fclose('data.csv');

        $file = fopen("data.csv", "w");

        $query2 = "SELECT * FROM nometabela";

        while($row = mysqli_fetch_assoc($query2))
        {
            $nomejogo = $row['nomejogo'];
            $total = $row['total'];

            fputcsv($file, array($nomejogo, $total));
        }

        fclose($file);
    }
?>