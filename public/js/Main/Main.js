
import Dropdown from './DropdownAnswer.js'
import UploadFile from './UploadFile.js'

export default class Main {
    constructor() {
        this.upload = new UploadFile()

        this.icons = document.querySelectorAll('.icon-container')
        this.answers = document.querySelectorAll('.answer-container')
        this.icons_shape = document.querySelectorAll('.faq-animated-icon')

        for (const icon of this.icons) {
            if (icon.classList.contains('faq-icon-container')) {
                icon.addEventListener('click', () => {
                    let iconId = parseInt(icon.id)
                    this.dropdown = new Dropdown(this.answers[iconId], this.answers, this.icons_shape[iconId])
                })
            }
        }
    }
}
