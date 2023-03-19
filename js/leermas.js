let verBtn = document.getElementById('verBtn');
let verText = document.getElementById('verText');
let verText2 = document.getElementById('verText2');

verBtn.addEventListener('click',toggleText);

function toggleText(){
    verText.classList.toggle('show');
    verText2.classList.toggle('show');
    if(verText.classList.contains('show')){
        verBtn.innerHTML='Leer menos'
    }else{
        verBtn.innerHTML='Leer mas'
    }
}