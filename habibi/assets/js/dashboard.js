function sendInvitation() {
    const email = document.getElementById('email').value;

    // Ici, vous pouvez ajouter la logique pour envoyer l'invitation par courriel
    // Cela pourrait inclure une requête AJAX vers un backend pour gérer l'envoi réel
    
    // Exemple simple d'affichage d'un message de confirmation
    const responseMessage = document.getElementById('responseMessage');
    responseMessage.textContent = `Invitation envoyée avec succès à : ${email}`;
}

