/* LOADER */
window.onload = () => {
    setTimeout( () => {
        let loader = document.querySelector('.loading');
        setInterval(function() {
            if (loader.style.opacity < 0) clearInterval();
            else loader.style.opacity-= 0.1;
        }, 200);
    }, 2000);
}; 

