<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 
   $name= $_GET["nome"];
   $age= $_GET["età"];
   $email= $_GET["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="">
        <input type="text" placeholder="nome">
        <input type="text" placeholder="età">
        <input type="email" placeholder="inserisci la tua mail">
        <button type="submit">Invia</button>
    </form>
</body>
</html>