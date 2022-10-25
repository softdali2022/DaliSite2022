<?php
// Dans la ligne qui suit, remplacer webmaster@domaine.tld par l'adresse email du webmaster, à laquelle les messages devront être envoyés
$email_webmaster = "hugo.maury@gmail.com";
// === traitement des données du formulaire ============================================================
if (isset($_POST["envoyer"])){
// le formulaire a été soumis
$etat = "erreur";
// Valeur par défaut. Prendra la valeur "ok" s'il n'y a pas d'erreur
// --- mise en forme des champs saisis dans le formulaire lors de sa soumission ---
if (isset($_POST["titre"])) {
$_POST["titre"]=trim(stripslashes($_POST["titre"]));
}
if (isset($_POST["prenom"])) {
$_POST["prenom"]=trim(stripslashes($_POST["prenom"]));
}
if (isset($_POST["nom"])) {
$_POST["nom"]=trim(stripslashes($_POST["nom"]));
}
if (isset($_POST["email"])) {
$_POST["email"]=trim(stripslashes($_POST["email"]));
}
if (isset($_POST["message"])) {
$_POST["message"]=trim(stripslashes($_POST["message"]));
}
if (isset($_POST["piecejointe"])) {
$_POST["piecejointe"]=trim(stripslashes($_POST["piecejointe"]));
}
 
// le formulaire a été soumis sans erreur, on envoie le mail
$entete = "From: ".$_POST["email"]." <".$_POST["email"].">\n";
$entete = "MIME-Version: 1.0";
$entete = "From: $emetteur <$de_mail>\n";//
$entete = "MIME-version: 1.0\n";
$entete.= "Content-type: text/plain; charset= iso-8859-1\n";
@mail($email_webmaster,$_POST["titre"], $_POST["prenom"], $_POST["nom"], $_POST["email"], $_POST["message"], $_POST["piecejointe"], $entete)
?>
