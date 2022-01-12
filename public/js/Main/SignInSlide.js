
export default class Slide {
    constructor() {
        this.nextButton = document.querySelectorAll('.next')
        this.backButton = document.querySelectorAll('.back')
        this.tempContainer = document.querySelectorAll('.temp-container')
        this.circle = document.querySelectorAll('.circle')


        for (const button of this.nextButton) {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                this.nextSlide()
            })
        }

        for (const button of this.backButton) {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                this.previousSlide()
            })
        }
    }

    nextSlide() {
        const current = this.checkCurrentPage()

        this.circle[current].classList.remove('active')
        this.circle[current + 1].classList.add('active')

        this.tempContainer[current].classList.add('hidden')
        this.tempContainer[current + 1].classList.remove('hidden')
    }

    previousSlide() {
        const current = this.checkCurrentPage()

        this.circle[current].classList.remove('active')
        this.circle[current - 1].classList.add('active')

        this.tempContainer[current].classList.add('hidden')
        this.tempContainer[current - 1].classList.remove('hidden')
    }

    checkCurrentPage() {
        for (let i = 0; i < this.tempContainer.length; i++) {
            if (!this.tempContainer[i].classList.contains('hidden')) {
                return i
            }
        }
    }
}
