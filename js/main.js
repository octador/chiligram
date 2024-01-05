function deleteImage() {
    document.getElementById('imageInput').value = '';
}

    
    let addpseudo = document.getElementById('addpseudo');
    let addimage = document.getElementById('imageInput');
    
    

    let button = document.getElementById('submitButton');

    button.addEventListener('click', () => {
        if (addpseudo.value.trim() !== '' && addimage.value.trim() !== '') {
            // Les champs sont remplis, activer le bouton
            button.disabled = false;
        } else {
            // Au moins un des champs est vide, désactiver le bouton
            button.disabled = true;
        }
    });


