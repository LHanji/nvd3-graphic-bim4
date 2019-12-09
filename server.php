<?php
    $banco = "nvd3";
    $usuario = "root";
    $senha = "";
    $servidor = "localhost";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conn){
        die(mysqli_error($conn));
    }

    $nomejogo = $_POST['nomejogo'];
    $query = "update jogos set valor = (0.001 + valor) where nomejogo = '$nomejogo'";
    mysqli_query($conn, $query);

    $file = fopen("data.csv", "w");

    $query2 = "SELECT * FROM jogos";
    $result = mysqli_query($conn, $query2);

    fputcsv($file, array("label","value"));
    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($file, $row);
    }

    fclose($file);

    header('location: funcionou.html');
?>