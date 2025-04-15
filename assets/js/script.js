function avaliarForcaSenha(senha) {
    let forca = 0;

    if (senha.length >= 8) {
        forca++;
    }

    if (/\d/.test(senha)) {
        forca++;
    }

    if (/[a-z]/.test(senha) && /[A-Z]/.test(senha)) {
        forca++;
    }

    if (/[^a-zA-Z0-9]/.test(senha)) {
        forca++;
    }

    return forca;
}

function exibirForcaSenha() {
    const senha = document.getElementById('senha').value;
    const forcaSenha = document.getElementById('forca-senha');
    const barraForca = document.querySelector('.barra-forca > div');
    const forcaTexto = document.getElementById('forca-texto');
    const forca = avaliarForcaSenha(senha);

    if (forca === 0) {
        barraForca.className = '';  
        barraForca.style.width = '0%';
        forcaTexto.textContent = '';
    } else if (forca === 1) {
        barraForca.className = 'fraca';
        barraForca.style.width = '33%';
        forcaTexto.textContent = 'Senha Fraca';
        forcaTexto.style.color = 'red';
    } else if (forca === 2) {
        barraForca.className = 'media';
        barraForca.style.width = '66%';
        forcaTexto.textContent = 'Senha Média';
        forcaTexto.style.color = 'orange';
    } else {
        barraForca.className = 'forte';
        barraForca.style.width = '100%';
        forcaTexto.textContent = 'Senha Forte';
        forcaTexto.style.color = 'green';
    }
}

document.getElementById('senha').addEventListener('input', exibirForcaSenha);
