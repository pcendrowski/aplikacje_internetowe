<?php
  //konfiguracja połączenia z bazą danych
  $szbd='mysql';
  
  //UWAGA: gdy host=='' nastąpi próba połączenia się za pomocą socketów

  
 if($szbd=='mysql')
  {	
    //konfiguracja połączenie z bazą danych w MySQL
    $host   = 'localhost'; 
    $dbname = 'wypozyczalnia'; 
    $port   = '3306';      //3306 
    $login  = 'root'; 
    $haslo  = ''; 
  }
  
?>