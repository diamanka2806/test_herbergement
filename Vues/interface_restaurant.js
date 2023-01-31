
/*function versmenu(){
    document.location.href="../index1.php?ouest=commentaire&est=restaurant";
}
function verscommentaire1(){
    document.location.href="menu_jour.php";
}
function verslike(){
    
}
*/

function verscommentaire(){
    document.location.href="../index1.php?ouest=commentaire&est=publication";
}

function like(res)
{
    document.location.href="Vues/augmenterlikepublication.php?id=res";
}

function dislike(rep)
{
    document.location.href="Vues/augmenterdislikepublication.php?id=rep";
}