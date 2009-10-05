<?
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
  */
  
  
require(dirname(__FILE__)."/../../init.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
					"http://www.w3.org/TR/html4/loose.dtd">
<html lang="de">
<head>
<title>Tippspielregeln</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
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
<script type="text/javascript">document.write('<a href="#" onclick="self.close();">Fenster schlie�en<\/a>')</script>
<h1>Anleitung f�r das Tippspiel</h1>
<p>Nach der  Anmeldung zum Tippspiel hat der Tipper die M�glichkeit, eine <strong>oder</strong> mehrere Tippspiele 
zu abonnieren.</p>
<h2>Verfahren zum Abonnieren und Spielen einzelner Ligen</h2>
<dl>
  <dt>Anmelden und Verwalten</dt>
  <dd>Im Login-Bereich auf "<strong>anmelden</strong>" klicken .</dd>
  <dd>Alle Anmeldedaten eintragen und ausw�hlen, welche Liga Sie abonnieren m�chten.<br>
      <strong>Hinweis</strong>: Weitere Ligen k�nnen Sie jederzeit nach der Erstanmeldung unter 
      Ihrem Usernamen nachtr�glich abonnieren!</dd>
  <dd>Nach der Anmeldung sind Sie eingeloggt bzw. Sie k�nnen sich jetzt jederzeit 
      mit Ihrem Nickname einloggen.</dd>
  <dd>Im User-Bereich des Tippspiels k�nnen Sie:
    <ul>
      <li>Eine abonnierte <strong>Liga tippen</strong></li>
      <li><strong>Punktst�nde anschauen</strong></li>
      <li><strong>Ihre Daten �ndern</strong></li>
      <li><strong>andere bzw. neue Ligen in Ihren Tippschein aufnehmen </strong></li>
      <li><strong>Passwort �ndern </strong></li>
      <li><strong>Tipp-Account l�schen</strong> (<strong>Achtung</strong>: Alle abonnierten Tippspiele 
          Ihres Nicknames werden gel�scht!)</li>
      <li><strong>Aus dem Tippspiel ausloggen </strong></li>
    </ul>
  </dd>
  <dt>Liga tippen</dt>
  <dd>Nach dem Einloggen im Tippspielbereich eine abonnierte Liga zum Tippen ausw�hlen.</dd>
  <dd>Im Ansetzungsbereich k�nnen Sie nun Ihre Tipps f�r die einzelnen Spieltage 
      abgeben.</dd>
  <dd>Nach Eingabe der Tipps <strong>eines Spieltages</strong> klicken Sie auf <strong>Tipps 
      speichern</strong></dd>
  <dd>Sie k�nnen jetzt auf einen anderen Spieltag wechseln und weitere Tipps abgeben.</dd><?
if ($tipp_jokertipp==1) {?>
  <dd>Es besteht auch die M�glichkeit pro Spieltag einen <strong>Joker</strong> zu setzen. 
      Die f�r diesen Spieltag gewonnen Punkte werden dann mit einem bestimmten Faktor multipliziert.</dd><?
}?>  
  <dt>Hinweise zur Tippabgabe
  <dd>Die Tippzeit l�uft f�r jedes Spiel einzeln ab. </dd>
  <dd>Ablauf der Tippzeit ist jeweils <? echo $tipp_tippBis;?> Minuten vor Anpfiff.</dd>
  <dd>Sollten <strong>ohne</strong> unsere Kenntnis einzelne Spiele vorgezogen werden, bitten 
      wir das zu entschuldigen. Wir versuchen jedoch immer <strong>vor</strong> einem Spieltag 
      alle ver�nderten Ansto�zeiten zu aktualisieren.
  </dd>
</dl>
<h2>Spielwertung und Ligawertung</h2>
<dl>
  <dt>Die Spielwertung (Punktverteilung)</dt>
  <dd>
    <ul>
      <li>Ergebnis richtig: <strong><? echo $tipp_rergebnis;?> Punkte</strong></li>
      <li>nur Tendenz und Tordifferenz richtig: <strong><? echo $tipp_rtendenzdiff;?> Punkte</strong></li>
      <li>nur Tendenz richtig: <strong><? echo $tipp_rtendenz;?> Punkte</strong></li>
      <li>nur eine Toranzahl richtig: <strong><? echo $tipp_rtor;?> Punkte</strong></li><?
if ($tipp_jokertipp==1) {?>
      
      <li>Jokermultiplikator: <strong><? echo $tipp_jokertippmulti;?></strong></li><?
}?>  
    </ul><?
  if ($tipp_jokertipp==1) {?>
     <dd>Es besteht auch die M�glichkeit pro Spieltag einen <strong>Joker</strong> zu setzen. Die f�r diesen Spieltag gewonnen Punkte werden dann doppelt gewertet.</dd><?
} ?>  
  </dd>
  <dt>Die Liga- und Spieltagswertung</dt>
  <dd>Die Gesamtligawertung erhalten Sie, wenn Sie in der Tippspiel-�bersicht eine 
      abonnierte Liga unter dem Punkt: <strong>Punktest�nde anschauen</strong> ausw�hlen.</dd>
  <dd>Sie erreichen die Gesamtligawertung auch, wenn Sie im Tippbereich auf - <strong>
      Ligawertung</strong> wechseln</dd>
  <dd>Die erzielten Punkte Ihrer <strong>einzelnen</strong> Spiele k�nnen Sie einsehen, wenn 
      Sie im Tippbereich einer Liga einen <strong>absolvierten Spieltag</strong> aufrufen.</dd>
  <dd><strong>Gesamtsieger</strong> ist, wer nach einer Spielsaison die meisten Punkte auf 
      seinem Spielkonto verbuchen kann.</dd>
  <dd>Zus�tzlich k�nnen unter <strong>Tippeinsicht</strong> die Tipps der Mitspieler eingesehen 
      werden</dd>
  <dd>Die <strong>Tipp-Tabelle</strong> ist eine Zusatzanzeige, also eine Tabelle erzeugt 
      nach Ihren abgegebenen Tipps</dd>
  
  <dt>Hinweise zum Zeitpunkt der Tippauswertung</dt>
  <dd>Die technische Auswertung der Spieltipps erfolgt in der Regel nach jedem absolvierten 
      Spieltag.</dd>
  <dd>Bitte beachten Sie, dass sich aus organisatorischen Gr�nden die Tippauswertung auch 
      einmal um <strong>1 bis 2 Tage</strong> verz�gern kann.</dd>
</dl>
<h2>Haftungsausschlu�</h2>  
<dl>
  <dd>F�r etwaige �bertragungsfehler und sonstige technische Schwierigkeiten ist der 
      Veranstalter in keiner Weise verantwortlich zu machen.</dd>
  <dd>Mit der Anmeldung zum Spiel akzeptieren Sie die Bedingungen. Dieses Spiel dient 
      dem reinen Unterhaltungszweck. Wer hackt, verf�lscht, oder sich
      mehrmals unter verschiedenen Namen anmeldet, wird mit Spielsperre bestraft.</dd>
  <dd><strong>Der Rechtsweg ist ausgeschlossen.</strong></dd>
</dl>
<script type="text/javascript">document.write('<a href="#" onclick="self.close();">Fenster schlie�en<\/a>')</script>
</body>
</html>