var ExtractPlugin = require('extract-text-webpack-plugin');

module.exports = {
  context: __dirname + '/web',
  entry: './app/client.jsx',
  output: {
    path: __dirname + '/web/app/dist',
    filename: "client-bundle.js"
  },
  externals: {
    jquery: "jQuery"
  },
  resolve: {
    // you can now require('file') instead of require('file.coffee')
    extensions: ['', '.js', '.jsx']
  },
  module: {
    loaders: [
      {
          test: /\.jsx?$/,
          loader: 'babel',
          exclude: /node_modules/,
          include: __dirname + '/web/app',
          query: {
            presets: ['react', 'es2015']
          }
      },
      {
        test: /\.scss/,
        loader: ExtractPlugin.extract('style', 'css!sass'),
      },
      {
        test: /\.html/,
        loader: 'html',
      },
    ]
  }
};
