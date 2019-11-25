const path = require("path");
const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = () => ({
  output: {
    publicPath: '/wp-content/themes/fenchurch-barbers/public/js/'
  },
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader'
        ]
      }
    ]
  },
  plugins: [
    new PurgecssPlugin({
      paths: glob.sync([
        path.join(__dirname, '*.php')
      ]),
    }),
    new MiniCssExtractPlugin({
      filename: '../css/[name].css'
    }),
    new OptimizeCssAssetsPlugin({})
  ]
});
