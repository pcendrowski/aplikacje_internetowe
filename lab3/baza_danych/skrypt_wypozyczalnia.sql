DROP TABLE IF EXISTS Wypozyczalnia_has_klient;
DROP TABLE IF EXISTS Auto;
DROP TABLE IF EXISTS Wypozyczalnia;
DROP TABLE IF EXISTS Klient;



CREATE TABLE Klient (
  idKlient INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Imie VARCHAR(45) NOT NULL,
  Nazwisko VARCHAR(45) NOT NULL,
  Email VARCHAR(45) NOT NULL,
  Telefon INT NOT NULL,
  Nr_dokumentu_ID VARCHAR(45)
);

CREATE TABLE Wypozyczalnia (
  idWypozyczalnia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Nazwa VARCHAR(45) NOT NULL,
  Ulica VARCHAR(45) NOT NULL,
  Nr_budynku VARCHAR(45) NOT NULL,
  Miasto VARCHAR(45) NOT NULL,
  Telefon INT NOT NULL
);

CREATE TABLE Auto (
  idAuto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  idWypozyczalnia INT NOT NULL,
  Marka VARCHAR(45) NOT NULL,
  Model VARCHAR(45) NOT NULL,
  Rok_produkcji INT NOT NULL,
  Silnik VARCHAR(45) NOT NULL,
  Moc VARCHAR(45) NOT NULL,
  Rodzaj_paliwa VARCHAR(45) NOT NULL,
  Przebieg INT NOT NULL,
  FOREIGN KEY (idWypozyczalnia) REFERENCES Wypozyczalnia (idWypozyczalnia) ON DELETE CASCADE
);


CREATE TABLE Wypozyczalnia_has_klient (
  idWypozyczalnia INT NOT NULL,
  idKlient INT NOT NULL,
  CONSTRAINT `Wypozyczalnia_has_klient_Wypozyczalnia_fk`
        FOREIGN KEY idWypozyczalnia_fk (idWypozyczalnia) REFERENCES Wypozyczalnia (idWypozyczalnia)
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `Wypozyczalnia_has_klient_Klient_fk`
        FOREIGN KEY idKlient (idKlient) REFERENCES Klient (idKlient)
        ON DELETE CASCADE ON UPDATE CASCADE
        
);