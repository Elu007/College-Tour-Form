let btnClear = document.getElementById('reset');
let inputs = document.querySelectorAll('input');


btnClear.addEventListener('click', ()=>{
    inputs.forEach(input => input.value = '');
    document.getElementById('gender').value = '';
    document.getElementById('desc').value = '';
    window.history.back();
});