<?php 
if(!empty($_POST) && isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){
    session_start();
    $_SESSION["pseudo"] = htmlspecialchars($_POST['pseudo']);
    header("Location:http://localhost:3000/index.php?page=tchat");
}
?>



<article class="main-article-home">
         <form action=""  method='post'>
             <input type="text" class="form-control form-control-accueil" autocomplete='off' name='pseudo'/>
             <input type="submit" class="btn btn-dark" value='tchatter'/>
         </form>
 </article>
