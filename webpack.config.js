const Encore = require('@symfony/webpack-encore')

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('style', './assets/scss/app.scss')
    .enableSassLoader()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .autoProvidejQuery()


module.exports = Encore.getWebpackConfig()