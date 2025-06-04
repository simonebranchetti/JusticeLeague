<html>
    <head>
        <title>Registrazione</title>
    </head>

    <body>

        <?php

            require_once 'D:\xamp\htdocs\progettiphp\GitHub\JusticeLeague\nav.php';
            require_once 'D:\xamp\htdocs\progettiphp\GitHub\JusticeLeague\dbsetting_ospedale.php';

            session_start();

            $connessione = new mysqli($host , $user , $password , $db);

            if($connessione == false){

                echo("connessione non riuscita " . $connessione -> host_info);

            }

            else{

                if(isset($_POST['nome'])){
                    
                    $nome = $connessione -> real_escape_string($_POST['nome']);
                }
                if(isset($_POST['cognome'])){
                    
                    $cognome = $connessione -> real_escape_string($_POST['cognome']);
                    
                }
                if(isset($_POST['data_nascita'])){
                    
                    $data_nascita = $connessione -> real_escape_string($_POST['data_nascita']);
                    
                }
                if(isset($_POST['password'])){
                    
                    $password_user = $connessione -> real_escape_string( ($_POST['password']));
                    
                }

                function inserimentodati_user($connessione ,$query , $tipo , $parametri){

                    $statement = $connessione -> prepare($query);

                    $statement -> bind_param ($tipo , ...$parametri);

                    $resault = $statement -> execute();

                    if($resault == true){

                        header("Location: GitHub\JusticeLeague\home.html");
                        exit;

                    }

                    if($resault == false){

                        echo("riprova, sarai più fortunato " . $connessione -> error);

                    }
                }

                if(isset($nome) && isset($cognome) && isset($data_nascita) && isset($password_user)){

                    $query = "INSERT INTO paziente(nome, cognome ,data_nascita , password) VALUES (? , ? ,? , ?)";
                    $parametri_user = [$nome , $cognome , $data_nascita , $password_user ];
                    inserimentodati_user($connessione , $query , "ssss" , $parametri_user);
                }
                


            }
        ?>

        <form method="post">
            
            Nome<input type="text" name="nome">
            cognome<input type="text" name="cognome">
            data_nascita<input type="text" name="data_nascita">
            Password<input type="text" name="password">
            <input type="submit" value="registrati">

        </form>


        
    </body>
</html>