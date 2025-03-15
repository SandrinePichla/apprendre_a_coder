// Ajouter une coche lorsqu'on clique sur une ligne de la liste, selection du ul //
// Ajouter une action au clic pour tous es li//
// toggle = récupère toutes les class de la valeur li, s'il n'y a pas de checked ça l'ajoute, s'il l'a, il l'enlève = toggle //


let list = document.querySelector('ul#list-task li');


document.addEventListener('click' , function(event)
{
    if (event.target.tagName === 'LI') {
        event.target.classList.toggle('checked');
    }
}, false);

function newElement () {
    var inputValue = document.getElementById('input-new-task').value;

 var li = document.createElement('li');
 li.innerHTML = inputValue;
 var ul = document.getElementById('list-task');
 ul.appendChild(li);
 console.log(li);

}

