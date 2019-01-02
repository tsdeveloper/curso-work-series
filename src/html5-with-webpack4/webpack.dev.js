const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const merge = require('webpack-merge');
const WebpackNotifierPlugin = require('webpack-notifier');
const WriteFilePlugin = require('write-file-webpack-plugin');
const path = require('path');
const common = require('./webpack.common');

module.exports = merge(common, {
  mode: 'development',
  devtool: 'inline-source-map',
  devServer: {
    contentBase: './dist',
  },
  module: {
    rules: [

      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: ['css-loader', 'postcss-loader']
        })
      },
      {
        test: /\.s?[ac]ss$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [{
              loader: 'css-loader',
              options: {
                sourceMap: false
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: false
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: false
              }
            }
          ]
        })
      },
    ],
  },
  resolve: {
    alias: {
      // 'assets': path.resolve('src/img')
      'img': path.resolve('src/img/')
    },
  },
  plugins: [
    // https://www.npmjs.com/package/webpack-notifier
    new WebpackNotifierPlugin(),
    // https://github.com/gajus/write-file-webpack-plugin
    new WriteFilePlugin({
      useHashIndex: true,
    }),
    // https://github.com/Va1/browser-sync-webpack-plugin
    // new BrowserSyncPlugin(
    //   // BrowserSync options
    //   {
    //     host: 'localhost',
    //     port: 3000,
    //     proxy: 'http://localhost:8080/',
    //   }, {
    //     reload: false,
    //   },
    // ),
  ],
});