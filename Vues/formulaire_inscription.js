focusMethod = function getFocus() {
    document.getElementById('login').focus();
  }
function authentification()
{
    var p=document.getElementById('password').value;
    var m=document.getElementById('confirm').value;
    var n=document.getElementById('login').value;
    if(n.length<6)
    {
        alert("Le login doit comporter au moins 6 caractères!");
        focusMethod();
    }
    else{
        if(p.length<6)
        {
            alert("Le mot de pass doit comporter au moins 6 caractères!");
            focusMethod();
        }
        else
        {
            if(p==m)
            ;
            else
            {
                alert("Les mots de passe ne correspondent pas!");
                focusMethod();
            }
        }    
    }
}
