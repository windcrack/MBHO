const webpack = require('webpack');
const {merge} = require('webpack-merge');
const path = require('path');
const autoprefixer = require('autoprefixer');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const {StatsWriterPlugin} = require("webpack-stats-plugin");
const baseConfig = require('./config.base.js');

const ROOT_DIR = path.resolve(__dirname, '../');
const DIST_DIR = path.resolve(ROOT_DIR, 'dist');

module.exports = merge(baseConfig, {
    mode: 'development',
    devServer: {
        static: {
            directory: DIST_DIR,
        },
        compress: true,
        port: 9000,
        hot: true,
    },
    output: {
        path: DIST_DIR,
        publicPath: '/',
        filename: '[name].js',
        clean: true,
    },
    watch: true,
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
        }),
        new StatsWriterPlugin({
            filename: "stats.json",
        }),
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
                            sourceMap: true,
                            url: false,
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true,
                            postcssOptions: {
                                plugins: [
                                    autoprefixer(),
                                ],
                            },
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true,
                        }
                    }
                ]
            }
        ]
    }
});