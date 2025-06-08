#4 domača naloga<br>
Preko javne EC2 instance smo se povezali na podatkovni strežnik na privatni instanci s uporabo mariadb-client aplikacije,<br>
s uporabo ukaza mysql "-h 18.185.49.95 -u ziga -p", kjer je ip naslov, ta od privatne instance, ziga, pa uporabniško ime uporabnika, s katerim se povezujemo. <br>
nato smo na strežniku ustvarili podatkovno bazo ter v novi bazi ustvarili tabelo artikel s sledečimi ukazi:<br>
create database mercator; <br>
use mercator;<br>
create table artikel (
    id int auto_increment primary key
    ,naziv varchar(255) unique not null
    ,cena decimal(10,2) not null
);<br>

na koncu smo v tabelo še vstavili 3 artikle, beli, polnozrnati, in koruzni kruh. <br>