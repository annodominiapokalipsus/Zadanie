-- 1.Utwórz tabelę użytkowników - users (kolumny – id, name, added) gdzie id jest kluczem
-- głównym pobieranym z sekwencji, name – wartością tekstową a added domyślnie ustawiany
-- na aktualną datę),
-- 2.Utwórz tabelę owoce – fruits (id, name) gdzie id jest kluczem głównym a name wartością
-- tekstową

CREATE TABLE users (
  id int AUTO_INCREMENT,
  name VARCHAR(255),
  added TIMESTAMP,
  PRIMARY KEY (id)
);


CREATE table fruits (
  id int AUTO_INCREMENT,
  name VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE users_fruits (
  id int AUTO_INCREMENT,
  user_id int NOT NULL,
  fruit_id int NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (fruit_id) REFERENCES fruits(id)

);


/*

  1.Jaka jest różnica między join, inner join, left join, right join

 JOIN / LEFT JOIN / RIGHT JOIN  :

 LEFT JOIN zwraca wszystkie z lewej tabeli i dopisuje do nich pasujace wynika z prawej tabeli.
 Jezeli w prawej tabeli nie ma pasujacych wynikow zostanie dopisany wiersz z nullami.

 RIGTH JOIN analogicznie do poprzedniej komendy tyle ze w odwrotnym kierunku.

 INNER JOIN:

 Zwraca te dane z obu tabel, ktore do siebie nawzajem pasuja.


 FUNKCJE AGREGUJACE:

  AVG

   Count

 First i Last

 min i Max

 suma



  */



