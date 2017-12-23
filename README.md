# smdb

### Opis zadatka	

Potrebno napraviti aplikaciju u laravelu po ugledu na IMDB (internet movie database)
Aplikacija treba da sadrži sledeće stranice
Home page - lista svih filmova poredjanih po abecedi
Prikazati title i kratak teaser
Klik na title vodi na single movie page
U sidebar-u prikazati poslednjih 5 filmova (samo title) koje smo uneli u bazu (linkuju na single movie page)
Single movie page - širi prikaz filma
Title, žanr (genre), ime režisera (director), godinu kada je snimljen i ceo storyline (zaplet)
Ispod storyline-a ispisati komentare na film (tekst komentara i vreme kada je komentar ostavljen)
Ispod postojecih komentara dodati form-u za ostavljanje komentara sa validacijom
Create movie page
Forma za kreiranje novog filma sa validacijom
Genre page
klik na zanr na single movie page-u otvara novu (genre) stranicu gde se listaju samo filmovi tog žanra (html isti kao na home page-u)

### Zadatak 1

Napraviti laravel projekat ‘movies’
Izvršiti sve potrebne instalacione korake
Kreirati bazu podataka i postaviti odgovarajući .env fajl
Komitovati projekat na github na novi git repository

### Zadatak 2

Uz pomoc migracija napraviti tabelu ‘movies’
Izgenerisati migracije koristeci 'php artisan' komandu
Polja u tabeli: id, title, žanr (genre), ime režisera (director), godinu kada je snimljen i storyline (zaplet)
Izvršiti migracije
Ručno postaviti inicijalne podatke u ovu tabelu
Komitovati urađeno

### Zadatak 3

Napraviti model Movie
Napraviti kontroler ‘MoviesController’ pomocu artisan komande
Dodati akciju index u ‘MoviesController’ i rutu “/movies” koja izrvrsava ovu akciju
Unutar akcije dobaviti sve filmove iz baze preko klase Movie i proslediti u view fajl
Kreirati view fajl
Prikazati title i kratak teaser (storyline) za svaki film
Klik na title vodi na single movie page
Komitovati urađeno

### Zadatak 4

Ukljuciti bootstrap biblioteku u projekat
Postaviti layout sa navbarom i ukljuciti ga na sve stranice
U layout postaviti linkove Movies (“/movies”) i Add move (“/add”)
Komitovati urađeno


### Zadatak 5

Implementacija single movie stranice
Dodati rutu “/movies/:id” koja će izvršavati akciju show unutar ‘MoviesController’
Unutar akcije dobaviti odgovarajući model iz base uz pomoć prosleđenog ID-a (preko klase Movie), i proslediti model u view fajl
Kreirati view fajl i ispisati u njemu podatke o fimlu
Title, žanr (genre), ime režisera (director), godinu kada je snimljen i ceo storyline (zaplet)
Komitovati urađeno

### Zadatak 6

Implementirati formu za kreiranje novog filma sa validacijom
Dodati rutu “/create” koja će izvršavati akciju create unutar ‘MoviesController’
Unutar akcije postaviti prikaz forme kroz view fajl
Komitovati urađeno
Podsetnik: https://laravel.com/docs/5.5/validation

### Zadatak 7

Implementirati formu za kreiranje novog filma sa validacijom
Dodati rutu “/create” (POST) koja će izvršavati akciju store unutar ‘MoviesController’
Unutar akcije implementirati čuvanje filma u bazi podataka
Postaviti i validaciju podataka:
Title - neophodan parametar
žanr - neophodan parametar
godinu kada je snimljen - ako je parametar prosleđen, mora biti broj izmedju 1900 i trenutne godine
storyline - maksimum 1000 karaktera
Komitovati urađeno

### Zadatak 8

Uz pomoc migracija napraviti tabelu ‘comments’
Izgenerisati migracije koristeci 'php artisan' komandu
Polja u tabeli: id, movie_id, content, created_at
Obratiti pažnju da je movie_id strani ključ
Izvršiti migracije
Ručno postaviti inicijalne podatke u ovu tabelu
Komitovati urađeno
Podsetnik: https://laravel.com/docs/5.5/eloquent-relationships

### Zadatak 9

Na stranici filma, ispod storyline-a ispisati komentare na film (tekst komentara i vreme kada je komentar ostavljen)
Dodati Comment model klasu
U akciji show MoviesController-a postaviti i dobavljanje komentara za traženi film
Prikazati komentare u view fajlu
Komitovati urađeno


### Zadatak 10

Ispod postojecih komentara dodati form-u za ostavljanje komentara sa validacijom
Preko artisan komande izgenerisati CommentsController
Dodati rutu /comment/add POST
Implementirati store akciju u CommentsController-u
Radi validaciju (content i movie_id moraju biti postalvjeni)
Redirektuje na stranicu filma i prikazuje error poruku u slučaju da komentar nije validan
Dodaje komentar u bazu za određeni film u slučaju da je komentar validan i redirektuje na stranicu filma
Komitovati urađeno

### Zadatak 11

Klik na žanr na single movie stranici otvara novu stranicu gde se listaju samo filmovi tog žanra (html isti kao na home page-u)
Dodati kontroler GenresController
Dodati rutu /genres/:genre koja izvšava show akciju U GenresController-u
U show akciji implementirati dobavljanje filmova po žanru
Iskoristiti view fajl MoviesController::index akcije za prikaz filmova
Komitovati urađeno


### Zadatak 12

Na home i na genres stranicama dodati sidebar
U sidebaru prikazati poslednjih 5 filmova (samo title) koje smo uneli u bazu (linkuju na single movie page)
Komitovati urađeno
