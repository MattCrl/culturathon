import 'bootstrap'
import 'popper.js'


$('.grid').imagesLoaded(() => {
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 200,
        fitWidth: true
    })
})

