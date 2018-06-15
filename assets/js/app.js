import 'bootstrap'
import 'popper.js'
import {Howl} from 'howler'
import * as Vibrant from 'node-vibrant'
import anime from 'animejs'


$('.grid').imagesLoaded(() => {
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 200,
        fitWidth: true
    })
})


class ArtColor {
    constructor(hex, duration = 5000) {
        this.duration = duration
        this.value = hex
    }
}

class Atmosphere {
    constructor() {
        this.$playerControl = $('.player-control')

        this.$playerControl.click(() => {
            this.toggle()
        })

        const SrcSound = this.$playerControl.data('file');

        this.sound = new Howl({
            src: [SrcSound]
        })

        const src = $('.vibrant').attr('src')
        this.colors = [new ArtColor('#000', 500)]
        Vibrant.from(src).getPalette().then(palette => {
            for (const key in palette) {
                this.colors.push(new ArtColor(palette[key].getHex()))
            }
            this.ready()
        })
    }

    ready() {
        this.setUpAnime()
    }

    setUpAnime() {
        this.anime = anime({
            targets: document.body,
            backgroundColor: this.colors,
            loop: true,
            autoplay: false

        })
    }

    play() {
        this.anime.play()
        this.sound.play()
    }

    stop() {
        this.sound.pause()
        this.anime.restart()
        this.anime.pause()
    }
    toggle() {
        this.$playerControl.toggleClass('is-playing')
        if (this.sound.playing()) {
            this.stop()
        } else {
            this.play()
        }
    }
}

new Atmosphere()