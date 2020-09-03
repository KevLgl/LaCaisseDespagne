let request = new XMLHttpRequest()
let articleContainer = document.getElementById("article-container")


request.onreadystatechange = function () {
  if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    let items = JSON.parse(this.responseText)
    items.forEach((item) =>{
        let article = document.createElement("article");// creer un article
        article.className = "card" // on met la classe card a l'article     
        let h3 = document.createElement("h3"); // creer un h3  
        let p = document.createElement("p") // creer un p 
        articleContainer.appendChild(article);// article enfant de articleContainer
        article.appendChild(h3); // h3 enfant de article    
        article.appendChild(p); // p enfant de l'article
        p.innerText = item.contenu// rempli p avec item.contenu(du json)
        h3.innerText = item.titre// rempli h3 avec item.titre(du json)
        h3.classList = "text-center bg-light"// donner des classes au h3

        

        
    })
  }
}
request.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles')
request.send()
         