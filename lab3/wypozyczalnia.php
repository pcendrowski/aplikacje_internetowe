<?php
class Baza
{
	public $pdo=null;
	
	function __construct($dbms, $host, $database, $port, $username, $password)
	{
		try {
      		if($host!='')
    	  		$this->pdo = new PDO($dbms.':host='.$host.';dbname='.$database.';port='. $port, $username, $password);
    		else //próba połączenia przez socket
          		$this->pdo = new PDO("$dbms:dbname=$database");      
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e) {
			echo 'Połączenie nie mogło zostać utworzone:<br> ' . $e->getMessage();
		}
	}
	
	function select_insert()
	{
		echo '
		  <form method="post" action="index.php" name="formularz"> 
			<input type="hidden" name="insert" value="true">
			<table> 
                        
                        <tr>
			  
			  <th>Nazwa</th>
			  <th>Ulica</th>
			  <th>Nr budynku</th>
			  <th>Miasto</th>
                          <th>Telefon</th>
                          <th colspan="2">Akcja</th>
			</tr>
                        
                      <tr>
			  
			  <td><input type="text" name="nazwa"></td>
			  <td><input type="text" name="ulica"></td>
			  <td><input type="text" name="nr_budynku"></td>
                          <td><input type="text" name="miasto"></td>
                          <td><input type="text" name="telefon"></td>
			  <td colspan="2"><input type="submit" value="Dodaj" onclick="return sprawdz();"></td>
                          
			</tr>  

		  <tr class="head_title_table">
			  
			  <th>Nazwa</th>
			  <th>Ulica</th>
			  <th>Nr budynku</th>
			  <th>Miasto</th>
                          <th>Telefon</th>
			  <th>Edytuj</th>
                          <th>Usuń</th>
			</tr>';
		$stmt = $this->pdo->query('SELECT idWypozyczalnia, Nazwa, Ulica, Nr_budynku, Miasto, Telefon FROM wypozyczalnia');
		foreach($stmt as $row)
		{
			echo '<tr>'.
				'<td>'.$row['Nazwa'].'</td>'.
				'<td>'.$row['Ulica'].'</td>'.
				'<td>'.$row['Nr_budynku'].'</td>'.
				'<td>'.$row['Miasto'].'</td>'.
                                '<td>'.$row['Telefon'].'</td>'.
				'<td><a href="index.php?edit='.$row['idWypozyczalnia'].'" class="edit"><input type="button" class="button_edit" value="Edytuj" /></a></td>'.
                                '<td><a href="index.php?delete='.$row['idWypozyczalnia'].
				  '" class="delete" onclick=\'return confirm("Na pewno usunąć?");\'><input type="button" class="button_delete" value="Usuń" /></a></td>'.
			'</tr>';
		}
		$stmt->closeCursor();
		echo 
		  '</table>.
		</form>';
	}
	
	function select_update($id)
	{
		echo '
		  <form method="post" action="index.php" name="formularz"> 
			<input type="hidden" name="insert" value="true">
			<table> 
		  <tr>
			  
			  <th>Nazwa</th>
			  <th>Ulica</th>
			  <th>Nr budynku</th>
			  <th>Miasto</th>
                          <th>Telefon</th>
			  <th>Edytuj</th>
                          <th>Usuń</th>
			</tr>';
		$stmt = $this->pdo->query('SELECT idWypozyczalnia, Nazwa, Ulica, Nr_budynku, Miasto, Telefon FROM wypozyczalnia');

		foreach($stmt as $row)
		{
			if($row['idWypozyczalnia'] == $id)
			{
				echo '<tr>'.
				 
					'<td><input type="text" value="'.$row['Nazwa'].'" name="nazwa"></td>'.
					'<td><input type="text" value="'.$row['Ulica'].'" name="ulica"></td>'.
					'<td><input type="text" value="'.$row['Nr_budynku'].'" name="nr_budynku"></td>'.
                                        '<td><input type="text" value="'.$row['Miasto'].'" name="miasto"></td>'.
                                        '<td><input type="text" value="'.$row['Telefon'].'" name="telefon"></td>'.
					'<td><input type="submit" value="Zapisz" onclick="return sprawdz();"></td>'.
					'<td><input type="button" class="button_cancel" value="Anuluj" '.
					  'onclick="document.location = \'index.php\';"></td>'.
				'</tr>';
			}
			else 
		 	  echo '<tr>'.
			    
			  	'<td>'.$row['Nazwa'].'</td>'.
			  	'<td>'.$row['Ulica'].'</td>'.
			  	'<td>'.$row['Nr_budynku'].'</td>'.
                                '<td>'.$row['Miasto'].'</td>'.
                                '<td>'.$row['Telefon'].'</td>'.
			  	'<td><a href="index.php?edit='.$row['idWypozyczalnia'].'" class="edit"><input type="button" class="button_edit" value="Edytuj" /></a></td>'.
                                '<td><a href="index.php?delete='.$row['idWypozyczalnia'].
					  '" class="delete" onclick=\'return confirm("Na pewno usunąć?");\'><input type="button" class="button_delete" value="Usuń" /></a></td>'.
			  '</tr>';			
		}
		$stmt->closeCursor();	
		echo '</table></form>';
	}
	
	function insert($Nazwa,$Ulica,$Nr_budynku,$Miasto,$Telefon)
	{
		try {
			$dbquery = $this->pdo->prepare('INSERT INTO wypozyczalnia(Nazwa, Ulica, Nr_budynku, Miasto, Telefon) VALUES(?, ?, ?, ?, ?)');
			$dbquery->execute(array($Nazwa,$Ulica,$Nr_budynku,$Miasto,$Telefon));						
			header('Location: index.php');
		} 
		  catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
	
	function delete($id)
	{
		try	{
			$dbquery = $this->pdo->prepare('DELETE FROM wypozyczalnia WHERE idWypozyczalnia= ?');
			$dbquery->execute(array($id));
			header('Location: index.php');
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	function update($Nazwa, $Ulica, $Nr_budynku, $Miasto, $Telefon, $id)
	{
		try {
			$dbquery = $this->pdo->prepare('UPDATE wypozyczalnia SET Nazwa = ?, Ulica = ?, Nr_budynku = ?, Miasto = ?, Telefon = ? WHERE idWypozyczalnia = ?');				
			$dbquery->execute(array($Nazwa, $Ulica, $Nr_budynku, $Miasto, $Telefon, $id));										
			header('Location: index.php');
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>
