<?php
/*
Ce script est la 2 �me version d'un gestionnaire de questionnaire
auto-corrig� en php.
Il peut dor�navant fonctionner avec les nouvelles versions de PHP et
les variables globales � OFF.
Vous pouvez l'utiliser librement, il vous suffira d'aller modifier les 3
parties indiqu�es.
Il est assez brut mais je n'ai pas voulu ajouter ici de fioritures afin
qu'il reste facilement compr�hensible.
Il faudrait, en particulier ajouter des couleurs, fonds, �critures
, etc...
Vous pouvez l'utiliser et le modifier comme bon vous semblera.
Tenez moi au courant d'�ventuels probl�mes et de vos id�es ou besoins
pour l'am�liorer.
� 2001-2004 , Fleury, Jean Claude Meier

Pensez � visiter p�riodiquement mon site :
     PedagoJiC : http://jc.meier/free.fr
pour d�couvrir les nouvelles versions.
*/
?>

<html>
<head>
<!-- modifier ci-dessous le titre qui appara�t dans la barre du navigateur entre > et <   -->
<title>Votre titre ici</title>
<!-- Pour emp�cher le retour en arri�re avec le bouton BACK -->
<script type="text/javascript">
function noBack(){window.history.forward()}
  noBack();
  window.onload=noBack;
  window.onpageshow=function(evt){if(evt.persisted)noBack()}
  window.onunload=function(){void(0)}
</script> 
</head>
<body bgcolor="#FFFFF2">
 <!-- la page s'appelle elle-m�me -->
<form method="post" action="f_quest.php">  <!-- � modifier si vous renommez le script -->
<!-- modifier ci-dessous le titre de la page entre > et <       -->
<center><table border="1" bgcolor="#D9FFD9" cellpadding="5"><tr><td>Titre du questionnaire</td></tr></table></CENTER><br>
<?php

// vos questions, effacez celles-ci, entrez les v�tres, en dessous du pointill�
// nombre quelconque mais autant de r�ponses que de questions !
// Remarque $question[0] : question 1, $question[1] : question 2 ...
//----------------------------------------------------------------------------

$question[0]="Quelle est la couleur du cheval blanc d'Henri IV ?";
$question[1]="Quelle est le jour de repos ?";
$question[2]="Quelle est la saison la plus chaude ?";

$bonne_rep[0]="blanc";
$bonne_rep[1]="dimanche";
$bonne_rep[2]="�t�";

//----------- fin de la partie � remplir----------------------------------------

$score=0;
$a_repondu=false;
$nbquest=sizeof($question);

/////////////////////////////////////////////////////////////////////////////////////
// Remplacement de $HTTP_POST_VARS par $_POST pour les versions r�centes de PHP (>4.01)  // 
// Absolument n�cessaire sur certains severurs, ex : SFR,ORANGE                          //
/////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["retour"])) // retour : on r�affiche la page corrig�e
  {
   echo "<BR><CENTER>CORRIGE<BR>(allez consulter votre <a href=\"#sco\">score</a> au bas de cette page)</CENTER><BR>";
   }
   echo "<br><br><hr>";
for ($i=0;$i<$nbquest;$i++)
 {
  $no=$i+1;
  echo "<P>"."$no"."�) $question[$i]</P>";
  if (isset($_POST["retour"]))
  {
     $reponse[$i] = $_POST["reponse"][$i];
  }
  else   $reponse[$i] = "";
  echo "<INPUT type=\"text\" name=\"reponse[$i]\" value=\"$reponse[$i]\">";
  if ($reponse[$i] !="")
    {
     $a_repondu=true;   // S'il y a une r�ponse c'est ok, pas besoin de
                        // r�pondre � toutes les questions. On pourrait modifier
                        // cette possibilit� ?
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



