var path = require('path');
var webpack = require('webpack');

var loaders = [
  {
    "test": /\.js?$/,
    "exclude": /(node_modules|bower_components)/,
    "loader": "babel-loader",
    "query": {
      "presets": ['react', 'es2015', "stage-0"]
    }
  }
];

module.exports = {
  devtool: 'eval-source-map',
  entry: path.resolve('src', 'client.js'),
  output: {
    path: path.resolve('build'),
    filename: 'app.js',
    publicPath: '/'
  },
  module: {
    loaders: loaders
  }
};