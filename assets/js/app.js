import 'bootstrap'
import {Howl} from 'howler'

const sound = new Howl({
    src: ['/sounds/forest.mp3']
})

$('.player-control').click(function () {
    if (sound.playing()) {
        sound.pause()
    }
    else {
        sound.play()
    }
    $(this).toggleClass('is-playing')
})
