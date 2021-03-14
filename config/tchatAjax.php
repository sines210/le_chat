<?php
session_start();
require ('../database/connect.php');

//d va représenter les data que je fetch en ajax
$d = [];

if(!isset($_SESSION['pseudo'])|| empty($_SESSION['pseudo']) || !isset($_POST["action"])){
    $d["erreur"]="vous devez être conncecté pour chatter";
}
else{
    // ajoute les messages
    if($_POST['action'] == "addMessage"){
        $content = htmlspecialchars($_POST['content']);
         $pseudo = $_SESSION['pseudo'];
        $sql= 'INSERT INTO conversations (pseudo, content) VALUES (:pseudo, :content)';
        $newMessage = $db->prepare($sql);
        $newMessage->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $newMessage->bindValue(":content", $content, PDO::PARAM_STR);
        $newMessage->execute();
        $d["erreur"] = 'ok';
    }



    //affiche les derniers messages
    if($_POST['action'] == "getMessage" ){
   
        $sql = "SELECT pseudo, content FROM conversations ORDER BY id ASC" ;
        $getMessage = $db->prepare($sql);
        $getMessage->execute();
        
        //au lieu de fetchAll tte la table je récupère les data ligne par ligne et je les ajoute en bouclant 
        while($data = $getMessage->fetch(PDO::FETCH_ASSOC)){
        $d['result'] .= "<br><span class='pseudo'><strong>".$data['pseudo']."</strong> : </span>" . "<span class='content'>". htmlentities($data["content"])."</span>"; }    
        $d["erreur"] = 'ok';
    }
}

echo json_encode($d);

?>