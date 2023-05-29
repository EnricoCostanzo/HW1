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
    
    <link rel="stylesheet" href="home.css" >
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
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
          <a href="marchiveicoli.php" class="button">Marchi</a>
          <a href="servizi.php" class="button">Servizi</a>
          <a href="#info" class="button">Contatti</a>
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
        <strong>Auto nuova, Vita nuova!</strong>
      </h1>
      <h2>
        <a href="veicoli.php" class="button">Visita il nostro parco auto</a>
   
      </h2>
    </header>
    
    <section>
      <div id='main'>
      <?php
            if(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                echo "<p> Benvenuto $user !</p>";
            }
          ?>
        <h1>Ogni tuo desiderio, può essere soddisfatto</h1>
        <p>La concessioniaria più grande della provincia.</br>Nuovo e usato garantito.  </p>
        <h1>Cosa offriamo</h1>
        <p>Prezzi competitivi.</br>Professionalità del personale che vi saprà aiutare nella scelta del veicolo che più vi si addice.</p>
        <h1>Cosa aspetti? Corri a trovarci.</h1>
        <p>Se non puoi raggiungerci</br>Chiama: 0956475978 </p>
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
          <div id="posizione">
            <img src="posizione.png">
            <p>Via Roma 121, Linguaglossa CT</p>
          </div>
        </div>
      </div>
    </footer>


  </body>
</html>