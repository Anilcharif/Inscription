<?php
 
    const title = "PHP - articles and post";
    $_modif_php = phpversion();
    $_date_php = date("d/m/Y - h:i");
    $_datetime = date("Y-M-J");
    
    class Page{
        public $_css = "./css/main.css";
        static $_lang = ["fr","en","it"];
       

    }
    $_new_css = new Page;
    
?>


<!DOCTYPE html>
<html lang="<?= Page::$_lang[1] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <meta name="description" content="Mon menu web">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="stylesheet" href="<?= $_new_css->_css?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>

