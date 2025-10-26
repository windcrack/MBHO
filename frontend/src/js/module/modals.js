export class ModalManager {
    constructor(options) {
        this.modals = [];
        this.close = options.close || '.modal-close';
        this.bodyModal = options.bodyModal || '.modal-body';

        this.initModals();
    }

    initModals() {
        let that = this;
        const modalOpenButtons = document.querySelectorAll('[data-modal-target]');


        modalOpenButtons.forEach((openBtn) => {
            const target = openBtn.dataset.modalTarget;
            console.log(target);

            if (!that.modals.includes(target)) that.modals.push(target);

            if (!!target) {
                let modal = document.querySelector(`[data-modal-name="${target}"]`);

                if (!!modal) {
                    if (!that.modals.includes(target)) that.modals.push(target);

                    openBtn.addEventListener('click', (e) => {

                        e.preventDefault();
                        that.toggleModal(modal);
                    });
                }
            }
        });

        that.modals.forEach(modalName => {
            let modal = document.querySelector(`[data-modal-name='${modalName}']`);

            that.closeModalHandlers(modal);
        });
    }

    closeModalHandlers(modal) {
        let that = this;
        const modalCloseBtn = modal.querySelector(that.close);

        if (modalCloseBtn) {
            modalCloseBtn.addEventListener('click', () => that.toggleModal(modal));
        }

        modal.addEventListener('click', (e) => {
            const body = modal.querySelector(that.bodyModal);
            const isClickOutside = body && !e.composedPath().includes(body);
            if (isClickOutside) that.toggleModal(modal);
        });

        document.addEventListener('keydown', (e) => {
            if (e.code === 'Escape') that.closeModal(modal);
        });
    }

    toggleModal(modal) {
        let that = this;
        modal.classList.toggle('hide');
        that.lockBody(modal);
    }

    lockBody(modal) {
        document.querySelector('body').classList.toggle('body-block', !modal.classList.contains('hide'));
    }

    closeModal(modal) {
        let that = this;
        modal.classList.add('hide');
        that.lockBody(modal); // Ensure body lock is removed
    }
}
