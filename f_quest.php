<?php
/*
Ce script est la 2 ème version d'un gestionnaire de questionnaire
auto-corrigé en php.
Il peut dorénavant fonctionner avec les nouvelles versions de PHP et
les variables globales à OFF.
Vous pouvez l'utiliser librement, il vous suffira d'aller modifier les 3
parties indiquées.
Il est assez brut mais je n'ai pas voulu ajouter ici de fioritures afin
qu'il reste facilement compréhensible.
Il faudrait, en particulier ajouter des couleurs, fonds, écritures
, etc...
Vous pouvez l'utiliser et le modifier comme bon vous semblera.
Tenez moi au courant d'éventuels problèmes et de vos idées ou besoins
pour l'améliorer.
© 2001-2004 , Fleury, Jean Claude Meier

Pensez à visiter périodiquement mon site :
     PedagoJiC : http://jc.meier/free.fr
pour découvrir les nouvelles versions.
*/
?>

<html>
<head>
<!-- modifier ci-dessous le titre qui apparaît dans la barre du navigateur entre > et <   -->
<title>Votre titre ici</title>
<!-- Pour empêcher le retour en arrière avec le bouton BACK -->
<script type="text/javascript">
function noBack(){window.history.forward()}
  noBack();
  window.onload=noBack;
  window.onpageshow=function(evt){if(evt.persisted)noBack()}
  window.onunload=function(){void(0)}
</script> 
</head>
<body bgcolor="#FFFFF2">
 <!-- la page s'appelle elle-même -->
<form method="post" action="f_quest.php">  <!-- à modifier si vous renommez le script -->
<!-- modifier ci-dessous le titre de la page entre > et <       -->
<center><table border="1" bgcolor="#D9FFD9" cellpadding="5"><tr><td>Titre du questionnaire</td></tr></table></CENTER><br>
<?php

// vos questions, effacez celles-ci, entrez les vôtres, en dessous du pointillé
// nombre quelconque mais autant de réponses que de questions !
// Remarque $question[0] : question 1, $question[1] : question 2 ...
//----------------------------------------------------------------------------

$question[0]="Quelle est la couleur du cheval blanc d'Henri IV ?";
$question[1]="Quelle est le jour de repos ?";
$question[2]="Quelle est la saison la plus chaude ?";

$bonne_rep[0]="blanc";
$bonne_rep[1]="dimanche";
$bonne_rep[2]="été";

//----------- fin de la partie à remplir----------------------------------------

$score=0;
$a_repondu=false;
$nbquest=sizeof($question);

/////////////////////////////////////////////////////////////////////////////////////
// Remplacement de $HTTP_POST_VARS par $_POST pour les versions récentes de PHP (>4.01)  // 
// Absolument nécessaire sur certains severurs, ex : SFR,ORANGE                          //
/////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["retour"])) // retour : on réaffiche la page corrigée
  {
   echo "<BR><CENTER>CORRIGE<BR>(allez consulter votre <a href=\"#sco\">score</a> au bas de cette page)</CENTER><BR>";
   }
   echo "<br><br><hr>";
for ($i=0;$i<$nbquest;$i++)
 {
  $no=$i+1;
  echo "<P>"."$no"."°) $question[$i]</P>";
  if (isset($_POST["retour"]))
  {
     $reponse[$i] = $_POST["reponse"][$i];
  }
  else   $reponse[$i] = "";
  echo "<INPUT type=\"text\" name=\"reponse[$i]\" value=\"$reponse[$i]\">";
  if ($reponse[$i] !="")
    {
     $a_repondu=true;   // S'il y a une réponse c'est ok, pas besoin de
                        // répondre à toutes les questions. On pourrait modifier
                        // cette possibilité ?
     $reponse[$i]=strtolower($reponse[$i]);
     if (trim($reponse[$i]) != trim($bonne_rep[$i]))
     echo "<font color=\"#FF0000\"> non ce n'est pas $reponse[$i] mais $bonne_rep[$i]</font>";
     else
       {
        echo "<font color=\"#008000\"> exact</font>";
        $score++;
       }
    }
     echo "<hr>";
  }

 if (isset($_POST["retour"]))
   {
    echo "<BR><BR><CENTER><table border=\"1\" bgcolor=\"#FFC6AA\" cellpadding=\"5\"><tr><td><a name=\"sco\">Score : $score/$nbquest</td></tr></table></CENTER>";
   }
   else
    {
     echo "<INPUT type=\"hidden\" name=\"retour\" value=\"1\">";
     echo "<BR><BR><CENTER><INPUT type=\"submit\" value=\"Confirmer\"></CENTER>";
    }
?>

</form>
</body>
</html>



