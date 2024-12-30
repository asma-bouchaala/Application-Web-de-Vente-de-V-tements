function validateForm(event) {

    event.preventDefault();

    
    let name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    
    if (name === "") {
        name = prompt("Veuillez entrer votre nom :");
        if (name) {
            document.getElementById("name").value = name;  
        } else {
            alert("Le nom est requis pour soumettre le formulaire.");
            return;
        }
    }

    
    if (email === "" || message === "") {
        alert("Veuillez remplir tous les champs.");
        return;
    }

    
    const confirmation = confirm("Voulez-vous vraiment envoyer le formulaire ?");
    if (confirmation) {
        alert("Formulaire soumis avec succès !");
        
        document.getElementById("contactForm").reset();
    } else {
        alert("Envoi annulé.");
    }
}

const modal = document.getElementById("loginModal");


const addToCartButtons = document.querySelectorAll(".btn-success");


const closeModal = document.querySelector(".close");


addToCartButtons.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault(); 
        modal.style.display = "block"; 
    });
});


closeModal.addEventListener("click", function() {
    modal.style.display = "none"; 
});


window.addEventListener("click", function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

