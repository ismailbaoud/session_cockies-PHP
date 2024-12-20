<?php 
    session_start();
    echo "welcome to your home page mr/mss : " . $_SESSION["username"] . "<br>";
    echo "if you need your password i will give it for you but don't say to any one okay 😉 <br>";
    echo "so this is your password : ismail_baoud1234 <br>";
    echo "ops! this is my password sorry 🤣 this is your password : " .  $_SESSION["password"]. "<br>";
    echo "so you can't dp any thing in my site web so please just log out 🙂";
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">

        <button name="log_out" style="background:green;">login</button>
    </form>
    <?php 
echo "but if you want to stay in my web site i well give you somethisng 😎 <br>";
echo "you can change your lnguage just with one click";
?>
<form action="#" method="post">
    <select name="lg" id="">
        <option <?= isset($_COOKIE["lg"]) && $_COOKIE["lg"] == 'arab' ? "selected" : ""; ?> value="arab">arab</option>
        <option <?= isset($_COOKIE["lg"]) && $_COOKIE["lg"] == 'france' ? "selected" : ""; ?> value="france">france</option>
        <option <?= isset($_COOKIE["lg"]) && $_COOKIE["lg"] == 'tamazight' ? "selected" : ""; ?> value="tamazight">tamazight</option>
    </select>
    <button name="lg_form" style="background:green;">lg</button>
</form>
<?php
if(isset($_POST["lg_form"])){
    setcookie("lg", $_POST["lg"], time() + 3600 * 24);
    header('location: #');
    exit();
}

if(isset($_POST['log_out'])){
session_destroy();

setcookie("lg", "", time() - 3600);
header('location:../index.php');
};
?>

<h4>your languege is <?= !empty($_COOKIE["lg"]) ? $_COOKIE["lg"] : "not selected";  ?></h4>
</body>
</html>

