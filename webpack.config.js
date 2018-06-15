const Encore = require('@symfony/webpack-encore')

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .addEntry('artwork', './assets/js/artwork.js')
    .addStyleEntry('fosuser', './assets/scss/fosuser.scss')
    .addStyleEntry('cartel', './assets/scss/cartel.scss')
    .addStyleEntry('tagpage', './assets/scss/_tagpage.scss')
    .addStyleEntry('style', './assets/scss/app.scss')
    .addStyleEntry('favorites', './assets/scss/favorites.scss')
    .enableSassLoader()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    // .autoProvidejQuery()


module.exports = Encore.getWebpackConfig()