let request = new XMLHttpRequest()
let articleContainer = document.getElementById("article-container")


request.onreadystatechange = function () {
  if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    let items = JSON.parse(this.responseText)
    items.forEach((item) =>{
        let article = document.createElement("article");
        article.className = "card"      
        let h2 = document.createElement("h2"); 
        let p = document.createElement("p")
        articleContainer.appendChild(article);
        article.appendChild(h2);
        article.appendChild(p);
        p.innerText = item.contenu
        h2.innerText = item.titre
        

        
    })
  }
}
request.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles')
request.send()
         