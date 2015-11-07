<?php
/** Liga Manager Online 4
  *
  * http://lmo.sourceforge.net/
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License as
  * published by the Free Software Foundation; either version 2 of
  * the License, or (at your option) any later version.
  * 
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
  * General Public License for more details.
  *
  * REMOVING OR CHANGING THE COPYRIGHT NOTICES IS NOT ALLOWED!
  *
  * $Id$
  */
  
  
require(dirname(__FILE__)."/../../init.php");
$_SESSION['lmouserlang']=isset($_GET['lmouserlang'])?$_GET['lmouserlang']:(isset($_SESSION['lmouserlang'])?$_SESSION['lmouserlang']:'Deutsch');

$lang=array(
    "Deutsch"=>array(
      "LANG"=>"DE",
      "HEADER"=>"Tippspielregeln",
      "JAVA"=>"Fenster schlieï¿½en",
      "ABS_1"=>"Anleitung fï¿½r das Tippspiel",
      "ABS_1_text1"=>"Nach der  Anmeldung zum Tippspiel hat der Tipper die Mï¿½glichkeit, eine <strong>oder</strong> mehrere Tippspiele zu abonnieren.",
      "ABS_2"=>"Verfahren zum Abonnieren und Spielen einzelner Ligen",
      "ABS_2_text1"=>"Anmelden und Verwalten",
      "ABS_2_text2"=>'Im Login-Bereich auf "<strong>anmelden</strong>" klicken .', 
      "ABS_2_text3"=>"Alle Anmeldedaten eintragen und auswï¿½hlen, welche Liga Sie abonnieren mï¿½chten.<br /><strong>Hinweis</strong>: Weitere Ligen kï¿½nnen Sie jederzeit nach der Erstanmeldung unter Ihrem Usernamen nachtrï¿½glich abonnieren!", 
      "ABS_2_text4"=>"Nach der Anmeldung sind Sie eingeloggt bzw. Sie kï¿½nnen sich jetzt jederzeit mit Ihrem Nickname einloggen.", 
      "ABS_2_text5"=>"Im User-Bereich des Tippspiels kï¿½nnen Sie:", 
      "ABS_2_text6"=>"Eine abonnierte <strong>Liga tippen</strong>", 
      "ABS_2_text7"=>"Punktstï¿½nde anschauen", 
      "ABS_2_text8"=>"Ihre Daten ï¿½ndern", 
      "ABS_2_text9"=>"andere bzw. neue Ligen in Ihren Tippschein aufnehmen", 
      "ABS_2_text10"=>"Passwort ï¿½ndern", 
      "ABS_2_text11"=>"<strong>Tipp-Account lï¿½schen</strong> (<strong>Achtung</strong>: Alle abonnierten Tippspiele Ihres Nicknames werden gelï¿½scht!)", 
      "ABS_2_text12"=>"Aus dem Tippspiel ausloggen",
      "ABS_2_text13"=>"Liga tippen", 
      "ABS_2_text14"=>"Nach dem Einloggen im Tippspielbereich eine abonnierte Liga zum Tippen auswï¿½hlen.", 
      "ABS_2_text15"=>"Im Ansetzungsbereich kï¿½nnen Sie nun Ihre Tipps fï¿½r die einzelnen Spieltage abgeben.", 
      "ABS_2_text16"=>"Nach Eingabe der Tipps <strong>eines Spieltages</strong> klicken Sie auf <strong>Tipps speichern</strong>", 
      "ABS_2_text17"=>"Sie kï¿½nnen jetzt auf einen anderen Spieltag wechseln und weitere Tipps abgeben.", 
      "ABS_2_text18"=>"Es besteht auch die Mï¿½glichkeit pro Spieltag einen <strong>Joker</strong> zu setzen. Die fï¿½r diesen Spieltag gewonnen Punkte werden dann mit einem bestimmten Faktor multipliziert.", 
      "ABS_2_text19"=>"Hinweise zur Tippabgabe", 
      "ABS_2_text20"=>"Die Tippzeit lï¿½uft fï¿½r jedes Spiel einzeln ab.", 
      "ABS_2_text21"=>"Ablauf der Tippzeit ist jeweils",
      "ABS_2_text21_1"=>"Minuten vor Anpfiff.", 
      "ABS_2_text22"=>"Sollten <strong>ohne</strong> unsere Kenntnis einzelne Spiele vorgezogen werden, bitten wir das zu entschuldigen. Wir versuchen jedoch immer <strong>vor</strong> einem Spieltag alle verï¿½nderten Anstoï¿½zeiten zu aktualisieren.", 
      "ABS_3"=>"Spielwertung und Ligawertung", 
     	"ABS_3_text1"=>"Die Spielwertung (Punktverteilung)", 
     	"ABS_3_text2"=>"Ergebnis richtig: <strong>",
     	"ABS_3_text2_1"=>"Punkte</strong>", 
     	"ABS_3_text3"=>"nur Tendenz und Tordifferenz richtig: <strong>",
     	"ABS_3_text4"=>"nur Tendenz richtig: <strong>", 
     	"ABS_3_text5"=>"nur eine Toranzahl richtig: <strong>",
     	"ABS_3_text6"=>"Jokermultiplikator:", 
     	"ABS_3_text7"=>"Es besteht auch die Mï¿½glichkeit pro Spieltag einen <strong>Joker</strong> zu setzen. Die fï¿½r diesen Spieltag gewonnen Punkte werden dann doppelt gewertet.", 
     	"ABS_3_text8"=>"Die Liga- und Spieltagswertung", 
     	"ABS_3_text9"=>"Die Gesamtligawertung erhalten Sie, wenn Sie in der Tippspiel-ï¿½bersicht eine abonnierte Liga unter dem Punkt: <strong>Punktestï¿½nde anschauen</strong> auswï¿½hlen.", 
     	"ABS_3_text10"=>"Sie erreichen die Gesamtligawertung auch, wenn Sie im Tippbereich auf - <strong>Ligawertung</strong> wechseln", 
     	"ABS_3_text11"=>"Die erzielten Punkte Ihrer <strong>einzelnen</strong> Spiele kï¿½nnen Sie einsehen, wenn Sie im Tippbereich einer Liga einen <strong>absolvierten Spieltag</strong> aufrufen.", 
     	"ABS_3_text12"=>"<strong>Gesamtsieger</strong> ist, wer nach einer Spielsaison die meisten Punkte auf seinem Spielkonto verbuchen kann.", 
     	"ABS_3_text13"=>"Zusï¿½tzlich kï¿½nnen unter <strong>Tippeinsicht</strong> die Tipps der Mitspieler eingesehen werden", 
     	"ABS_3_text14"=>"Die <strong>Tipp-Tabelle</strong> ist eine Zusatzanzeige, also eine Tabelle erzeugt nach Ihren abgegebenen Tipps", 
     	"ABS_3_text15"=>"Hinweise zum Zeitpunkt der Tippauswertung", 
     	"ABS_3_text16"=>"Die technische Auswertung der Spieltipps erfolgt in der Regel nach jedem absolvierten Spieltag.", 
     	"ABS_3_text17"=>"Bitte beachten Sie, dass sich aus organisatorischen Grï¿½nden die Tippauswertung auch einmal um <strong>1 bis 2 Tage</strong> verzï¿½gern kann.", 
     	"ABS_4"=>"Haftungsausschluï¿½", 
			"ABS_4_text1"=>"Fï¿½r etwaige ï¿½bertragungsfehler und sonstige technische Schwierigkeiten ist der Veranstalter in keiner Weise verantwortlich zu machen.",
			"ABS_4_text2"=>"Mit der Anmeldung zum Spiel akzeptieren Sie die Bedingungen. Dieses Spiel dient dem reinen Unterhaltungszweck. Wer hackt, verfï¿½lscht, oder sich mehrmals unter verschiedenen Namen anmeldet, wird mit Spielsperre bestraft.",
			"ABS_4_text3"=>"Der Rechtsweg ist ausgeschlossen.",
        ),
    "Francais"=>array(
    	"LANG"=>"FR",
    	"HEADER"=>"Rï¿½gles du concours de pronostics",
      "JAVA"=>"Fermer la fenï¿½tre",
      "ABS_1"=>"Introduction pour le concours de pronostics",
      "ABS_1_text1"=>"Aprï¿½s l'inscription au concours le pronostiqueur ï¿½ la possibilitï¿½ de s'inscrire ï¿½ un <strong>ou</strong> plusieurs concours de pronostics.",
      "ABS_2"=>"Procï¿½dure pour s'inscrire et s'abonner ï¿½ une ligue",
      "ABS_2_text1"=>"Inscription et administration",
      "ABS_2_text2"=>'Dans la rubrique "Console" veuillez cliquer sur "<strong>Inscription</strong>".', 
      "ABS_2_text3"=>"Veuillez remplir les champs demandï¿½s et choisissez les ligues pour lesquelles vous dï¿½sirez vous abonner.<br><strong>Remarque</strong>: Vous pouvez, une fois inscrit, vous inscrire ultï¿½rieurement ï¿½ d'autres ligues.",
      "ABS_2_text4"=>"Aprï¿½s l'inscription vous ï¿½tes inscrit ou bien vous pouvez vous inscrire ï¿½ tout moment avec votre pseudo.", 
      "ABS_2_text5"=>"Dans la console du pronostiqueur vous pouvez:", 
      "ABS_2_text6"=>"<strong>pronostiquer</strong> un ligue abonnï¿½e",
      "ABS_2_text7"=>"voir les scores", 
      "ABS_2_text8"=>"modifier vos donnï¿½es",
      "ABS_2_text9"=>"ajouter ou bien supprimer une ligue",
      "ABS_2_text10"=>"modifier votre mot de passe", 
      "ABS_2_text11"=>"<strong>supprimer votre compte</strong> (<strong>Attention</strong>: Tous les concours auquel votre pseudo est abonnï¿½ seront supprimï¿½s irrï¿½versiblement!)",
      "ABS_2_text12"=>"se dï¿½connecter du concours de pronostics",
      "ABS_2_text13"=>"Donner votre pronostic",
      "ABS_2_text14"=>"Aprï¿½s l'inscription veuillez choisir une ligue pour donner vos nouveaux pronostics.", 
      "ABS_2_text15"=>"Sur la page suivante vous pouvez maintenant donner vos pronostics pour chaques journï¿½es.", 
      "ABS_2_text16"=>"Aprï¿½s la saisie des pronostics <strong>d'une journï¿½e</strong> cliquer sur <strong>Sauvegarder mes pronostics</strong>", 
      "ABS_2_text17"=>"Vous pouvez maintenant sï¿½lectionner une autre journï¿½e et faire de nouveaux pronostics.", 
      "ABS_2_text18"=>"Il existe la possibilitï¿½ de placer un <strong>Joker</strong> par journï¿½e. Les points de ce pronostic seront multiplier par un certain facteur lors d'un bon pronostic.", 
      "ABS_2_text19"=>"Notices explicatives pour faire ses pronostics", 
      "ABS_2_text20"=>"Chaque match a son heure de clï¿½ture pour donner un pronostic.", 
      "ABS_2_text21"=>"La remise des pronostics est ï¿½ rendre pour chaque match",
      "ABS_2_text21_1"=>"minutes avant le coup d'envoi.", 
      "ABS_2_text22"=>"Si <strong>sans</strong> notre connaissance un match a ï¿½tï¿½ anticipï¿½, nous vous prions de nous excuser. Nous essayons toujours <strong>avant</strong> une journï¿½e de mettre ï¿½ jour les heures du coup d'envoi.",
      "ABS_3"=>"ï¿½valuation des matchs et de la ligue", 
     	"ABS_3_text1"=>"ï¿½valuation des matchs (rï¿½partition des points)", 
     	"ABS_3_text2"=>"Score exact: <strong>",
     	"ABS_3_text2_1"=>"points</strong>", 
     	"ABS_3_text3"=>"Rï¿½sultat et diffï¿½rence de but correct: <strong>", 
     	"ABS_3_text4"=>"Rï¿½sultat correct: <strong>", 
     	"ABS_3_text5"=>"Le score d'une des deux ï¿½quipes est correct: <strong>", 
     	"ABS_3_text6"=>"Multiplicateur du joker:", 
     	"ABS_3_text7"=>"Il existe la possibilitï¿½ de placer un <strong>Joker</strong> par journï¿½e. Les points de ce pronostic seront multiplier par le facteur ci-dessus lors d'un bon pronostic.",
     	"ABS_3_text8"=>"ï¿½valuation de la ligue et de la journï¿½e", 
     	"ABS_3_text9"=>"Le score total se trouve sous la rubrique: <strong>voir les scores</strong>.", 
     	"ABS_3_text10"=>"Vous pouvez ï¿½galement afficher cette rubrique en cliquant dans le menu sur <strong>Scores</strong>", 
     	"ABS_3_text11"=>"Les points pour <strong>chaques</strong> matchs se trouvent dans <strong>dï¿½tails pronostics</strong>.", 
     	"ABS_3_text12"=>"Le <strong>vainqueur final</strong> sera celui qui aura le plus de point sur son compte ï¿½ la fin de la saison.", 
     	"ABS_3_text13"=>"De plus vous pouvez voir sous la rubrique <strong>dï¿½tails pronostics</strong> les pronostics de vos concurrents", 
     	"ABS_3_text14"=>"Le <strong>classement</strong> est seulement un additif pour vous montrer le classement d'aprï¿½s vos pronostics.", 
     	"ABS_3_text15"=>"Notices explicatives pour la mise ï¿½ jour des points des pronostics", 
     	"ABS_3_text16"=>"L'ï¿½valuation technique s'ï¿½ffectue en gï¿½nï¿½ral aprï¿½s chaque journï¿½e.", 
     	"ABS_3_text17"=>"Veuillez noter, qu'il se peut que pour des raisons d'organisation la mise ï¿½ jour des points se retarde d'<strong>1 ou 2 jours</strong>.", 
     	"ABS_4"=>"Dï¿½ni de responsabilitï¿½", 
			"ABS_4_text1"=>"Pour toutes ï¿½ventuelles anomalies de transmission et autres difficultï¿½es techniques l'organisateur ne peut, en aucun cas, ï¿½tre tenu pour responsable.",
			"ABS_4_text2"=>"Avec l'inscription au concours de pronostics vous acceptez ces conditions. Le concours sert purement comme but rï¿½crï¿½atif, qui le pirate, le falsifie ou bien s'inscrit sous plusieurs pseudonymes, sera bani du concours.",
			"ABS_4_text3"=>"Toute procï¿½dure juridique est impossible.",
        )  
);
	$userlan=$_SESSION['lmouserlang'];

	if (isset($lang[$userlan])) {
		$userlang=$userlan;
	} else {
		$userlang="Deutsch";
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
					"http://www.w3.org/TR/html4/loose.dtd">
<html lang="<?php echo $lang[$userlang]['LANG'];?>">
<head>
<title><?php echo $lang[$userlang]['HEADER'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<style type="text/css">
  body {
        max-width : 55em;
        margin : 0.3em auto;
        font-size : 90%;
        background-color : #fff;
        color : #000;
        font-family : Tahoma, Verdana, sans-serif;
        padding : 0 0.5em;
        border : 1px solid #000;
      }
  dt , dd , li {
        padding : 0;
        margin-bottom : 0.4em;
        font-size : 99%;
      }
  a {
        text-decoration : underline;
      }
  a:hover , a:active {
        text-decoration : underline overline;
      }
  h1 , h2 {
        font-family : "Trebuchet MS", Georgia, sans-serif;
      }
  h1 {
        text-align : center;
        font-size : 140%;
        font-weight : bold;
        margin : 0;
        margin-top : 1em;
      }
  h2 {
        font-size : 115%;
        margin-bottom : 0.2em;
        background-color : #00f;
        color : #fcfcff;
        padding-left : 0.3em;
      }
  p , dl {
        margin-left : 2em;
      }
  strong {
        color : #009;
      }
  dt , em {
        font-style : normal;
        font-weight : bold;
        color : #900;
      }
</style>
</head>
<body>
<script type="text/javascript">document.write('<a href="#" onclick="self.close();"><?php echo $lang[$userlang]['JAVA'];?><\/a>')</script>
<h1><?php echo $lang[$userlang]['ABS_1'];?></h1>
<p><?php echo $lang[$userlang]['ABS_1_text1'];?></p>
<h2><?php echo $lang[$userlang]['ABS_2'];?></h2>
<dl>
  <dt><?php echo $lang[$userlang]['ABS_2_text1'];?></dt>
  <dd><?php echo $lang[$userlang]['ABS_2_text2'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text3'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text4'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text5'];?>
    <ul>
      <li><?php echo $lang[$userlang]['ABS_2_text6'];?></li>
      <li><strong><?php echo $lang[$userlang]['ABS_2_text7'];?></strong></li>
      <li><strong><?php echo $lang[$userlang]['ABS_2_text8'];?></strong></li>
      <li><strong><?php echo $lang[$userlang]['ABS_2_text9'];?></strong></li>
      <li><strong><?php echo $lang[$userlang]['ABS_2_text10'];?></strong></li>
      <li><?php echo $lang[$userlang]['ABS_2_text11'];?></li>
      <li><strong><?php echo $lang[$userlang]['ABS_2_text12'];?></strong></li>
    </ul>
  </dd>
  <dt><?php echo $lang[$userlang]['ABS_2_text13'];?></dt>
  <dd><?php echo $lang[$userlang]['ABS_2_text14'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text15'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text16'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text17'];?></dd><?php
if ($tipp_jokertipp==1) {?>
  <dd><?php echo $lang[$userlang]['ABS_2_text18'];?></dd><?php
}?>  
  <dt><?php echo $lang[$userlang]['ABS_2_text19'];?>
  <dd><?php echo $lang[$userlang]['ABS_2_text20'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text21'];?> <?php  echo $tipp_tippBis;?> <?php echo $lang[$userlang]['ABS_2_text21_1'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_2_text22'];?></dd>
</dl>
<h2><?php echo $lang[$userlang]['ABS_3'];?></h2>
<dl>
  <dt><?php echo $lang[$userlang]['ABS_3_text1'];?></dt>
  <dd>
    <ul>
      <li><?php echo $lang[$userlang]['ABS_3_text2'];?> <?php  echo $tipp_rergebnis;?> <?php echo $lang[$userlang]['ABS_3_text2_1'];?></li>
      <li><?php echo $lang[$userlang]['ABS_3_text3'];?> <?php  echo $tipp_rtendenzdiff;?> <?php echo $lang[$userlang]['ABS_3_text2_1'];?></li>
      <li><?php echo $lang[$userlang]['ABS_3_text4'];?> <?php  echo $tipp_rtendenz;?> <?php echo $lang[$userlang]['ABS_3_text2_1'];?></li>
      <li><?php echo $lang[$userlang]['ABS_3_text5'];?> <?php  echo $tipp_rtor;?>  <?php echo $lang[$userlang]['ABS_3_text2_1'];?></li>
<?php  if ($tipp_jokertipp==1) {?>
      
      <li><?php echo $lang[$userlang]['ABS_3_text6'];?> <strong><?php  echo $tipp_jokertippmulti;?></strong></li><?php
}?>  
    </ul><?php
  if ($tipp_jokertipp==1) {?>
     <dd><?php echo $lang[$userlang]['ABS_3_text7'];?></dd><?php
} ?>  
  </dd>
  <dt><?php echo $lang[$userlang]['ABS_3_text8'];?></dt>
  <dd><?php echo $lang[$userlang]['ABS_3_text9'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_3_text10'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_3_text11'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_3_text12'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_3_text13'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_3_text14'];?></dd>
  
  <dt><?php echo $lang[$userlang]['ABS_3_text15'];?></dt>
  <dd><?php echo $lang[$userlang]['ABS_3_text16'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_3_text17'];?></dd>
</dl>
<h2><?php echo $lang[$userlang]['ABS_4'];?></h2>
<dl>
  <dd><?php echo $lang[$userlang]['ABS_4_text1'];?></dd>
  <dd><?php echo $lang[$userlang]['ABS_4_text2'];?></dd>
  <dd><strong><?php echo $lang[$userlang]['ABS_4_text3'];?></strong></dd>
</dl>
<script type="text/javascript">document.write('<a href="#" onclick="self.close();"><?php echo $lang[$userlang]['JAVA'];?><\/a>')</script>
</body>
</html>
