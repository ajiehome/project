var path = require('path');
var webpack = require('webpack');
var express = require('express');
var devMiddleware = require('webpack-dev-middleware');
var hotMiddleware = require('webpack-hot-middleware');
var config = require('./webpack.config');

var _ = require('lodash');
var bodyParser = require('body-parser')
var app = express();
var compiler = webpack(config);

app.use(bodyParser.urlencoded({ extended: false }))

app.use(devMiddleware(compiler, {
    publicPath: config.output.publicPath,
    historyApiFallback: true,
}));

app.use(hotMiddleware(compiler));

app.use(express.static(__dirname));

app.all('*', function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "X-Requested-With");
    res.header("Access-Control-Allow-Methods", "PUT,POST,GET,DELETE,OPTIONS");
    res.header("X-Powered-By", ' 3.2.1')
    res.header("Content-Type", "text/html");
    next();
});

app.get('/api/market', function(req, res, next) {

    res.json({"error":0,"msg":"ok","data":[{"base_coin":"CNY","price":"10000","rate":"6.33","coin_type":"BTC"},{"base_coin":"CNY","price":"10000","rate":"6.33","coin_type":"ETH"},{"base_coin":"CNY","price":"10000","rate":"6.33","coin_type":"BCC"},{"base_coin":"CNY","price":"10000","rate":"6.33","coin_type":"ETC"},{"base_coin":"CNY","price":"10000","rate":"6.33","coin_type":"LTC"}]});
    next();
});

app.get('*', function(req, res) {
    res.sendFile(path.join(__dirname, 'src/index.html'));
});

app.listen(5000, function(err) {
    if (err) {
        return console.error(err);
    }

    console.log('Listening at http://localhost:5000/');
});
