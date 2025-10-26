export class ScrollMenu{
    constructor(options) {
        this.menu = document.querySelector(options.menu);
        this.start = document.querySelector(options.start);

        this.initElement(this.start, this.menu);
        this.handlerElement(this.start, this.menu);
    }

    handlerElement(block, element){
        let that = this;
        window.addEventListener('scroll', ()=>{
            that.changeClass(block, element);
        });
    }

    initElement(block, element){
        let that = this;
        that.changeClass(block, element);
    }

    changeClass(block, element){
        let that = this;
        const heightBlock = block.offsetHeight;
        const offsetBlock = that.offset(block).top;
        scrollY > offsetBlock ? element.classList.add('scroll') : element.classList.remove('scroll');
    }

    offset(el) {
        const rect = el.getBoundingClientRect();
        const scrollLeft = window.scrollX || document.documentElement.scrollLeft;
        const scrollTop = window.scrollY || document.documentElement.scrollTo;

        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
    }
}
export class ScrollMenuSubMenuAndButton extends ScrollMenu{
    constructor(options){
        super(options);
        this.subMenus = document.querySelectorAll(options.subMenus);
        this.menuButtons = document.querySelectorAll(options.menuButtons);

        console.log(this.subMenus, this.menuButtons)
    }

    addClassHideSubMenu(menus){
        if (!!menus){
            menus.forEach(menu =>{
                menu.classList.add('hide');
            });
        }
    }

    removeClassActiveButtons(buttons){
        if (!!buttons){
            buttons.forEach(button =>{
                button.classList.remove('active');
            });
        }
    }

    changeClass(block, element){
        let that = this;
        const heightBlock = block.offsetHeight;
        const offsetBlock = that.offset(block).top;
        if(scrollY > offsetBlock){
            element.classList.add('scroll');
            !!this.subMenus ? that.addClassHideSubMenu(this.subMenus) : false;
            !!this.menuButtons ? that.removeClassActiveButtons(this.menuButtons) : false;
        }else{
            element.classList.remove('scroll');
        }
    }
}