const listeMots = ['Tortue', 'Eléphant', 'Girafe']
const listePhrases = ['Vive la vie', 'Les dés sont jetés', 'Adevienne que pourra']

let score = 0

let choix = prompt ('Veuillez choisir la liste : mots ou phrases')
while (choix !== "mots" && choix !=="phrases") {
    choix = prompt ('Tapez mots ou phrases')
}


if (choix === "mots") {
    for (let i = 0; i < listeMots.length; i++) {
       let motUtilisateur = prompt("tapez le mot " + listeMots[i])
       if (motUtilisateur === listeMots[i]) {
        score++
       }
  }
  console.log("votre score est de " + score + " sur " + listeMots.length) 

} else {
    for (let i = 0; i < listePhrases.length; i++) {
        
    let motUtilisateur = prompt("tapez la phrase " + listePhrases[i])

    if (motUtilisateur === listePhrases[i]) {
     score++
    }
}
console.log("votre score est de " + score + " sur " + listePhrases.length) 

}
