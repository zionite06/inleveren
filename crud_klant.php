<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* ... (dezelfde CSS als eerder) ... */
    </style>
</head>

<body>

<?php
// functie: Programma CRUD klanten
// auteur: zion   

// Initialisatie
include 'functions.php';

// Aanroep functie 
crudklant();

?>

<form method="post">

<label for="naam">naam:</label>
<input type="text" id="naam" name="naam" required><br>

<label for="adres">adres:</label>
<input type="text" id="adres" name="adres" required><br>

<label for="postcode">postcode:</label>
<input type="number" id="postcode" name="postcode" required><br>

<label for="plaats">plaats:</label>
<input type="text" id="plaats" name="plaats" required><br>

<input type="submit" name="btn_ins" value="Insert">

</form>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="dropdown">
        <h2 href="#">more </h2>
        <div class="dropdown-content">
            <a href="WinkelMandje.html">shopping card</a>
            <a href="zion.html">over zion M</a>
            <a href="index.html">Home</a>
            <a href="#">over Michael Davelaar</a>
        </div>
    </div>
</div>

<p>info waar de pagina over gaat welk bedrijf</p>

<button id="openNav" onclick="openNav()">&#9776; Open Menu</button>

<footer>
    <h3>Door Zion, Eleidy en Michael</h3>
    <p><a href="https://instagram.com/z_10k_06?igshid=NGVhN2U2NjQ0Yg==">Mijn Instagram</a></p>
</footer>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.left = "0";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.left = "-250px";
    }
</script>

</body>
</html>
