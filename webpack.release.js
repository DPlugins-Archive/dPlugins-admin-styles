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
    entry: './src/style.scss',
    output: {
        filename: '[name].css',
        path: path.resolve(__dirname, './dist-release'),
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
            filename: 'dist/style.css',
        }),
        new RemovePlugin({
            after: {
                include: [
                    './dist-release/main.css'
                ]
            }
        }),
        new CopyPlugin({
            patterns: [
                {
                    from: "**/*.php",
                    filter: (filepath) => !filepath.includes('dist') && !filepath.includes('node_modules') && !filepath.includes('dist-release')
                },
            ]
        }),
        new ZipPlugin({
            // OPTIONAL: defaults to the Webpack output path (above)
            // can be relative (to Webpack output path) or absolute
            path: '../releases',

            // OPTIONAL: defaults to the Webpack output filename (above) or,
            // if not present, the basename of the path
            filename: `dp-framework.${packagejson.version}.zip`,

            // OPTIONAL: defaults to the identity function
            // a function mapping asset paths to new paths
            pathMapper: function(assetPath) {
                // put all pngs in an `images` subdir
                if (assetPath.endsWith('.png'))
                    return path.join(path.dirname(assetPath), 'images', path.basename(assetPath));
                return assetPath;
            },
            exclude: [/\main.css$/],
            // yazl Options

            // OPTIONAL: see https://github.com/thejoshwolfe/yazl#addfilerealpath-metadatapath-options
            fileOptions: {
                mtime: new Date(),
                mode: 0o100664,
                compress: true,
                forceZip64Format: false,
            },

            // OPTIONAL: see https://github.com/thejoshwolfe/yazl#endoptions-finalsizecallback
            zipOptions: {
                forceZip64Format: false,
            },
        })
    ],
};
