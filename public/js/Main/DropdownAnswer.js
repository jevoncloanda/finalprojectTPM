
export default class Dropdown {
    constructor(item, answers, icon) {

        this.isOpen = item.classList.contains('hidden')
        this.answers = answers

        if (this.isOpen) {
            this.setDropDown(item, icon)
        } else {
            this.disposeDropDown(item, icon)
        }
    }

    setDropDown(item, icon) {
        this.closeOpenTab(icon)
        item.classList.remove('hidden')
        icon.style.transform = `rotate(90deg)`

        window.setTimeout(function(){
            item.style.opacity = 1;
        },80);
    }

    disposeDropDown(item, icon) {
        item.classList.add('hidden')
        item.style.opacity = 0;
        icon.style.transform = `rotate(0deg)`
    }

    closeOpenTab() {
        for (let answer of this.answers) {
            if (!answer.classList.contains('hidden')) {
                answer.classList.add('hidden')
                answer.style.opacity = 0
                const container = answer.closest('.question-container')
                const childContainer = container.children[0]
                const icon = childContainer.children[0]
            }
        }
    }
}
