export class InitSizeVar{
    constructor(header, options) {
        this.header = document.querySelector(header);
        this.headerSize = !!this.header ? this.header.clientHeight : 100;
        this.spaceNameClass = !!options.spaceNameClass ? options.spaceNameClass : [];
        // this.elements = !!document.querySelectorAll(options.elements) ? document.querySelectorAll(options.elements) : [];
        if(!!this.header && !!this.spaceNameClass){
            this.updateHeaderSize();
            window.addEventListener('resize', () => this.updateHeaderSize());
        }
    }

    getHeaderSize() {
        return this.header ? this.header.clientHeight : 100;
    }

    updateHeaderSize() {
        this.headerSize = this.getHeaderSize();
        this.initSizeVar(this.spaceNameClass, this.headerSize);
    }

    initSizeVar(spaceNameClass, headerSize){
        if(Array.isArray(spaceNameClass)){

            spaceNameClass.forEach(spaceClass =>{

                let selector = document.querySelector(spaceClass);

                !!selector ? selector.style.setProperty('--header-size', `${headerSize}px`) : '';
            });
        }else{
            let selectorSingle = document.querySelector(spaceNameClass);
            if(selectorSingle) selectorSingle.style.setProperty('--header-size', `${headerSize}px`);
        }
    }
}