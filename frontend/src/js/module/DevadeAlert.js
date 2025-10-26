export default class DevadeAlert {
    /**
     * Настройки
     * */
    static settings = {
        speedOpen: 50,
        speedClose: 250,
        activeClass: 'is-active',
        visibleClass: 'is-visible',
        selectorClose: 'data-devade-alert-modal-close',
    };

    /**
     * Входные параметры
     * */
    static data = {
        title: "Title",
        text: "Text",
        buttons: [
            {
                text: "Закрыть",
                action: "close",
                url: false,
            }
        ]
    };

    /**
     * DOM ноды
     * */
    static modal;
    static closeBtns;

    /**
     * Инициализация
     * */
    static show(data = {}) {
        this.data = data;
        this.createModal();
        this.openModal();
        this.closeBtns = this.modal.querySelectorAll(`[${this.settings.selectorClose}]`);
        this.addEventListeners();
    }

    /**
     * Создаем обработчики событий
     * */
    static addEventListeners() {
        let that = this;

        that.closeBtns.forEach((btn)=>{
            btn.addEventListener('click', () => that.closeModal());
        })

        document.addEventListener('keydown', (event) => that.keydownHandler(event));
    }

    /**
     * Добавляем html модалки
     * */
    static createModal() {
        let buttonsHtml = "";
        this.data.buttons.forEach((btn) => {
            if(btn.action) {
                switch (btn.action) {
                    case "close":
                        buttonsHtml += `<button class='devade-alert-modal__btn devade-alert-modal__btn_close' ${this.settings.selectorClose}>${btn.text}</button>`;
                        break;
                }
            }
            else if (btn.url) {
                buttonsHtml += `<a href="${btn.url}" class='devade-alert-modal__btn'>${btn.text}</a>`;
            }
        });

        let modalHtml = `<div class="devade-alert-modal__overlay" ${this.settings.selectorClose} tabindex="-1"></div>
          <div class="devade-alert-modal__wrapper">
            <div class="devade-alert-modal__header">
              <div class="devade-alert-modal__title">
                ${this.data.title}
              </div>
              <button class="devade-alert-modal__close" ${this.settings.selectorClose} aria-label="Close devade-alert-modal"></button>
            </div>
            <div class="devade-alert-modal__content">
              ${this.data.text}
            </div>
            <div class="devade-alert-modal__btns">
              ${buttonsHtml}
            </div>
          </div>`;

        this.modal = document.createElement("section");
        this.modal.className = "devade-alert-modal";
        this.modal.insertAdjacentHTML("afterbegin", modalHtml);

        document.body.append(this.modal);
    }

    /**
     * Открываем модалку
     * */
    static openModal() {
        let that = this;
        // Устанавливаем доступность модалки
        that.modal.classList.add(that.settings.activeClass);
        // Блокируем прокрутку на странице
        document.documentElement.style.overflow = 'hidden';
        // Делаем модалку видимой
        setTimeout(function () {
            that.modal.classList.add(that.settings.visibleClass);
        }, that.settings.speedOpen);
    }

    /**
     * Закрываем модалку
     * */
    static closeModal(context = this) {
        let that = this;
        // Делаем модалку невидимой
        that.modal.classList.remove(that.settings.visibleClass);
        // Разблокируем body
        document.documentElement.style.overflow = '';

        setTimeout(function () {
            // Скрываем модалку
            that.modal.classList.remove(that.settings.activeClass);
        }, that.settings.speedClose);

        that.modal.remove();
    };

    /**
     * Обработчик Esc
     * */
    static keydownHandler(event) {
        let that = this;
        if (event.key === 'Escape' || event.keyCode === 27) {
            that.closeModal();
        }
    };
}
