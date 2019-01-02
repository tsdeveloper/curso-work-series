const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const path = require('path');
const webpack = require('webpack');
const copyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: {
    changeme: './src/js/index.js',
  },
  externals: {
    jquery: 'jQuery',
  },
  module: {
    rules: [{
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [{
          loader: require.resolve("file-loader"),
          options: {
            name: '[name].[ext]',
            outputPath: 'img/',
            publicPath: './. ',
          },
        }, ],
      },
      {
        test: /\.(ico)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'file-loader',
        options: {
          name: '[name].[ext]',
          outputPath: 'icons/',
          publicPath: './. ',
        },
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'file-loader',
        options: {
          name: '[name].[ext]',
          outputPath: 'fonts/',
          publicPath: './. ',
        },
      },
    ],
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'dist'),
  },
  plugins: [
    // https://github.com/johnagan/clean-webpack-plugin
    new CleanWebpackPlugin(['dist']),
    // https://github.com/webpack-contrib/extract-text-webpack-plugin
    new ExtractTextPlugin('changeme.css'),
    // Set jQuery in global scope
    // https://webpack.js.org/plugins/provide-plugin/
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
    }),
    new copyWebpackPlugin([{
      from: path.resolve(__dirname, 'src/img'),
      to: path.resolve(__dirname, 'dist/img'),
      ignore: []
    }]),
    new copyWebpackPlugin([{
      from: path.resolve(__dirname, 'src/midias'),
      to: path.resolve(__dirname, 'dist/midias')
    }]),
    new copyWebpackPlugin([{
      from: path.resolve(__dirname, 'src/icons'),
      to: path.resolve(__dirname, 'dist/icons')
    }]),
  ],
};