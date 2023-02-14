<!-- header -->
<?php
    session_start();
    include_once "./src/header.inc.php";
    include_once "./src/connect_bdd.inc.php";
?>

<body>
    <header >
        Fidelio et Company 
    </header>
    <main>
    <div class="inner-form" role="form" aria-labelledby="inscription">
        <fieldset>
            
            <legend>
                Inscription rapide votre login & mot de passe 
            </legend>
            <form method="post">

                <!-- <input type="search" name="q" placeholder="search">
                <input type="submit" value="chercher"> -->
                <label 
                for="user-name">Adresse email</label>
            <input
                id="mail"
                type="text"
                name="mail"
                placeholder="Adresse email"
          
            >
            <label for="user-lastname">Password</label>
            <input type="password" id="psw" name="psw" 
            placeholder="Password">


            <input type="submit" value="Envoyer">
            
            </form>
            <?php
                include_once "./src/log.php";
            ?>
        </fieldset>
    </div>
</main>



<footer>
      <p>&copy; - PHP - 2023
</footer>
