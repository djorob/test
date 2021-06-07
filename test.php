<?php include 'header.php';?>

<body style="background-color: #ffff;">
    <h1> test technique enregistrer un vehicule </h1>





    <?php

// je veux register une voiture

if (empty($_POST[$vehicule])) {
    // si je champs est vide je veux que ce message s'affiche 

    //die ('<p style="color: red; text-align: center">le champs est requis</p>');

    // je veux aussi mettre une condition pour ne pas avoir 2 fois la meme valeur 
    $vehicule === $vehicule;
    //   if ($_POST['vehicule'] === $_POST['vehicule']) {
    //       die('ce vehicule existe deja!');   
    //    }

   // echo '<p style="color: red; text-align: center">You cannot register the same value twice</p>';

}else {
    
}
  
  $vehicule= $_POST['vehicule'];
  echo 'votre vehicule est bien present '; 

  $fleetspace = array();
  for($x = 1; $x<20; $x++ ) {
        array_push($fleetspace, ++$x);
       

  }
  $fleetspace[] = $vehicule;
  print_r($vehicule);


    
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <input type="text" name="vehicule" />
            <input type="submit" value="Valider" />
        </p>
    </form>


    <?php include 'footer.php';?>
</body>

</html>