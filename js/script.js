
/** Test 1 de la console : 
 console.log("Hello World")  **/ 



/** Test 2 : true / false :
 let motTapeOk = true

if (motTapeOk) {
    console.log("Bravo, vous avez correctement tapé le mot")
}
**/

/** Test 3 if / else
 const motApplication = "Bonjour" // c'est ici que l'on rentre le mot à comparer

let motUtilisateur = prompt("Entrez un mot : " + motApplication)

if (motUtilisateur === motApplication) {
console.log("Bravo, vous avez correctement tapé le mot")
}else{
    console.log("Erreur, vous avez fait une faute de frappe")
}
**/


/** test 4 : switch / case 
const codePays = "FR"
let codePaysUtilisateur = prompt("Entrez le code de votre pays ")

switch (codePaysUtilisateur) {
    
case codePays:
console.log("Vous pouvez voyager avec votre carte d'identité, durée de validité 15 ans")
break

case "D":
console.log("Vous pouvez voyager avec votre carte d'identité, mais la durée de validité est réduite à 10 ans")
break

case "UK":
console.log("Vous devez voyager avec un passeport")
break


default:
    console.log("vous devez vous renseigner auprès de votre ambassade.")
}
**/

/** Mon code exercice liste de mots
const listeMots = ['Cachalot' , 'Pétunia' , 'Serviette']
console.log(listeMots)
let score = 0

let motUtilisateur1 = prompt("Entrez le mot de la première case du tableau")
if (motUtilisateur1 === listeMots [0]) {
    console.log("mot 1 exact")
    score += 1
    console.log(score)
} else {
    console.log("mot 1 faux")
    score += 0
    console.log(score)
}
   
    let motUtilisateur2 = prompt("Entrez le mot de la deuxième case du tableau")
    if (motUtilisateur2 === listeMots [1]) {
        console.log("mot 2 exact")
        score += 1
        console.log(score)
    } else {
        console.log("mot 2 faux")
        score += 0
        console.log(score)
    }

            let motUtilisateur3 = prompt("Entrez le mot de la troisième case du tableau")
            if (motUtilisateur3 === listeMots [2]) {
                console.log("mot 3 exact")
                score += 1
                console.log(score)
            } else {
                console.log("mot 3 faux")
                score += 0
                console.log(score)
            }
**/

const listeMots = ['Cachalot' , 'Pétunia' , 'Serviette']
let score = 0

let motUtilisateur = prompt("Entrez le mot : " + listeMots[0])

if (motUtilisateur === listeMots [0]) {
    score ++
}
 
motUtilisateur = prompt("Entrez le mot : " + listeMots[1])
if (motUtilisateur === listeMots [1]) {
   score ++
}

motUtilisateur = prompt("Entrez le mot : " + listeMots[2])
if (motUtilisateur === listeMots [2]) {
    score ++
 }
 console.log(score);
           
