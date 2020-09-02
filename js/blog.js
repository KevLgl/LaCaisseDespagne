let request = new XMLHttpRequest()
let articleContainer = document.getElementById("article-container")


request.onreadystatechange = function () {
  if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    let items = JSON.parse(this.responseText)
    items.forEach((item) =>{
        let article = document.createElement("article");
        article.className = "card"      
        let h3 = document.createElement("h3"); 
        let p = document.createElement("p")
        articleContainer.appendChild(article);
        article.appendChild(h3);
        article.appendChild(p);
        p.innerText = item.contenu
        h3.innerText = item.titre
        h3.style.backgroundColor = "red"
        h3.classList = "text-center"

        

        
    })
  }
}
request.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles')
request.send()
         