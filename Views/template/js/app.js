/* LOADER */
window.onload = () => {
    setTimeout( () => {
        let loader = document.querySelector('.loading');
        setInterval(function() {
            if (loader.style.opacity < 0){
                clearInterval();
                loader.style.visibility = 'hidden';
            } else {
                loader.style.opacity-= 0.1;
            }
        }, 200);
    }, 400);
}; 

/* Eliminar utilizando Sweet Alert */
function eliminar(){
    new swal({
        title: '¿Está seguro que desea eliminar el registro?',
        text: "Su acción no se puede revertir.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Eliminado!',
                'Se elimino el registro',
                'success'
            )
        }
    });
}
