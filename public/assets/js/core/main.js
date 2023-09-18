function showModal(url){
    console.log()

    // Récupérer un élément HTML
var element = document.getElementById('modal');
console.log(element)

// Modifier l'attribut "src" de l'élément
element.setAttribute('src', ''+url);
element.hidden = false;
}
