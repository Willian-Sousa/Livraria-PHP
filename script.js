var a = window.document.getElementById('btn');
a.addEventListener('mouseenter', entrar);
a.addEventListener('mouseout', sair);

function entrar(){
    a.style.background = '#40372C';
}
function sair(){
    a.style.background = '#F2F2F2';
}
