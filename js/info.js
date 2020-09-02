var infoContainer = document.getElementById("info-container");

let request = new XMLHttpRequest()
request.onreadystatechange = function () {
  if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    let items = JSON.parse(this.responseText).items
    items.forEach((item) => {
        let p = document.createElement("p")
        let text = `Pour un emprunt sur ${item.durée}, le taux est de ${item.taux} `
        infoContainer.appendChild(p)
        p.innerText = text
       
    })
  }
}
request.open('GET', 'infos.json')
request.send()