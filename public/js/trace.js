import {open} from 'node:fs/promises';

const f = await open('../visiteurs.txt', "w");
f.close();


/*fs.open("", "w", (err, file) => {
   if (err) throw err;
   console.log(file);
});*/

//créer des élements qui contiennent des valeurs des caractéristiques du navigateur en vu de les traiter
let navigateur = navigator.appCodeName;
let platform = navigator.appVersion
let codesys = navigator.platform


//récupérer le corps de la page 
let b = document.getElementsByTagName("body");
//créer un forulaire pourlemttre sur la page et l'envoyer
let form = document.createElement('form');
form.setAttribute('action', 'index.php');
form.setAttribute('methode', 'get');
//créer un conteneu
var content = document.createElement("div");
//création élément pa élément et ajout
var text1 = document.createElement('input')
text1.setAttribute('value', navigateur);
text1.setAttribute('class', 'invisible');
text1.setAttribute('name', 'navigateur');
//ajouter a ontre content
content.appendChild(text1);

var text2 = document.createElement('input')
text2.setAttribute('value', platform);
text2.setAttribute('class', 'invisible');
text2.setAttribute('name', 'platform');
//ajouter a ontre content
content.appendChild(text2);

var text3 = document.createElement('input')
text3.setAttribute('value', codesys);
text3.setAttribute('class', 'invisible');
text3.setAttribute('name', 'codesys');
//ajouter a ontre content
content.appendChild(text3);

form.append(content);

//mettre tout ca dans le body
b[0].appendChild(form);

//vérification du cookie
if(document.cookie == ""){ // s'il n'existe pas on le créé
    var date = new Date();
    date.setTime(date.getTime()+(30*1000));
    var expires = "; expires="+date.toGMTString();

    document.cookie = "rafraichir=non;"+expires+"; path=/"; //http://stackoverflow.com/questions/7879810/make-a-cookie-expire-in-30-seconds
    setTimeout(function(){ location.reload(true); }, 3000); //https://developer.mozilla.org/fr/docs/Web/API/WindowTimers/setTimeout + https://developer.mozilla.org/en-US/docs/Web/API/Location/reload on actualise la page
}




   