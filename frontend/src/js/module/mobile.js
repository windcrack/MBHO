// Открытие и закрытие мобильного меню
export class ToggleMenuMob{
    constructor(options) {
        this.mobHeader = document.querySelector(options.mobHeader);
        this.buttonBody = document.querySelector(options.buttonBody);
        this.button = document.querySelector(options.button);

        this.handlerMenu(this.mobHeader, this.buttonBody, this.button);
    }

    handlerMenu(mobHeader, button, buttonBody){
        if(!!mobHeader && !!button && !!buttonBody){
            button.addEventListener('click', () =>{
                mobHeader.classList.toggle('hide');
                buttonBody.classList.toggle('close');
            })
        }
    }
}
/* Старый вариант */
export function toggleMenuMob(){
    const mobHeader = document.querySelector('.js-mob-header');
    const buttonBody = document.querySelector('.js-burger');
    const button = document.querySelector('.js-burger-btn');
    if(!!mobHeader && !!button && !!buttonBody){
        button.addEventListener('click', () =>{
            mobHeader.classList.toggle('hide');
            buttonBody.classList.toggle('close');
        })
    }
}
//---------------------