// Menu Deroulant
let dropdown = document.querySelector('.dropdown');
dropdown.onclick = function()
{
    dropdown.classList.toggle('active');
}

// verification email connexion est inscription
function verifEmail(element) {
    let regex = /^[a-z0-9.-]{1,}@+[a-z0-9.-]{4,}\.[a-z]{2,}$/i;
    let iconElement = element.previousElementSibling; // Récupère l'élément <i>

    if (regex.test(element.value)) {
        // regex valide
        iconElement.style.color = 'green'; // Change la couleur de l'icône en vert
    } else {
        // regex non valide
        iconElement.style.color = 'red'; 
    }
}
// verification email contact
function verifEmailContact(element) {
    let regex = /^[a-z0-9.-]{1,}@+[a-z0-9.-]{4,}\.[a-z]{2,}$/i;

    if (regex.test(element.value)) {
        // La regex est valide
        element.style.background = 'green';
        
    } else {
        // La regex ne correspond pas
        element.style.background = 'red';
        
    }
}
