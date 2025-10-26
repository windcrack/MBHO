const path = require('path');
const {VueLoaderPlugin} = require('vue-loader');

const ROOT_DIR = path.resolve(__dirname, '../');

module.exports = {
    entry: {
        vendor: path.resolve(ROOT_DIR, 'entry', 'webpack_vendor.js'),
        main: path.resolve(ROOT_DIR, 'entry', 'webpack_main.js'),
    },
    resolve: {
        modules: [
            "node_modules",
        ],
        extensions: ['.js', '.css', '.scss', '.vue', '.json'],
        alias: {
            'vue$': 'vue/dist/vue.runtime.esm-bundler.js', // Update for Vue 3
            '@': path.resolve(ROOT_DIR, 'src', 'vue'),
        }
    },
    module: {
        rules: [
            // js
            {
                test: /\.vue$/,
                loader: 'vue-loader',
            },
            {
                test: /\.js$/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        plugins: ['@babel/plugin-transform-shorthand-properties']
                    }
                },
                exclude: /node_modules/,
            },

            //images
            {
                test: /\.(png|jpg|gif)$/i,
                type: "asset",
            },
            {
                test: /\.svg$/,
                type: 'asset',
            },
            // fonts
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/inline',
            },
        ]
    },
    plugins: [
        new VueLoaderPlugin()
    ]
};