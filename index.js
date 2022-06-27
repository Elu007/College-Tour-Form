let btnClear = document.getElementById('reset');
let inputs = document.querySelectorAll('input');
let pay = document.querySelectorAll('btn-pay');


btnClear.addEventListener('click', ()=>{
    inputs.forEach(input => input.value = '');
    document.getElementById('gender').value = '';
    document.getElementById('desc').value = '';
    window.history.back();
});