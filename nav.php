<html>
   
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Garibaldi Hospital</title>
    
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #eef2f3;
    margin: 0;
    padding: 0;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #003366;
    color: white;
    padding: 15px 30px;
}

.logo img {
    height: 60px;
}

nav ul {
    list-style-type: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-right: 25px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.search-bar input {
    padding: 8px;
    border-radius: 5px;
    border: none;
    width: 200px;
}

.hospital-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 30px;
    background-color: #003366;
    color: white;
    font-family: "Georgia", serif;
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
    line-height: 1.4;
    border-radius: 12px;
    width: 85%;
    margin: 20px auto;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.3);
}

.hospital-info img {
    width: 100%;
    height: auto;
}

.divisions {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    padding: 20px;
}

.division {
    width: 350px;
    height: 250px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    color: white;
    font-size: 22px;
    font-weight: bold;
    text-align: center;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

#ospedale,
#pronto-soccorso,
#medici {
    width: 500px;
    height: 400px;
}

.division img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
}

.division a {
    position: relative;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 10px;
    border-radius: 6px;
    width: 90%;
    text-decoration: none;
    font-size: 20px;
}

#ospedale {
    background-color: #f4b400;
}

#pronto-soccorso {
    background-color: #db4437;
}

#medici {
    background-color: #673ab7;
}

.footer-container {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0;
    font-size: 18px;
}


button{

    background-color: #003366;
    color: white;
    font-family: "Georgia", serif;
    font-size: 20px;
    font-weight: bold;
    border-radius: 12px;
  
    
    
    
}

    </style>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="logo.png" alt="Logo + Neo Garibaldi">
            </div>
            <nav>
                <ul>
                    <li><a href="GitHub\JusticeLeague\home.html">Home</a></li>
                    <li><a href="GitHub\JusticeLeague\prenotazioni.php">Prenotazioni</a></li>
                    <li><a href="GitHub\JusticeLeague\contatti.php">Contatti</a></li>
                </ul>
            </nav>
           <div class="login">
                <button >Sign in</button>
                <button>Sign up</button>
            </div>
        </div>
    </header>

    
</html>
