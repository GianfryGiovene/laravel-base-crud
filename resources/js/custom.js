
const deleteBtn = document.getElementById('delete');

console.log

deleteBtn.addEventListener('click',function(e){
    const confirmAction = window.confirm('Sicuro di voler cancellare?');
    if (confirmAction){
        alert('Cancellato con successo')
    }else{
        e.preventDefault()
    }
})
