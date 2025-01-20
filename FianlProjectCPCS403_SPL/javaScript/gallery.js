function showMedia(thumbnail) {
    const mainImage = document.getElementById('main-image');
    const mainTitle = document.getElementById('main-title');
    const mainDescription = document.getElementById('main-description');

    if (thumbnail.dataset.video) {
        // Replace the image with a video iframe
        mainImage.outerHTML = `
            <iframe id="main-image" 
                    src="${thumbnail.dataset.video}" 
                    frameborder="0" 
                    allowfullscreen 
                    style="width: 100%; height: auto;"></iframe>`;
    } else {
        // Replace with an image
        if (mainImage.tagName === 'IFRAME') {
            mainImage.outerHTML = `<img id="main-image" src="${thumbnail.src}" alt="Preview">`;
        } else {
            mainImage.src = thumbnail.src;
        }
    }

    // Update title and description
    mainTitle.textContent = thumbnail.dataset.title;
    mainDescription.textContent = thumbnail.dataset.description;
}