<?php
    $banco = "nvd3";
    $usuario = "root";
    $senha = "";
    $servidor = "localhost";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conn){
        die(mysqli_error($conn));
    }

    if(isset($_POST['enviar'])){
        $nomejogo = $_POST['nomejogo'];
<<<<<<< HEAD

        $query = "UPDATE nometabela SET total += 1 WHERE nomejogo = '$nomejogo'";
=======
        $query = "UPDATE jogos SET valor += 1 WHERE nomejogo = '$nomejogo'";
>>>>>>> 3ee1421ad15c5dcf7be1f1e1f8653490ed5045a0
        mysqli_query($conn, $query);

        unlink('data.csv');
        fopen('data.csv','w+');
        fclose('data.csv');

        $file = fopen("data.csv", "w");

        $query2 = "SELECT * FROM jogos";

        while($row = mysqli_fetch_assoc($query2))
        {
            $nomejogo = $row['jogos'];
            $total = $row['valor'];

            fputcsv($file, array($nomejogo, $total));
        }

        fclose($file);
    }
?>