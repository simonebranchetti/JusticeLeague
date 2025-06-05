<html>
    <head>
        <title>Registrazione</title>
    </head>

    <body>

        <?php

            require_once '../nav.php';
            require_once '../dbsetting_ospedale.php';


            session_start();

            $connessione = new mysqli($host , $user , $password , $db);

            if($connessione == false){

                echo("connessione non riuscita " . $connessione -> host_info);

            }

            else{

                if(isset($_POST['id_reparto'])){
                    
                    $id_reparto = $connessione -> real_escape_string($_POST['id_reparto']);
                }
                if(isset($_POST['nome'])){
                    
                    $nome = $connessione -> real_escape_string($_POST['nome']);
                }
                if(isset($_POST['cognome'])){
                    
                    $cognome = $connessione -> real_escape_string($_POST['cognome']);
                    
                }
                if(isset($_POST['specializzazione'])){
                    
                    $specializzazione = $connessione -> real_escape_string($_POST['specializzazione']);
                    
                }
                if(isset($_POST['email'])){
                    
                    $email = $connessione -> real_escape_string($_POST['email']);
                }
                if(isset($_POST['password'])){
                    
                    $password_user = $connessione -> real_escape_string( ($_POST['password']));
                    
                }

                function inserimentodati_user($connessione ,$query , $tipo , $parametri){

                    $statement = $connessione -> prepare($query);

                    $statement -> bind_param ($tipo , ...$parametri);

                    $resault = $statement -> execute();

                    if($resault == true){

                        header("Location: ../home.html");
                        exit;

                    }

                    if($resault == false){

                        echo("riprova, sarai più fortunato " . $connessione -> error);

                    }
                }

                if(isset($id_reparto) && isset($nome) && isset($cognome) && isset($specializzazione) && isset($email) && isset($password)){

                    $query = "INSERT INTO medico(id_reparto , Nome_medico , Cognome_medico ,
                    Specializzazione , email , password) VALUES (? , ? ,? , ? , ? , ?)";
                    $parametri_user = [$id_reparto, $nome , $cognome , $specializzazione ,$email , $password_user ];
                    inserimentodati_user($connessione , $query , "isssss" , $parametri_user);
                }
                


            }
        ?>

        <form method="post">
            
            <form method="post">

                Numero Reparto: <input type="text" name="id_reparto" class="input"><br>
                Nome: <input type="text" name="nome" class="input"><br>
                Cognome: <input type="text" name="cognome" class="input"><br>
                Specializzazione: <input type="text" name="specializzazione" class="input"><br>
                Email: <input type="email" name="email" class="input"><br>
                Password: <input type="password" name="password" class="input"><br>
                <input type="submit" value="Registrati">

            </form>


        </form>

        <style>

            .input{

                    margin: 5px;
                    
                }
        </style>

        
    </body>
</html>