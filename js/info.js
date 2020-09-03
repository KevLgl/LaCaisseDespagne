var infoContainer = document.getElementById("info-container");

let request = new XMLHttpRequest()
request.onreadystatechange = function () {
  if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    let items = JSON.parse(this.responseText).items
    items.forEach((item) => { // On recupere tout les item de items
        let p = document.createElement("p")// Creer un p 
        let text = `Pour un emprunt sur ${item.durée}, le taux est de ${item.taux} ` // Creer texte generique
        infoContainer.appendChild(p)// p est l'enfant de infoContainer
        p.innerText = text // on rempli le p avec le texte
       
    })
  }
}
request.open('GET', 'infos.json')
request.send()