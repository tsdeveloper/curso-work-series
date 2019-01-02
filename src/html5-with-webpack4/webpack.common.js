const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const path = require('path');
const webpack = require('webpack');
const copyWebpackPlugin = require('copy-webpack-plugin');
const htmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  entry: {
    changeme: './src/js/index.js',
  },
  externals: {
    jquery: 'jQuery',
  },
  resolve: {
    extensions: ['.ts', '.tsx', '.js', '.scss', '.sass']
  },
  module: {
    rules: [{
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      },
      // {
      //   test: /\.(jpg|gif|png|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
      //   use: [{
      //     loader: 'file-loader',
      //     options: {
      //       name: '[name].[ext]',
      //       outputPath: 'img/',
      //       publicPath: './. ',
      //     },
      //   }, ],
      // },
      {
        test: /\.(png|jpg|gif|svg)$/,
        exclude: [
          path.resolve(__dirname, './node_modules'),
        ],
        use: {
          loader: 'file-loader',
          options: {
            name: '[name]-[hash].[ext]',
            outputPath: 'img/',
            publicPath: '/dist',
          },
        },
      },
      // {
      //   test: /\.(png|jpg|svg)$/,
      //   include: path.join(__dirname, 'img'),
      //   loader: 'url-loader?limit=30000&name=img/[name].[ext]'
      // }, // inline base64 URLs for <=30k images, direct URLs for the rest
      {
        test: /\.(ico)$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[name]-[hash].[ext]',
            outputPath: 'icons/',
            publicPath: '/dist',
          },
        },
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'file-loader',
        options: {
          name: '[name]-[hash].[ext]',
          outputPath: 'fonts/',
          publicPath: '/dist',
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

    new webpack.HotModuleReplacementPlugin(),
    new webpack.NamedModulesPlugin(),
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
      to: path.resolve(__dirname, 'dist/media/img'),
      ignore: []
    }]),
    new copyWebpackPlugin([{
      from: path.resolve(__dirname, 'src/midias'),
      to: path.resolve(__dirname, 'dist/midias/video')
    }]),
    new copyWebpackPlugin([{
      from: path.resolve(__dirname, 'src/icons'),
      to: path.resolve(__dirname, 'dist/icons')
    }]),
    new htmlWebpackPlugin({
      // hash: true,
      // title: 'My Awesome application',
      // myPageHeader: 'Hello World',
      template: './src/index.php',
      filename: './index.php' //relative to root of the application
    }),
  ],
};