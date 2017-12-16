var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var HtmlWebpackPlugin = require('html-webpack-plugin');

var loader = [{
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
            use: {
                loader: 'css-loader',
                options: {
                    sourceMap: true,
                    minimize: false
                }
            },
            fallback: 'style-loader'
        })
    },
    {
        test: /\.less$/,
        use: ExtractTextPlugin.extract({
            use: [{
                    loader: 'css-loader',
                    options: {
                        sourceMap: true,
                        minimize: false
                    }
                },
                {
                    loader: 'less-loader',
                    options: {
                        sourceMap: true,
                        minimize: true
                    }
                }
            ],
            fallback: 'style-loader'
        })
    },
    {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
            use: [{
                    loader: 'css-loader',
                    options: {
                        sourceMap: true
                    }
                },
                {
                    loader: 'sass-loader',
                    options: {
                        data: '@import "./scss/variable.scss";',
                        sourceMap: true
                    }
                }
            ],
            fallback: 'style-loader'
        })
    },
    {
        test: /\.(ttf|eot|svg|woff(2)?)(\?[a-z0-9=&.]+)?$/,
        loader: 'file-loader?name=[name].[ext]&outputPath=/assets/fonts/'
    },
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
    entry: [
        'webpack-hot-middleware/client',
        path.resolve('src', 'client.js')
    ],
    watch: true,
    output: {
        path: path.resolve('build'),
        filename: 'app.js',
        publicPath: '/'
    },
    module: {
        loaders: loader
    },
    plugins: [
        new webpack.HotModuleReplacementPlugin(),
        new HtmlWebpackPlugin()
    ]
};