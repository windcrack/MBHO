export function showInfo(){
    const infoBlocks = document.querySelectorAll('.js-icon-info-text');

    infoBlocks.forEach(block =>{
        block.addEventListener('click', () =>{
            // console.log('active', block.classList.contains('active') );
            const isActive = block.classList.contains('active');
            infoBlocks.forEach(block => block.classList.remove('active'));
            // if(!block.classList.contains('active')) block.classList.add('active');
            if(!isActive) block.classList.toggle('active');
        });
    })
}