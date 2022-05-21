const path = require('path');
const glob = require("glob");
const TerserPlugin = require("terser-webpack-plugin");
const miniCss = require('mini-css-extract-plugin');
const RemovePlugin = require('remove-files-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");
const ZipPlugin = require('zip-webpack-plugin');
const packagejson = require('./package.json');

module.exports = {
    mode: 'production',
    entry: './src/index.js',
    output: {
        filename: 'index.js',
        path: path.resolve(__dirname, './dist-npm-release'),
        clean: true
    },
    optimization: {
        minimize: false,
        minimizer: [new TerserPlugin({extractComments: false})]
    },
    module: {
        // rules: [
        //     {
        //         test: /\.(scss|css)$/,
        //         use: [miniCss.loader, {
        //             loader: "css-loader",
        //             options: {
        //                 url: false,
        //             },
        //         }, 'sass-loader'],
        //     }
        // ],
    },
    plugins: [
        // new miniCss({
        //     filename: 'dist/style.css',
        // }),
        new RemovePlugin({
            after: {
                include: [
                    './dist-npm-release/index.js'
                ]
            }
        }),
        new CopyPlugin({
            patterns: [
                {
                    from: "src/**/*.scss",
                    to({ context, absoluteFilename }) {
                        console.log(absoluteFilename);
                        return absoluteFilename.replace('src/', 'dist-npm-release/');
                    },
                    filter: (filepath) => !filepath.includes('dist') && !filepath.includes('node_modules') && !filepath.includes('dist-release')
                },
                'package.json',
                'package-lock.json',
                '.npmrc'
            ]
        })
    ],
};
