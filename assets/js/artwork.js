import {Howl} from 'howler'
import anime from 'animejs'
import * as Vibrant from 'node-vibrant'

class ArtColor {
    constructor(hex, duration = 5000) {
        this.duration = duration
        this.value = hex
    }
}


class Atmosphere {
    constructor() {
        this.$playerControl = $('.player-control')
        if(!this.$playerControl.length)
            return;
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
                if(palette[key])
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
            targets: document.querySelector('.artwork-bg-anim'),
            backgroundColor: this.colors,
            opacity:[0, 0.5],
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