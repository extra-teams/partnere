<?php

  function check(){
    $i=0;
    if (!empty($_REQUEST)) {
      /* Test donnée expéditeur*/

      if (empty(trim($_REQUEST["inputEmailExpediteur"]))) {
        // Le cas où la variable inputEmailExpediteur est vide
        $GLOBALS['errorExp'] = "Merci de saisir un l'expéditeur !";
      }else {
        // le cas contraire
        $GLOBALS['valueExp'] = trim($_REQUEST["inputEmailExpediteur"]);
        $i++;
      }

      if (empty(trim($_REQUEST['nom']))) {
        $GLOBALS['errornom']="entrer votre nom";
        # code...
      }
      {
        $GLOBALS["valuenom"]=trim($_REQUEST['nom']);
        $i++;
      }

      /* Test donnée destinataire*/
      
      if (empty(trim($_REQUEST["inputMessage"]))) {
        // Le cas où la variable inputEmailExpediteur est vide
        $GLOBALS['errorMg'] = "Merci de saisir votre message !";
      }else {
        // le cas contraire
        $GLOBALS['valueMg'] = trim($_REQUEST["inputMessage"]);
        $i++;
      }
    }
    if($i==3){
      $GLOBALS['valid_data'] = true;
    }
  }


 ?>
