var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var bcrypt = require('bcrypt');
// var app.use(express.bodyParser());
var session = require('express-session');
// var session = require('session-store');
// initalize sequelize with session store dd
var SequelizeStore = require('connect-session-sequelize')(session.Store);

 var connection = new Sequelize('warehouses', 'root', 'admin',{
 dialect: 'mysql'
 });
var Session = connection.define('Session', {
  sid: {
    type: Sequelize.STRING,
    primaryKey: true
  },
  userId: Sequelize.STRING,
  expires: Sequelize.DATE,
  data: Sequelize.STRING
});
connection.sync();