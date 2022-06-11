<?php require("form.php") ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">Tesla</div>
        <input type="checkbox" class="nav-toggle" id="nav-toggle">
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="nav-menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="pojazdy.html">Pojazdy</a></li>
                <li><a href="robot.html">Robot</a></li>
                <li><a href="roaster.html">Roaster</a></li>
                <li><a href="inne.html">Inne</a></li>
                <li><a href="kalkulator.html">Kalkulator</a></li>
            </ul>
        </div>
        <label for="nav-toggle" class="nav-toggle-label"><span></span></label>
    </nav>
    <section>
        <img src="images/logo-tesla.png" class="home-img" alt="">
        <div class="opis">
            <h1>
                Tesla, Inc. <br> – amerykański producent
                <a href="https://pl.wikipedia.org/wiki/Pojazd_elektryczny" target="_blank">elektrycznych samochodów</a>

            </h1>
            <p>
                Od 2003 do 2008 roku trwały prace nad wprowadzeniem do produkcji pierwszego samochodu marki Tesla o
                nazwie
                <a href="https://pl.wikipedia.org/wiki/Tesla_Roadster_(2007)" target="_blank">Roadster</a>. Auto
                powstało we
                współpracy z Lotus
                Cars. Sylwetka auta zbliżona jest do Lotusa Elise oraz Europa. Pojazd wprowadzono do produkcji w 2008
                roku.
                Rok
                później zaprezentowano prototyp 7-osobowego liftbacka segmentu E o zasięgu na jednym ładowaniu 300 mil
                oraz
                sportowych osiągach.
            </p>
        </div>
    </section>
    <footer>
        <form action="" method="post">
        <div class="footer-top">
            <h1>Zapisz się na listę mailingową</h1>
            <div class="form">Imię</div>
            <div class="form"><input name="imie" type="text" /></div>
            <div class="form">Nazwisko</div>
            <div class="form"><input name="nazwisko" type="text" /></div>
            <div class="form">E-mail</div>
            <div class="form"><input name="email" type="email" /></div>
            <h2>Zgada na przetwarzanie danych 
                <input name="accept" type="checkbox" /></h2>
                <h6>Wypałnij wszystkie pola!</h6>
                <input class="btn" type="submit" name="submit" value="Wyślij" >
            <p class="success"><?php echo @$again ?></p>
            <!-- przy pierwszym logowaniu uruchamiamy skrypt database, który towrzy nam baze danych, w której zawieraja się login i hasło o panelu admin. W XAMPP należy mieć włączony MySQL -->
            <div class="form"><a href="database.php">Login to admin panel</a></div>
            <!-- Gdy już sie wcześniej zalogowaliśmy i chcemy wrócić do panelu wystarczy wejść w bezpośredni link do strony admina-->
            <div class="form"><a href="adminmainpage.php">Admin Panel (gdy zalogowany)</a></div>
            <p class="error"><?php echo @$error ?></p>
            <p class="success"><?php echo @$success ?></p>
        </div>
        </form>
        <div class="footer-bottom">
            <a href="mailto:sswider1@stu.vistula.edu.pl"> <img src="images/email.png" alt=""> kontak:
                sswider1@stu.vistula.edu.pl</a>
        </div>
    </footer>
</body>

</html>