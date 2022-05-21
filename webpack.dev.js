const path = require('path');
const TerserPlugin = require("terser-webpack-plugin");
const miniCss = require('mini-css-extract-plugin');
const RemovePlugin = require('remove-files-webpack-plugin');

module.exports = {
    mode: 'development',
    entry: './src/style.scss',
    output: {
        filename: '[name].css',
        path: path.resolve(__dirname, './dist'),
        clean: true
    },
    optimization: {
        minimize: false,
        minimizer: [new TerserPlugin({extractComments: false})]
    },
    module: {
        rules: [
            {
                test: /\.(scss|css)$/,
                use: [miniCss.loader, {
                    loader: "css-loader",
                    options: {
                        url: false,
                    },
                }, 'sass-loader'],
            }
        ],
    },
    plugins: [
        new miniCss({
            filename: './style.css',
        }),
        new RemovePlugin({
            after: {
                include: [
                    './dist/main.css'
                ]
            }
        })
    ],
};
