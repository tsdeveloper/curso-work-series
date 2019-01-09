 const path = require('path');
 const CleanWebpackPlugin = require('clean-webpack-plugin');
 const HtmlWebpackPlugin = require('html-webpack-plugin');
 const MiniCssExtractPlugin = require('mini-css-extract-plugin');
 const webpack = require('webpack');


 module.exports = {
     entry: {
         app: './src/assets/js/index.js'
     },
     output: {
         filename: '[name].bundle.js',
         path: path.resolve(__dirname, 'public'),
         publicPath: '/'
     },
     module: {
         rules: [{
                 test: /\.js$/,
                 exclude: /node_modules/,
                 use: {
                     loader: 'babel-loader'
                 }
             },
             {
                 test: /\.css$/,
                 use: [
                     process.env.NODE_ENV !== 'production' ? 'style-loader' : MiniCssExtractPlugin.loader,
                     {
                         loader: 'style-loader',
                         options: {
                             sourceMap: true
                         }
                     },
                     {
                         loader: 'css-loader',
                         options: {
                             url: true,
                             sourceMap: true
                         }
                     },
                     {
                         loader: 'postcss-loader',
                         options: {
                             sourceMap: true
                         }
                     },
                 ]
             },
             {
                 test: /\.s?[ac]ss$/,
                 use: [
                     process.env.NODE_ENV !== 'production' ? 'style-loader' : MiniCssExtractPlugin.loader,
                     {
                         loader: 'style-loader',
                         options: {
                             sourceMap: true
                         }
                     },
                     {
                         loader: 'css-loader',
                         options: {
                             url: true,
                             sourceMap: true
                         }
                     },
                     {
                         loader: 'postcss-loader',
                         options: {
                             sourceMap: true
                         }
                     },
                     {
                         loader: 'sass-loader',
                         options: {
                             url: true,
                             sourceMap: true
                         }
                     }
                 ],
             },
             {
                 test: /\.(jpe?g|png|gif|svg|mp4)$/i,
                 use: [{
                     loader: 'file-loader',
                     options: {},
                 }, ]
             },

         ]
     },
     plugins: [
         new CleanWebpackPlugin(path.resolve(__dirname, 'public')),
         new MiniCssExtractPlugin({
            filename: "[name].css",
            chunkFilename: "[id].css"
        }),
         new HtmlWebpackPlugin({
             title: 'My Awesome application',
             myPageHeader: 'Hello World',
             template: './index.php',
             filename: './index.php'
         }),

         new webpack.HotModuleReplacementPlugin(),
         new webpack.NamedModulesPlugin(),
     ],

     devtool: 'inline-source-map',
     stats: {
         colors: true,
         reasons: true
     },
     resolve: {
         extensions: ['.ts', '.tsx', '.js', '.scss']
     }

 };