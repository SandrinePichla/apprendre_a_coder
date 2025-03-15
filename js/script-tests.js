//Listes des mots et phrases = variables
const listeMots = ['Tortue', 'Eléphant', 'Girafe']
const listePhrases = ['Vive la vie', 'Les dés sont jetés', 'Adevienne que pourra']

function afficherResultat (score, nbMotsProposes) {
    // On affiche le score de l'utilisateur
    console.log('Votre score est de ' + score + ' sur ' + nbMotsProposes)
  }
  
function choisirPhrasesOuMots() {
    // Tant que l'utilsateur n'a pas choisi, on lui redemande
    let choix = prompt('Veuillez choisir la liste : mots ou phrases')
    while (choix !== "mots" && choix !== "phrases") {
        choix = prompt ('Vous devez choisir entre mots ou phrases')
    }
    return choix
}

function lancerBoucleJeu(listeProposition) {
    let score = 0
    for (let i = 0; i < listeProposition.length; i++) {
        let motUtilisateur = prompt ("Veuillez écrire le mot " + listeProposition[i])
        if (motUtilisateur === listeProposition[i]) {
        score++
        }
    }
    return score
}

function lancerJeu(){
    let choix = choisirPhrasesOuMots()
    let score = 0
    let nbMotsProposes = 0 

    if (choix === "mots") {
        score = lancerBoucleJeu(listeMots)
        nbMotsProposes = listeMots.length
    
    } else {
        score = lancerBoucleJeu(listePhrases)
        nbMotsProposes = listePhrases.length

    }
    afficherResultat(score, nbMotsProposes)
}

lancerJeu ()
