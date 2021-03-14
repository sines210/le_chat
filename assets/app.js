
var url = "http://localhost:3000/config/tchatAjax.php";
var timer = setInterval(getMessage, 5000);
var btn = document.querySelector('#tr');
var tchatContain = document.querySelector('#tchat');

//c'est le js qui initie les requêtes en ajax avec submit, on attribue une action add ou get message pour faire les conditions d'action du php et on lui poste les message pour qu'il récupère les derniers messages à chaque interval; on vide le champ de text area après chaque envoi de message en lui donnant une valeur nulle ; on parse chaque fetch en json 


$(function() {
    $('#tchatForm form').submit(function(){

        var content = $("#tchatForm form textarea").val();
        $.post(url,{action:"addMessage", content: content}, function(data){
            if(data.erreur == 'ok'){
            getMessage();
            $("#tchatForm form textarea").val("")();  }
            else{
                alert(data.erreur)
            }
        }, "json");
        return false;
    })
});



function getMessage() {
    var content = $("#tchatForm form textarea").val();
    $.post(url,{action:"getMessage"}, function(data){
        if(data.erreur == 'ok'){
           tchatContain.innerHTML = data.result;}
        else{
            alert(data.erreur)
        }
    }, "json");
    return false;


}
