const path = require('path');
const webpackMerge = require('webpack-merge');

const modeConfig = env => require(`./webpack.${env.mode}.js`)(env);

module.exports = env => {
  return webpackMerge(
    {
      mode: env.mode,
      entry: {
        app: './src/index.js'
      },
      output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'public/js/'),
        chunkFilename: '[name].js'
      },
      module: {
        rules: [
          {
            test: /\.js$/,
            exclude: /node_modules/,
            use:{
              loader: 'babel-loader'
            }
          },
          {
            test: /\.(svg|png|jpg|gif)$/,
            use: {
              loader: "file-loader",
              options: {
                name: "[name].[ext]",
                outputPath: path.resolve(__dirname, 'public/imgs/')
              }
            }
          }
        ]
      }
    },
    modeConfig(env),
  );
};