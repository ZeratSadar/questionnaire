<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>QCM | Simplonmars</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- core Favicon -->
    <link rel="shortcut icon" href="img/ico/favicon.ico">
</head><!--/head-->

<body>
  <h1>L'informatique pour les nuls</h1>
  <div id="contenu" class="container">
<form method="post" action="index.php">

<?php

$question[0]="Qui est considéré comme étant le premier programmeur au monde ?";
$choix[0]=array("(a) Amanda Seyfried","(b) Alan Turing","(c) Ada Lovelace","(d) Charles Babbage");
$bonne_rep[0]=$choix[0][2];
$explication[0]="Ada Lovelace (10/12/1815 - 27/11/1852), est une pionnière de la science informatique. Elle est principalement connue pour avoir réalisé le premier programme informatique, lors de son travail sur un ancêtre de l'ordinateur : la machine analytique de Charles Babbage. Un hommage lui fut rendu entre 1977 et 1983 quand un équipe de programmeur du DoD créa le langage \"Ada\".";
$image[0]="ada.jpg";

$question[1]="Qu'est-ce qu'Enigma ?";
$choix[1]=array("(a) Une machine servant au chiffrement/déchiffrement de l'information","(b) Un méchant dans Batman","(c) Un super-calculateur","(d) la réponse d");
$bonne_rep[1]=$choix[1][0];
$explication[1]="Inventée par l'Allemand Arthur Scherbius, Enigma fut utilisée principalement par l'Allemagne nazie et ses alliés, avant et pendant la Seconde Guerre mondiale. Elle fut réputée inviolable pendant longtemps, cependant des chercheurs, notamment Alan Turing, furent capables de déchiffrer les messages Enigma au moyen de « Bombes électromécaniques ».";
$image[1]="enigma.jpg";

$question[2]="Comment est mort Alan Turing ?";
$choix[2]=array("(a) Il est toujours vivant","(b) Frappé par la foudre","(c) Ecrasé par un super-calculateur","(d) En croquant dans une pomme de cyanure");
$bonne_rep[2]=$choix[2][3];
$explication[2]="Alan Turing (23 juin 1912 - 7 juin 1954) est un mathématicien, cryptologue et informaticien britannique. Il est l'auteur d'un article de logique mathématique, paru en 1936 et devenu plus tard un des fondements scientifiques de l'informatique. Durant la Seconde Guerre mondiale, il joue un rôle majeur dans les recherches sur les cryptographies générées par la machine Enigma, utilisée par les armées allemandes. Ses méthodes permirent de casser ce code et, selon plusieurs historiens, de raccourcir la capacité de résistance du régime nazi de deux ans.Après la guerre, il travaille sur un des tout premiers ordinateurs, puis contribue de manière provocatrice au débat déjà houleux à cette période sur la capacité des machines à penser, en établissant le test de Turing. En 1952, un fait divers lié à son homosexualité lui vaut des poursuites judiciaires. Pour éviter la prison, il choisit la castration chimique par prise d'œstrogènes. Turing est retrouvé mort par empoisonnement au cyanure.";
$image[2]="turing.jpg";

$question[3]="Qu'est-ce que \"Mark I\" ?";
$choix[3]=array("(a) La première armure Iron Man créé par tony Stark","(b) Le premier calculateur universel","(c) Un nombre sans dimension","(d) Le premier PC construit par Microsoft");
$bonne_rep[3]=$choix[3][1];
$explication[3]="L’IBM ASCC (Automatic Sequence Controlled Calculator), appelé \"Mark I\" par l’Université d'Harvard, a été le premier ordinateur numérique aux États-Unis. Il est considéré comme étant le premier calculateur universel. L'ASCC électromécanique a été inventé par Howard H. Aiken et créé chez IBM puis envoyé par navire à Harvard en février 1944. L’avantage principal du Mark I est qu’il était entièrement automatique : une fois lancé, il n’avait besoin d’aucune intervention humaine. Il est le premier ordinateur entièrement automatique à être achevé. Il était aussi très fiable, bien plus que les premiers calculateurs électroniques. Il est considéré comme « le point de départ de l’ère informatique moderne » et « le véritable début de l’âge de l’informatique ». Il n'est pas à confondre avec le Zuse 3, construit quelque années plus tôt, qui est considéré lui (par son créateur Konrad Zuse) comme étant le premier ordinateur.";
$image[3]="mark.jpg";

$question[4]="En quelle année fut inventé la souris ?";
$choix[4]=array("(a) -500 av J-C","(b) 1951","(c) 1963","(d) 1968");
$bonne_rep[4]=$choix[4][2];
$explication[4]="La souris a été inventée en 1963 et présentée au public en 1968 par Douglas Engelbart du Stanford Research Institute après des tests d'utilisation basés sur le trackball. Elle a été améliorée par Jean-Daniel Nicoud à l'EPFL dès 1979 grâce à l'adjonction d'une boule et de capteurs ; il fabriqua la souris Depraz qui fut à l'origine de l'entreprise Logitech.";
$image[4]="souris.jpg";

$question[5]="Quel est le \"premier\" langage de programmation de haut niveau ?";
$choix[5]=array("(a) Le Kramig","(b) Le Malsjo","(c) Le Plankalkül","(d) le Besta");
$bonne_rep[5]=$choix[5][2];
$explication[5]="Plankalkül est un langage de programmation, conçu de 1942 à 1946 par l'Allemand Konrad Zuse (et oui encore lui). À l'époque, Zuse ne fit aucune communication scientifique à ce sujet, pour diverses raisons : la Seconde Guerre mondiale faisait rage, et il consacrait tous ses efforts à la conception et à la commercialisation de son ordinateur, le Zuse 3. D'après Zuse, Plankalkül est le premier langage de haut niveau.";
$image[5]="codeP.jpg";

$question[6]="Lequel de ces OS ne fait pas parti de la \"famille UNIX ?\"";
$choix[6]=array("(a) Linux","(b) OS X","(c) NetBSD","(d) MS-DOS");
$bonne_rep[6]=$choix[6][3];
$explication[6]="Unix, officiellement UNIX, est un système d'exploitation multitâche et multi-utilisateur créé en 1969 par Kenneth Thompson. Il repose sur un interpréteur ou superviseur (le shell) et de nombreux petits utilitaires, accomplissant chacun une action spécifique, commutables entre eux (mécanisme de « redirection ») et appelés depuis la ligne de commande. Particulièrement répandu dans les milieux universitaires au début des années 1980, il a été utilisé par beaucoup de start-ups fondées par des jeunes entrepreneurs à cette époque et a donné naissance à une famille de systèmes, dont les plus populaires à ce jour sont les variantes de BSD (notamment FreeBSD, NetBSD et OpenBSD), GNU/Linux, iOS et OS X. On nomme « famille Unix », systèmes de type Unix ou simplement systèmes Unix l'ensemble de ces systèmes. Il existe un ensemble de standards réunis sous les normes POSIX et single UNIX specification qui visent à unifier certains aspects de leur fonctionnement.";
$image[6]="unix.jpg";

$question[7]="Quel langage a été crée en 1972 pour réecrire UNIX ?";
$choix[7]=array("(a) C","(b) Ada","(c) Cobol","(d) Python");
$bonne_rep[7]=$choix[7][0];
$explication[7]="Le C est un langage de programmation impératif et généraliste. Il a été inventé dans les Laboratoires Bell et fut développé en même temps que UNIX par Dennis Ritchie et Ken Thompson. Ken Thompson avait développé un prédécesseur de C, le langage B, qui est lui-même inspiré de BCPL. C est devenu un des langages les plus utilisés. De nombreux langages plus modernes comme C++, Java et PHP reprennent des aspects de C.";
$image[7]="c.png";

$question[8]="Quel ordinateur est lié à la fondation de le société \"Microsoft\" ?";
$choix[8]=array("(a) Le Blue Box","(b) L'Atari 2600","(c) L'Altair 8800","(d) Apple I");
$bonne_rep[8]=$choix[8][2];
$explication[8]="La société Micro-Soft est née en avril 1975, à Albuquerque, dans le Nouveau-Mexique, du besoin de deux étudiants américains, Bill Gates et Paul Allen, de formaliser la vente de l’interpréteur de langage informatique BASIC : Altair Basic qu’ils avaient acheté à partir d’un freeware, pour ce qui est considéré comme le premier ordinateur personnel américain, l’Altair 8800, de la société MITS, avec le premier langage de programmation pour micro-ordinateur de l’histoire de l’informatique. La marque Microsoft (originalement Micro-Soft, le trait d’union disparaissant quelques années plus tard) fut déposée le 26 novembre 1976. La stratégie commerciale de Microsoft, reposant sur la vente liée, lui a permis de diffuser son système d’exploitation Windows sur la grande majorité des ordinateurs de bureau. De nos jours, on remarque que la mission originale de Microsoft, c'est-à-dire d’avoir « un ordinateur sur chaque bureau et dans chaque maison, tournant sur Windows » est pratiquement accomplie, car Windows occupe plus de 90 % de part de marché dans le monde.";
$image[8]="microsoft.png";

$question[9]="Que représente le premier logo d'Apple ?";
$choix[9]=array("(a) Une pomme croqué au couleur de l'arc-en-ciel","(b) Turing s'étouffant avec une pomme","(c) Le premier ordinateur créé par la société","(d) Issac Newton prêt à ce prendre une pomme sur la tête");
$bonne_rep[9]=$choix[9][3];
$explication[9]="Apple Inc., anciennement Apple Computer Inc., est une entreprise multinationale américaine d'informatique, créée le 1er avril 1976 à Cupertino, puis constituée sous forme de société le 3 janvier 1977. De sa création à l'entreprise telle qu'elle existe aujourd’hui, Apple a connu les diverses phases de l'évolution du monde informatique, partant d'un monde sans ordinateur personnel à une société du XXIe siècle interconnectée par l'intermédiaire de terminaux fixes et mobiles. Son histoire est particulièrement liée à celle de l'un de ses cofondateurs, Steve Jobs, forcé à quitter la firme en 1985, puis réembauché en décembre 1996, avant de devenir CEO de la société en 1997. Parmi les produits phares qu'a connus Apple depuis sa création, se trouvent l'Apple I et II, le Macintosh, l'iPod, l'iPhone et l'iPad.";
$image[9]="apple.png";

$question[10]="Que représente le premier logo d'Apple ?";
$choix[10]=array("(a) Une pomme croqué au couleur de l'arc-en-ciel","(b) Turing s'étouffant avec une pomme","(c) Le premier ordinateur créé par la société","(d) Issac Newton prêt à ce prendre une pomme sur la tête");
$bonne_rep[10]=$choix[10][3];
$explication[10]="Apple Inc., anciennement Apple Computer Inc., est une entreprise multinationale américaine d'informatique, créée le 1er avril 1976 à Cupertino, puis constituée sous forme de société le 3 janvier 1977. De sa création à l'entreprise telle qu'elle existe aujourd’hui, Apple a connu les diverses phases de l'évolution du monde informatique, partant d'un monde sans ordinateur personnel à une société du XXIe siècle interconnectée par l'intermédiaire de terminaux fixes et mobiles. Son histoire est particulièrement liée à celle de l'un de ses cofondateurs, Steve Jobs, forcé à quitter la firme en 1985, puis réembauché en décembre 1996, avant de devenir CEO de la société en 1997. Parmi les produits phares qu'a connus Apple depuis sa création, se trouvent l'Apple I et II, le Macintosh, l'iPod, l'iPhone et l'iPad.";
$image[10]="apple.png";
//----------- fin de la partie à remplir----------------------------------------

$nbquest=sizeof($question);
$score=0;

if (isset($_POST["retour"]))
  {
   echo "<br><center>CORRIGE<br>(Allez consulter votre <a href=\"#sco\">score</a> au bas de cette page)</center><br>";
  }

for ($i=0;$i<$nbquest;$i++)
 {
  $a_repondu[$i] = false;
  $nbchoix=sizeof($choix[$i]);
  $no=$i+1;

  echo "<div id=\"panel1\">
          <div class=\"panel panel-default\">";
            echo "<div class=\"panel-heading bloc-p\" colspan=\"$nbchoix\">";
              echo "<h3 class=\"panel-title\">Question n°$no</h3>";
              echo "<h5>$question[$i]</h5>";
            echo "</div>";
    if (isset($_POST["retour"]))
     {
       if (isset($_POST["bt"][$i]))
       {
         $bt[$i] = $_POST["bt"][$i];
       }
       else $bt[$i] = "";
     }
     else $bt[$i] = "";
echo "<div class=\"panel-body two-col\">
 <div class=\"row\">";
  for ($j=0;$j<$nbchoix;$j++)
    {
     echo "<div class=\"col-md-6\">
              <div class=\"well well-sm\">
                  <div class=\"checkbox\">
                      <label>";
     echo "<input type=\"radio\" name=\"bt[$i]\" value=\"bt[$j]\" ";
     if ($bt[$i]=="bt[$j]")
       {
        echo "checked";
        $k=$j;
        $a_repondu[$i]=true;
       }
     echo ">        ".$choix[$i][$j];
     echo "</label></div></div></div>";
    }
  echo "</div>
</div>";

  echo "<div colspan=\"$nbchoix\">";

  if ($a_repondu[$i])
    {
     if ($choix[$i][$k]==$bonne_rep[$i])
        {
         $mess[$i]="<h4 style=\"color:green;\">Exact</h4><br><div class=\"row\" style=\"margin:10px 0px;\"><div class=\"col-md-4\"><img src=\"img/$image[$i]\" style=\"width:90%; margin:0px auto;\"/></div><div class=\"col-md-8\"><p style=\"padding:0px 10px;\">$explication[$i]</p></div></div>";
         $score++;
        }
     else
       {
        $mess[$i]="<h4 style=\"color:red;\">Faux, la réponse était \"<b>$bonne_rep[$i]</b>\"</h4><br><div class=\"row\" style=\"margin:10px 0px;\"><div class=\"col-md-4\"><img src=\"img/$image[$i]\" style=\"width:90%; margin:0px auto;\"/></div><div class=\"col-md-8\">$explication[$i]</div></div>";
       }
      echo "<div style=\"width:90%; height:2px; background-color:#f2f2f2; margin:0px auto;\"></div>
            <center>".$mess[$i]."</center>";
    }

  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "<br>";
  }
if (isset($_POST["retour"]))
 {
  echo "<br><br><center><table border=\"1\" cellpadding=\"5\" bgcolor=\"#FFC9AE\"><tr><td><a name=\"sco\">Score : $score/$nbquest</td></tr></table></center>";
 }
else
{
 echo "<input type=\"hidden\" name=\"retour\" value=\"1\">";
 echo "<br><br><center><button class=\"btn btn-success\" type=\"submit\" value=\"Confirmer\">Confirmer</button></center>";
}
?>
</form>
</div>
</body>
</html>
