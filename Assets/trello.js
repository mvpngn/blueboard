KB.on('dom.ready', ()=>{

    const edit = document.querySelector('.task-board-header a.js-modal-large');
    console.log(edit);
    if(edit.length > 0){
        edit.addEventListener('click', () => {
            setTimeout(() => {
                document.body.classList.toggle('edit');
                console.log('edit');
            }, 1000);
        });
    }

})
