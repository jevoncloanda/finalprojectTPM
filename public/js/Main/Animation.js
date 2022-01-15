
export default class Animation {
    constructor() {
        this.animation = document.querySelector('.animated-section')
        this.medparImage = document.querySelectorAll('.media-partner img')

        this.bool = false
        this.setFileData()

        this.image = new Image()
        this.pageObject = []

        this.page1Object = Object(this.file.page1)
        this.page2Object = Object(this.file.page2)

        this.pageObject.push(this.page1Object, this.page2Object)


        // for (const object of this.pageObject) {
        //     for (const image of Object.keys(object)) {
        //         this.image.src = object[image]
        //         console.log(this.image)
        //     }
        // }

        this.setAnimation()
    }

    setAnimation() {
        this.animation.addEventListener('animationiteration', () => {
            this.setStatus()
            // console.log(this.bool);
        })
    }

    setStatus() {
        if (this.bool) {
            this.setImage(this.page1Object)
            this.bool = false
        } else {
            this.setImage(this.page2Object)
            this.bool = true
        }
    }

    setFileData() {
        this.file = {
            page1: {
                1: '../assets/mediaPartner/page1/medpar1.png',
                2: '../assets/mediaPartner/page1/medpar2.png',
                3: '../assets/mediaPartner/page1/medpar3.png',
                4: '../assets/mediaPartner/page1/medpar4.png',
                5: '../assets/mediaPartner/page1/medpar5.png',
                6: '../assets/mediaPartner/page1/medpar6.png',
                7: '../assets/mediaPartner/page1/medpar7.png',
                8: '../assets/mediaPartner/page1/medpar8.png',
                9: '../assets/mediaPartner/page1/medpar9.png'
            },
            page2: {
                1: '../assets/mediaPartner/page2/medpar1.png',
                2: '../assets/mediaPartner/page2/medpar2.png',
                3: '../assets/mediaPartner/page2/medpar3.png',
                4: '../assets/mediaPartner/page2/medpar4.png',
                5: '../assets/mediaPartner/page2/medpar5.png',
                6: '../assets/mediaPartner/page2/medpar6.png',
                7: '../assets/mediaPartner/page2/medpar7.png',
                8: '../assets/mediaPartner/page2/medpar8.png',
                9: '../assets/mediaPartner/page2/medpar9.png'
            }
        }
    }

    setImage(items) {
        for (let i = 0; i < this.medparImage.length; i++) {
            this.medparImage[i].src = items[i + 1]
        }
    }
}