var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var db = require('../models/dbs.js');
var database = new db('localhost', 'root', 'admin', 'warehouses');
var sess;
var bcrypt = require('bcrypt');
// var app.use(express.bodyParser());
var session = require('express-session');
// var session = require('session-store');
var expressValidator = require("express-validator");
// initalize sequelize with session store dd
var SequelizeStore = require('connect-session-sequelize')(session.Store);
router.use(expressValidator());

 var connection = new Sequelize('warehouses', 'root', 'admin',{
 dialect: 'mysql'
 });

var us1;
connection.sync();
router.get('/', (req,res,next) => {
 	 res.render('register', { title: 'Express', firstname: req.body.firstname, lastname: req.body.lastname, email: req.body.email});
});

router.post('/', (req,res,next) => {

  console.log('I am here 0'); 
  req.check('firstname', 'Name must be Filled in').notEmpty();
  console.log('I am here 1'); 
  req.check('email', 'Email must be Filled in').notEmpty();
  console.log('I am here 2'); 
  req.check('email', "Invalid Email").isEmail();
  console.log('I am here 3'); 
  req.check('password', 'Password Field must be Filled in').notEmpty();
  console.log('I am here 4'); 
  req.check('password', 'Passwords do not Match').equals(req.body.confirmed_password)
  console.log('I am here 4a'); 
  // debug('debug works!!');
  var errors = req.validationErrors();
  if(errors){
    console.log('I am here 5'); 
    res.send(errors);
  }  else{
    
  console.log('I am here 050'); 

var orders = database.Orders.create({ 

 document_no: req.body.document_no,
 document_date: req.body.document_date,
 order_type: req.body.order_type,
 order_status: req.body.order_status,
 contragent: rec.body.select_contragent,
 client_id: session.client_id,
 user_id: user_id 
}).then(function(order) {	  //post
// console.log('Over here');
//   console.log(order);
//   console.log(users2.getDataValue('firstname'));
   console.log('document_no:');
   console.log(order.document_no);
  	 res.render('order_items', { order});
  });  //then int 2
 } // else check
});  //post

 
module.exports = router;
