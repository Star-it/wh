var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var db = require('../models/dbs.js');
var database = new db();
var sess;
var bcrypt = require('bcrypt');
database.con.sync();
// var app.use(express.bodyParser());
var session = require('express-session');
// var session = require('session-store');
var expressValidator = require("express-validator");
// initalize sequelize with session store dd
var SequelizeStore = require('connect-session-sequelize')(session.Store);
router.use(expressValidator());
/*
 var connection = new Sequelize('warehouses', 'root', 'admin',{
 dialect: 'mysql'
 });
 */
 
 // Finally just store the hash in your DB
 // .. code to store in Redis/Mongo/Mysql/Sqlite/Postgres/etc	
 
 var us1;
 router.get('/', (req,res,next) => {
//var order_types=['test1','test2'];
//    database.Order_types.findAll().forEach(function(order_type){    
console.log('test create order');
//});
res.render( 'create_order', {title:'Create orders'});
//res.send('hello');
// details');
});


router.post('/', (req,res,next) => {
  sess = req.session;
  console.log('I am here 0'); 
  req.check('document_no', 'Номер документа должен быть указан').notEmpty();
  console.log('I am here 1'); 
  req.check('document_date','Номер документа должен быть указан').notEmpty();
  console.log('I am here 2'); 
  req.check('order_types_id', "Тип документа должен быть указан").notEmpty();
  console.log('I am here 3'); 
  req.check('order_status_id', "Статус документа должен быть указан").notEmpty();
  console.log('I am here 4'); 
  // debug('debug works!!');
  req.getValidationResult().then(function (result) {
    if (!result.isEmpty()) {
          var errors = result.array().map(function (elem) {
       //     console.log('There are following validation errors: ' + errors.join('&&'));
   //         res.render('user_details', { errors: errors });
              res.render('create_order', { errors: elem.msg });
              return elem.msg;
          });
    }  else{
    
  console.log('I am here 050'); 

  var orders = database.Orders.create({
    
    document_no: req.body.document_no,
    document_date: req.body.document_date,
    order_types_id: req.body.order_types_id,
    order_status_id: req.body.order_status_id,
    contragent_id: req.body.contragent_id,
    
  client_id:sess.client_id,
  //client_id:1,
  user_id: sess.user_id
  // user_id: 1
  }).then(function(order) {	  //post
// console.log('Over here');
//   console.log(order);
//   console.log(users2.getDataValue('firstname'));
   console.log('document_no:');
   console.log(order.document_no);
  	 res.redirect('orders_list');
  });  //then int 2
 } // else check
});  //post
});  //post

 
module.exports = router;
