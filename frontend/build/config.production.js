const path = require('path');
const webpack = require('webpack');
const {merge} = require('webpack-merge');
const baseConfig = require('./config.base.js');
const TerserPlugin = require('terser-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const BundleAnalyzer = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const autoprefixer = require('autoprefixer');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const {StatsWriterPlugin} = require("webpack-stats-plugin");

const ROOT_DIR = path.resolve(__dirname, '../');
const DIST_DIR = path.resolve(ROOT_DIR, 'dist');

module.exports = merge(baseConfig, {
    mode: 'production',
    devtool: false, // devtool '' is the same as devtool false
    target: 'web',
    output: {
        path: DIST_DIR,
        publicPath: '/',
        filename: '[name].js', // All common js-files will set in one file: scripts.hash.js
        chunkFilename: '[name].js',
    },
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin({
                test: /\.js(\?.*)?$/i,
                parallel: true,
            }),
            new CssMinimizerPlugin()
        ]
    },
    plugins: [
        // erasing /dist folder
        new CleanWebpackPlugin({root: ROOT_DIR, verbose: true, dry: false}),

        new MiniCssExtractPlugin({
            filename: '[name].css', // marya.hash.css, ed.hash.css, mia.hash.css
            // chunkFilename: '[id].[hash].css' // Uncomment if needed
        }),

        // генерируем файл с названиями новых файлов с новым хэшем, чтобы потом их спарсить и подключить PHP-скриптом
        new StatsWriterPlugin({
            filename: "stats.json" // Default
        }),

        // new BundleAnalyzer(),
    ],
    module: {
        rules: [
            {
                test: /\.s?css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url: false,
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: [
                                    autoprefixer()
                                ]
                            }
                        }
                    },
                    'sass-loader'
                ]
            }
        ]
    },
});
