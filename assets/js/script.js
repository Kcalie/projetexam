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

// verification Password Inscription
function verifPassword() {
    let password1 = document.getElementById('password1');
    let password2 = document.getElementById('password2');
    let iconElement1 = password1.previousElementSibling;
    let iconElement2 = password2.previousElementSibling;

    if (password1.value === password2.value) {
        if (password1.value.length >= 4) {
            iconElement1.style.color = 'green';
            iconElement2.style.color = 'green';
            return true;
        } else {
            iconElement1.style.color = 'red';
            iconElement2.style.color = 'red';
            document.getElementById('passwordError').textContent = "Mot de passe trop court";
            return false;
        }
    } else {
        iconElement1.style.color = 'red';
        iconElement2.style.color = 'red';
        return false;
    }
}

// verification du form de connexion
function verifForm() {
    var email = document.forms["inscription"]["email"].value;
    var password = document.forms["inscription"]["password"].value;
  
    if (email === "") {
      alert("Veuillez remplir l'e-mail.");
      return false;
    }
  
    if (password === "") {
      alert("Veuillez remplir le mot de passe.");
      return false;
    }
    return true;
  }

  // verification du form d'Inscription
  function verifForm2() {
    var email = document.forms["inscription"]["email"].value;
    var password1 = document.forms["inscription"]["password"].value;
    var password2 = document.forms["inscription"]["password2"].value;
  
    if (email === "") {
      alert("Veuillez remplir l'e-mail.");
      return false;
    }
  
    if (password1 === "") {
      alert("Veuillez remplir le mot de passe.");
      return false;
    }
  
    if (password2 === "") {
      alert("Veuillez répéter le mot de passe.");
      return false;
    }
  
    if (password1 !== password2) {
      alert("Les mots de passe ne correspondent pas.");
      return false;
    }
    return true;
  }
  
 // verification du form d'Inscription
  function verifForm3() {
    var nom = document.forms["contact"]["nom"].value;
    var email = document.forms["contact"]["email"].value;
    var message = document.forms["contact"]["message"].value;
  
    if (nom === "") {
      alert("Veuillez remplir votre nom.");
      return false;
    }
  
    if (email === "") {
      alert("Veuillez remplir votre e-mail.");
      return false;
    }
  
    if (message === "") {
      alert("Veuillez remplir le message.");
      return false;
    }
  
    if (!validateEmail(email)) {
      alert("Veuillez entrer une adresse e-mail valide.");
      return false;
    }
  
    return true;
  }
  
  
  
  

