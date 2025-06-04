<html>
    <head>
        <title>Login</title>
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

                if(isset($nome) && isset($cognome) && isset($data_nascita) && isset($password_user)){

                    $query = "SELECT * from paziente where nome = '$nome' and cognome = '$cognome' and
                    data_nascita = '$data_nascita' and password = '$password_user'";
    
                    $risultato = $connessione -> query($query);
    
                    if($risultato -> num_rows>0){
            
                            $riga = $risultato->fetch_assoc();   // prendi i dati
                            $id_user = $riga["id_paziente"];
    
                        if($id_user){
    
                            $_SESSION["id_paziente"] = $id_user;
                            echo("utente riconosciuto " . $_SESSION["id_paziente"] . "<br>");
    
                        }
    
                    }
    
                    else{
    
                        echo("username o password non corretti");
    
                    }

                }


        }

        ?>
        
        <form method="post">
            
            Nome<input type="text" name="nome">
            cognome<input type="text" name="cognome">
            data_nascita<input type="text" name="data_nascita">
            Password<input type="text" name="password">
            <input type="submit" value="login">

        </form>

    </body>
</html>