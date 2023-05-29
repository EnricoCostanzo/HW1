<?php
  session_start();
    
  if(isset($_COOKIE['user'])){
    $_SESSION['username']=$_COOKIE['user'];
    }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>EnriCostanz Auto</title>

    <link rel="stylesheet" href="servizi.css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>
    <header>
      <div id="overlay"></div>
      <nav>
        <div id="logo">
          <img src="logosito1.jpg">
          EnriCostanz Auto
      </div>
        <div id="links1">
          <a href="home.php" class="button">Home</a>
          <a href="marchiveicoli.php"class="button">Marchi </a>
          <a href="servizi.php"class="button">Servizi</a>
          <a href="home.php #info" class="button">Contatti</a>
        </div>
        <div id="links"> 
        <?php
            if(empty($_SESSION['username'])){
              echo "<a href='login.php' class='button'>Login</a>
                    <a href='signup.php' class='button'>Iscriviti</a>";
            }

            if(isset($_SESSION['username'])){
                echo "<a href='logout.php' class='button'>Logout</a>";
            }
          ?>  
          
        </div>
              
        <div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
            
      <h1>
        <strong>SERVIZI OFFERTI</strong>
      </h1>
      

    </header>
    <section>
      <div id='main'>
    <?php
            if(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                echo "<p> Benvenuto $user !</p>";
            }
          ?>
          </div>

    
      <div id='details'>
        <div>
          <img src="rateizzazione.png">
          <h1>RATEIZZAZIONE</h1> 
          <p> Attraverso la spiegazione dettagliata dei nostri consulenti, potrai avere l'auto dei tuoi sogni rateizzando il costo.</br> La presenza di più piani permette l'adattamento a qualsiasi esigenza. </p>
        </div>
        <div>
          <img src="garanzie.jpg">
          <h1>GARANZIE</h1>
          <p>Molteplici le forme assicurative che ti consentiranno di gestire in assoluta sicurezza il tuo mezzo.</br>I nostri consulenti vendite ti guideranno per mano nell’intricato mondo assicurativo, aiutandoti a scegliere quei servizi atti a garantirti quella tranquillità che ti consentirà di concentrarti maggiormente sulla guida, godendoti appieno il tuo mezzo.</p>
        </div>
      
      <div>
          <img src="documenti.jpg">
          <h1>DISBRIGO PRATICHE</h1>
          <p>La nostra agenzia Pratiche automobilistiche  opera sul territorio di Linguaglossa dal 2005 occupandosi del disbrigo di pratiche automobilistiche in genere.</br>

Siamo anche Studio di consulenza automobilistica riconosciuto ai sensi della Legge 264/91 ed e’ abilitato alle funzioni di Sportello Telematico dell’Automobilista (detto brevemente STA).</br>

Grazie al collegamento telematico attivo ogni giorno, dal lunedì al venerdì dalle ore 9,00 alle ore 12,30 e dalle 15,00 alle ore 18,00, e’ possibile ottenere in tempo reale la trascrizione del passaggio di proprieta’ del proprio autoveicolo e motociclo.</br>

Altre importanti e innumerevoli attivita’ vengono svolte con questo innovativo sistema telematico a favore di privati ed aziende.</br>

Lo sportello telematico assicura il cittadino automobilista, dando garanzia immediata ed assoluta della trascrizione al competente Ufficio ministeriale (PRA o Motorizzazione Civile).</br>

Il riconoscimento di tale garanzia e’ ulteriormente attestato oggi dalla possibilita’ di effettuare presso il nostro “STA” l’ autentica della firma in caso di passaggio di proprieta’ (compito una volta esclusivo dei Notai).</p>
        </div>
      </div>
        </section>
       
    

    <footer>
      <div>
        <h1>Enrico Costanzo 1000016135</h1>
        
        <div id='info'>
          <div>
            <img src="instagram.png">
            <p>@EnriCostanz_Auto</p>
          </div>
          <div>
            <img src="facebook.png">
            <p>EnriCostanz Auto</p>
          </div>
          <div>
            <img src="posizione.png">
            <p>Via Roma 121, Linguaglossa CT</p>
          </div>
        </div>
      </div>
    </footer>

  </body>

</html>
