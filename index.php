<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";

$user = [
   new User("Roberto", "D'Ambrosio", "Roberto8601@gmail.com"),
   new User("Massimo", "D'Ambrosio", "Massimo8601@gmail.com"),
   new User("Antonio", "D'Ambrosio", "Antonio8601@gmail.com")
];
var_dump($user);
$product = [
    new Product("Air Force 1", 100, "Nike"),
    new Product("Yeezy Boost", 240, "Adidas"),
    new Product("Air Force 1: LA", 110, "Nike"),
    new Product("Stan Smith", 80, "Adidas"),
    new Product("Chuck Taylor", 60, "Converse"),
    new Product("Huarache", 140, "Nike")
];
var_dump($product)
?>