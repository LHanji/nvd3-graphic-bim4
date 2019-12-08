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
        $_POST['Red Dead Redemption 2'] = ( isset($_POST['Red Dead Redemption 2']) ) ? $nomejogo = $_POST['Red Dead Redemption 2'] : null;
        $_POST['Call of Duty Modern Warfare'] = ( isset($_POST['Call of Duty Modern Warfare']) ) ? $nomejogo = $_POST['Call of Duty Modern Warfare'] : null;
        $_POST['GTA 5'] = ( isset($_POST['GTA 5']) ) ? $nomejogo = $_POST['GTA 5'] : null;
        $_POST['Star Wars Jedi Fallen Order'] = ( isset($_POST['Star Wars Jedi Fallen Order']) ) ? $nomejogo = $_POST['Star Wars Jedi Fallen Order'] : null;
        $_POST['Fortnite'] = ( isset($_POST['Fortnite']) ) ? $nomejogo = $_POST['Fortnite'] : null;
        $_POST['League of Legends'] = ( isset($_POST['League of Legends']) ) ? $nomejogo = $_POST['League of Legends'] : null;
        $_POST['CS GO'] = ( isset($_POST['CS GO']) ) ? $nomejogo = $_POST['CS GO'] : null;
        $_POST['PUBG Lite'] = ( isset($_POST['PUBG Lite']) ) ? $nomejogo = $_POST['PUBG Lite'] : null;
        $_POST['PUBG'] = ( isset($_POST['PUBG']) ) ? $nomejogo = $_POST['PUBG'] : null;
        $_POST['Minecraft'] = ( isset($_POST['Minecraft']) ) ? $nomejogo = $_POST['Minecraft'] : null;
        
        $query = "UPDATE jogos SET valor += 1 WHERE nomejogo = '$nomejogo'";
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