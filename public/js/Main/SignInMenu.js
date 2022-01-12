
export default class SignIn {
    constructor() {
        this.signInButton = document.getElementsByClassName('registration-btn')
        this.signInSection = document.querySelectorAll('.sign-in-section')

        console.log(this.signInSection);

        this.signInButton[0].addEventListener('click', () => {
            if (this.signInButton[0].classList.contains('active-btn')) {
                this.setSignUp()
            } else {
                this.setSignIn()
            }
        })
    }

    setSignIn() {
        this.signInSection[0].classList.remove('hidden')
        this.signInSection[1].classList.add('hidden')
        this.signInButton[0].innerText = 'Sign Up'

        this.signInButton[0].classList.add('active-btn')
    }

    setSignUp() {
        this.signInSection[0].classList.add('hidden')
        this.signInSection[1].classList.remove('hidden')
        this.signInButton[0].innerText = 'Sign In'

        this.signInButton[0].classList.remove('active-btn')
    }
}
