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
                        <li><a href="#">Wypożyczalnie</a></li>
                        <li><a href="#">Samochody</a></li>
                        <li><a href="#">Klienci</a></li>
                        <li><a href="#">Diagram ERD</a></li>

                    </ul>
                </div>
            </nav> 
	</header>
		
		<section class="main">
			
                    <?php
                        require('wypozyczalnia.php');
                        require('config.php');

                        $baza = new Baza($szbd,$host,$dbname,$port,$login,$haslo);

                        if( isset($_GET['delete']) )      
                          $baza->delete($_GET['delete']);
                        elseif( isset($_POST['update']) ) 
                          $baza->update($_POST['nazwa'],$_POST['ulica'],$_POST['nr_budynku'],$_POST['miasto'],$_POST['telefon'],$_POST['update']);
                        elseif( isset($_POST['insert']) ) 
                          $baza->insert($_POST['nazwa'],$_POST['ulica'],$_POST['nr_budynku'],$_POST['miasto'],$_POST['telefon']);
                        elseif( isset($_GET['edit']) )    
                          $baza->select_update($_GET['edit']);
                        else 
                          $baza->select_insert();

                    ?>
                                      
		</section>

	<footer>
            <h3>Jest to tylko przykładowa strona internetowa. Dane są fikcyjne i przypadkowe !</h3>
	</footer>
	
</body>
</html>