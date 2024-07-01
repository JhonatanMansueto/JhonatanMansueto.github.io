var delay = 5;

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function fecharFoto() {
    let fotoGrande = document.getElementById("fotoGrande");
    let i = 100;
    while (i>0) {
        fotoGrande.style.opacity = i*0.01;
        await sleep(delay);
        i=i-1;
    }
    fotoGrande.style.opacity = 0;
    fotoGrande.style.display = "none";
}

async function abrirFoto() {
    let fotoGrande = document.getElementById("fotoGrande");
    let i = 0;
    fotoGrande.style.display = "block";
    while (i<100) {
        fotoGrande.style.opacity = i*0.01;
        await sleep(delay);
        i=i+1;
    }
    fotoGrande.style.opacity = 1;
}

async function trocarImagem(id) {
    let foto = document.getElementById("foto");

    foto.src=id;
    abrirFoto();
}