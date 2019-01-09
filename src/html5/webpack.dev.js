const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.common.js');

module.exports = merge(common, {
    mode: 'development',
    devtool: 'inline-source-map',
    devServer: {
        // contentBase: '/',
        // host: 'work-series-html5.test',
        // port: 8081,
        index: 'index.php',
        // inline: true,
        // hot: true,
        hot: true,
        inline: true,
        contentBase: 'public',
        proxy: {
            '*': {
                target: 'http://work-series-html5.test:8081',
                secure: false,
                changeOrigin: true
            }
        },
        historyApiFallback: true,
        publicPath: './',
        // proxy: {
        //     '*': 'http://work-series-html5.test:8081'
        // }
    }
});