<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Nostri Dottori</title>
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

.footer-container {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0;
    font-size: 18px;
}

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap');

.dottori-section {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 40px 60px;
}

.testo-sinistra {
    width: 50%;
}

.testo-sinistra h1 {
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    color: #003366;
    margin-bottom: 20px;
}

.testo-sinistra p {
    font-size: 18px;
    line-height: 1.6;
    color: #333;
}

.immagini-destra {
    width: 40%;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.immagini-destra img {
    width: 100%;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

    </style>
</head>
<body>
    <?php 
        require_once 'nav.php';
    ?>
    <main>
        <main>
    <section class="dottori-section">
        <div class="testo-sinistra">
            <h1>I nostri dottori</h1>
            <p>Nel cuore del nostro ospedale, il valore più grande è rappresentato dai nostri medici: professionisti altamente qualificati, che ogni giorno mettono a disposizione competenza, dedizione e passione per prendersi cura dei nostri pazienti.

I dottori del Neo Garibaldi Hospital vantano una formazione specialistica di altissimo livello, frutto di anni di studio, aggiornamenti costanti e pratica clinica nei più diversi ambiti della medicina. Che si tratti di diagnosi, cura o prevenzione, ogni intervento è guidato da un approccio scientifico rigoroso, unito a una profonda attenzione per il lato umano della medicina.

Oltre alla loro eccellenza tecnica, i nostri medici si distinguono per l’organizzazione e il lavoro di squadra. Collaborano quotidianamente in equipe multidisciplinari per garantire una visione completa e integrata della salute del paziente. Questo approccio consente di affrontare anche i casi più complessi con strategie condivise ed efficaci, sempre orientate al miglior risultato possibile.

Il rapporto con il paziente è al centro di tutto: empatia, ascolto e trasparenza sono i pilastri su cui si fonda il nostro modo di fare medicina. Ogni paziente viene accolto con rispetto e seguito lungo tutto il percorso di cura, ricevendo informazioni chiare, supporto emotivo e assistenza continua.

Il nostro personale medico è inoltre costantemente aggiornato sulle più recenti innovazioni nel campo sanitario, partecipando a congressi internazionali, corsi di perfezionamento e progetti di ricerca. Questo impegno nella formazione continua si traduce in cure sempre più sicure, efficaci e personalizzate.

Affidarsi ai nostri dottori significa scegliere un’eccellenza sanitaria che unisce professionalità e umanità, scienza e cuore. È con orgoglio che ogni giorno lavoriamo per garantire la salute e il benessere di chi si affida a noi, offrendo non solo trattamenti medici di qualità, ma anche un ambiente in cui sentirsi accolti, compresi e protetti</p>
        </div>
        <div class="immagini-destra">
            <img src="dottore1.png" alt="Dottore 1">
            <img src="dottore2.png" alt="Dottore 2">
            <img src="dottore3.png" alt="Dottore 3">
        </div>
    </section>
</main>

    </main>
    <footer>
        <div class="footer-container">
            <p>Neo Garibaldi Hospital - Viale Bummacaro, 16, Catania</p>
            <p>Contatti: info@neogaribaldi.it | Tel. +39 123456789</p>
        </div>
    </footer>
</body>
</html>
