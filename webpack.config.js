const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'production',
  entry: {
    addictivescience: './src/addictivescience.js',
    bethellium: './src/bethellium.js',
    cb: './src/cb.js',
    knighthood: './src/knighthood.js',
    knuckleup: './src/knuckleup.js',
    main: './src/index.js',
    imew: './src/imew.js',
    laslindas: './src/laslindas.js',
    paprika: './src/paprika.js',
    pmp: './src/pmp.js',
    princessbunny: './src/princessbunny.js',
    rascals: './src/rascals.js',
    theeye: './src/theeye.js',
    tots: './src/tots.js',
    ultrarosa: './src/ultrarosa.js',
    'ultrarosa-esp': './src/ultrarosa.js',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, './dist'),
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
            plugins: [
              '@babel/transform-runtime'
            ]
          },
        },
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(png|jpg|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {},
          },
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css',
      chunkFilename: '[id].css',
    }),
  ],
};
