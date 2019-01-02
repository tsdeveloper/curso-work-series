const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
// const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

const devMode = process.env.NODE_ENV !== 'production'


module.exports = {
  entry: './src/js/index.js',
  output: {
    filename: '[name].bundle.js',
    path: path.resolve(__dirname, 'dist')
  },
  // devtool: 'source-map',
  module: {
    rules: [


      // {
      //     test: /\.css$/,
      //     use: [
      //         process.env.NODE_ENV !== 'production' ? 'style-loader' : MiniCssExtractPlugin.loader,
      //         {
      //             loader: 'style-loader',
      //             options: {
      //                 sourceMap: true
      //             }
      //         },
      //         {
      //             loader: 'css-loader',
      //             options: {
      //                 url: true,
      //                 sourceMap: true
      //             }
      //         },
      //         {
      //             loader: 'postcss-loader',
      //             options: {
      //                 sourceMap: true
      //             }
      //         },
      //     ]
      // },
      // {
      //     test: /\.s?[ac]ss$/,
      //     use: [
      //         process.env.NODE_ENV !== 'production' ? 'style-loader' : MiniCssExtractPlugin.loader,
      //         {
      //             loader: 'style-loader',
      //             options: {
      //                 sourceMap: true
      //             }
      //         },
      //         {
      //             loader: 'css-loader',
      //             options: {
      //                 url: true,
      //                 sourceMap: true
      //             }
      //         },
      //         {
      //             loader: 'postcss-loader',
      //             options: {
      //                 sourceMap: true
      //             }
      //         },
      //         {
      //             loader: 'sass-loader',
      //             options: {
      //                 url: true,
      //                 sourceMap: true
      //             }
      //         }
      //     ],
      // },

      // {
      //     test: /\.sass$/,
      //     use: ExtractTextPlugin.extract({
      //         fallback: 'style-loader',
      //         use: ['css-loader', 'postcss-loader', 'sass-loader']
      //     })

      // },
      // {
      //     test: /\.(jpe?g|png|gif|svg|mp4)$/i,
      //     use: [{
      //         loader: 'file-loader',
      //         options: {},
      //     }, ]
      // },
      // Copy static assets over with file-loader
      {
        test: /\.(ico)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'file-loader',
        options: {
          name: 'icons/[name].[ext]'
        },
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'file-loader',
        options: {
          name: 'fonts/[name].[ext]'
        },
      },
      {
        test: /\.(jpg|gif|png|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'file-loader',
        options: {
          name: 'img/[name].[ext]'
        },
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      }

    ]
  },

  stats: {
    // Add warnings
    warnings: false,

    // Filter warnings to be shown (since webpack 2.4.0),
    // can be a String, Regexp, a function getting the warning and returning a boolean
    // or an Array of a combination of the above. First match wins.

  },
  resolve: {
    alias: {
      'img': path.resolve('src/img/')
    },
  },
  plugins: [
    new CleanWebpackPlugin([path.resolve(__dirname, 'dist')]),

    new HtmlWebpackPlugin({
      // hash: true,
      // title: 'My Awesome application',
      // myPageHeader: 'Hello World',
      template: './src/index.php',
      filename: './index.php' //relative to root of the application
    }),
    // new MiniCssExtractPlugin({
    //     // Options similar to the same options in webpackOptions.output
    //     // both options are optional
    //     filename: '[name].css',
    //     chunkFilename: '[id].css'
    // }),

    new ExtractTextPlugin("styles.css"),

    // new CopyWebpackPlugin([{
    //   from: path.resolve(__dirname, 'src/img'),
    //   to: path.resolve(__dirname, 'dist/img'),
    //   ignore: []
    // }]),
    // new CopyWebpackPlugin([{
    //   from: path.resolve(__dirname, 'src/assets/midias'),
    //   to: path.resolve(__dirname, 'public/midias')
    // }]),
  ],

};