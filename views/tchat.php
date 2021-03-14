
<?php 


session_start();
if(!isset($_SESSION['pseudo'])|| empty($_SESSION['pseudo'])){
 header("Location:http://localhost:3000/index.php?page=home");}
include './database/connect.php';

?>



    <article class='main-article'>
         <div class="container" > 
              <h1>Bonjour <?php echo $_SESSION['pseudo']?> </h1>
               <div id="tchat">  </div>
          </div>
             <div id="tchatForm">
                <form action="" method='post'>
                   <label for="message">message </label> <textarea name="content" class="form-control form-control-chat"></textarea>
                   <input type="submit" id='tr'name='submit' value='envoyer' class="btn btn-dark btnSub" value='envoyer'/>
                 </form>
             </div>
     </article>  
