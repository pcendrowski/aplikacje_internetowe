<!DOCTYPE HTML>
<html lang=pl>
  <head>
    <meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikacje internetowe - Paweł Cendrowski</title>
    <link rel=stylesheet media=all href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Advent+Pro&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
<body>
	<header>
            <div id="title">
                <h1><em>Wypożyczalnia samochodów - baza historii</em></h1>
            </div>
            
            <div id="author_info">
				<h1>Aplikacje internetowe LAB3 - Paweł Cendrowski</h1>
            </div> 
            
           <div class="clearfix"></div>
		   <br>
            
            <nav>
                <div class="navbar">
                    <ul>
                        <li><a href="index.php">Wypożyczalnie</a></li>
                        <li><a href="auto.php">Samochody</a></li>
                        <li><a href="#">Klienci</a></li>
                        <li><a href="diagram_erd.php">Diagram ERD</a></li>

                    </ul>
                </div>
            </nav> 
                   
            <div class="name_table">
                 <h1>Samochody</h1>
            </div>
	</header>
		
		<section class="main">
			
                    <?php
                        require('wypozyczalnia.php');
                        require('config.php');

                

                    ?>
                                      
		</section>

	<footer>
            <h3>Jest to tylko przykładowa strona internetowa. Dane są fikcyjne i przypadkowe !</h3>
	</footer>
	
</body>
</html>