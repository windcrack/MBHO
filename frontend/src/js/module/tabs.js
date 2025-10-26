const defaultOptionsTab = {
    tabsInit: document.querySelector('.tabs'),
    contentInit: document.querySelector('.content'),
    addActiveClassFirst: false,
}

export class Tabs {
    constructor(options = {}) {
        options = Object.assign({}, defaultOptionsTab, options);
        this.tabsInit = document.querySelector(options.tabsInit);
        this.contentInit = document.querySelector(options.contentInit);
        this.addActiveClassFirst = options.addActiveClassFirst;
        if (!!this.tabsInit && !!this.tabsInit){
            this.tabs = this.tabsInit.querySelectorAll(`[data-tab-name]`);
            this.tabContent = this.contentInit.querySelectorAll(`[data-content-name]`);
        }
        console.log(this.contentInit, this.contentInit);

        this.init();
    }

    set addActiveClass(newValue){
        this.addActiveClassFirst = newValue
    }

    init() {
        let that = this;

        if(!!that.tabs && !!that.tabContent){
            let contentBody = that.contentInit;

            that.tabs.forEach((tab, index) => {
                if(index === 0 && that.addActiveClassFirst){
                    tab.classList.add('active');
                }
                tab.addEventListener('click', () => {
                    this.toggleTabs(tab, contentBody);
                });
            });
            that.tabContent.forEach((content, index) => {
                if (index > 0) {
                    content.classList.add('hide');
                }

            });

            // this.contentInit.querySelectorAll('.tabs').forEach(innerTabs => {
            //     const innerContent = innerTabs.closest('.content') || innerTabs.parentElement.querySelector('.content');
            //     if (innerTabs && innerContent) {
            //         new Tabs({
            //             tabsInit: innerTabs,
            //             contentInit: innerContent,
            //             addActiveClassFirst: true,
            //         });
            //     }
            // });
        }

    }
    toggleTabs(selectedTab, contentBody) {
        const curTab = selectedTab.getAttribute('data-tab-name') ?? '';
        this.tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        selectedTab.classList.add('active');
        this.tabContent.forEach(content => {
            content.classList.add('hide');
        });
        // curTab !== 'search-goods' ? contentBody?.classList.add('is-goods') : contentBody?.classList.remove('is-goods');
        document.querySelector(`[data-content-name="${curTab}"`).classList.remove('hide');
    }
}