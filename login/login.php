<html>
    <head>
        <title>Login</title>
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

                if(isset($id_reparto) && isset($nome) && isset($cognome) && isset($specializzazione) && isset($email) && isset($password)){

                    $query = "SELECT * from medico where id_reparto = '$id_reparto' and Nome_medico = '$nome' and
                    Cognome_medico = '$cognome' and Specializzazione = '$specializzazione' and email = '$email' and password = '$password_user'";
    
                    $risultato = $connessione -> query($query);
    
                    if($risultato -> num_rows>0){
            
                            $riga = $risultato->fetch_assoc();   // prendi i dati
                            $id_user = $riga["id_medico"];
    
                        if($id_user){
    
                            $_SESSION["id_medico"] = $id_user;
                            echo("utente riconosciuto " . $_SESSION["id_medico"] . "<br>");
    
                        }
    
                    }
    
                    else{
    
                        echo("username o password non corretti");
    
                    }

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