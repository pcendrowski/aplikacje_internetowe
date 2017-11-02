<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Aplikacje internetowe - Sonda PHP</title>
        <link rel=stylesheet media=all href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Audiowide&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
            <section id="wrapper">
                <header>
                    <h1><em>SONDA</em><br>
                    Poziom jakości i typ dostępu do internetu w Polsce</h1>
                </header>
                
                <div id="sonda">
                    <ol>
                        <li>
                            <p class="question">Z którego dostawcy internetu stacjonarnego korzystasz ?:<p>
                                <label>
                                  <input type="radio" name="provider" value="Orange"> Orange
                                </label><br>
                                <label>
                                  <input type="radio" name="provider" value="UPC"> UPC
                                </label><br>
                                <label>
                                  <input type="radio" name="provider" value="Multimedia"> Multimedia
                                </label><br>
                                <label>
                                  <input type="radio" name="provider" value="Inny"> Inny (lokalny dostawca)
                                </label><br>
                                <label>
                                  <input type="radio" name="provider" value="zaden"> Nie posiadam stacjonarnego łącza
                                </label>
                        </li>
                        <li>
                                <p class="question">U jakiego operatora internetu mobilnego jesteś klientem ?:<p>
                                <label>
                                  <input type="radio" name="provider" value="T-mobile"> T-mobile
                                </label><br>
                                <label>
                                  <input type="radio" name="provider" value="Orange"> Orange
                                </label><br>
                                <label>
                                  <input type="radio" name="provider" value="Plus"> Plus
                                </label><br>
                                  <label>
                                  <input type="radio" name="provider" value="Play"> Play
                                </label><br>
                                  <label>
                                  <input type="radio" name="provider" value="zaden"> Żaden z powyższych
                                </label><br>
                        </li>
                        
                        <li>
                                <p class="question">W jakiej aglomeracji korzystasz z internetu najczęsciej ?:<p>
                                <label>
                                  <input type="radio" name="location" value="Miasto"> Miasto
                                </label><br>
                                <label>
                                  <input type="radio" name="location" value="Wieś"> Wieś
                                </label>
                        </li>
                        <li>
                                <p class="question">Czy jesteś w zasięgu sieci światłowodowej lub technologii LTE ?:<p>
                                <label>
                                  <input type="radio" name="range" value="Tak"> Tak
                                </label><br>
                                <label>
                                  <input type="radio" name="range" value="Nie"> Nie
                                </label><br>
                                <label>
                                  <input type="radio" name="range" value="Nie_wiem"> Nie wiem
                                </label>
                        </li>
                        <li>
                                <p class="question">Czy jesteś zadowolony z jakości działania swojego internetu ?:<p>
                                <label>
                                  <input type="radio" name="quality" value="Tak"> Tak
                                </label><br>
                                <label>
                                  <input type="radio" name="quality" value="Nie"> Nie
                                </label><br>
                                <label>
                                  <input type="radio" name="quality" value="Trudno_powiedziec"> Trudno powiedzieć (+/-)
                                </label>
                        </li>
                        
                    </ol> 
                        <p>
                            <input type="submit">
                        </p>    
                </div>

                <div id="author_info">
                        <span>
                            <u>To jest tylko przykładowa strona internetowa!</u>
                            <br>
                            Aplikacje internetowe LAB2 - Paweł Cendrowski</span>
                </div>
            </section>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
