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

    <link rel="stylesheet" href="veicoli.css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">


    <script src="script.js" defer="true"></script>

    <script src="API_news.js" defer="true"></script>

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
          <a href="marchiveicoli.php"class="button">Marchi</a>
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
        <strong>il nostro parco auto</strong>
      </h1>
      

    </header>

    <section>
      <div id="main">
        <p>Effetua il Login per poter conservare i veicoli che preferisci e per poter cercare notizie sulle nuove uscite.</p>
      </div>
      <div id='search'>
        <h2>Ricerca il tuo veicolo nel nostro parco auto:</h2>
        <input type="text" placeholder="cerca veicolo">
      </div>
    </section>

    <article id="lista">
      <section id="ricerca" class="tipo, hide">
        <h2>Ricerca</h2>
        <div class="show-case"></div>
      </section>

      <section id="preferiti" class="tipo, hide">
        <h2>I tuoi veicoli preferiti</h2>
        <div class="show-case"></div>
      </section>

      <section id="veicoli" class="tipo" > 
        <h2>Tutti i veicoli</h2>     
        <div class="show-case"></div>
      </section>

    </article>
       
    <section id="news">
      <h4>Cerca notizie sulle nuove uscite </h4>
        <form>
           <input type='text' id='key_news'>
            <input type='submit' value='Cerca'>
        </form>
        <div class="articoli"></div>

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
