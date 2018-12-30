const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.common.js');

module.exports = merge(common, {
    mode: 'development',
    devtool: 'inline-source-map',
    devServer: {
        contentBase: './public',
        host: 'http://work-series-html5.test',
        port: 8081,
        index: 'index.php'
    }
});