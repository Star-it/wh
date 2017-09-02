var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var db = require('../models/dbs.js');
var database = new db();
database.con.sync();
var sess;
var bcrypt = require('bcrypt');
// var app.use(express.bodyParser());
var session = require('express-session');
var expressValidator = require("express-validator");
database.con.sync();
router.use(expressValidator());
router.get('/', (req,res,next) => {
var order_id = req.query['order.id'];
//console.log user_id;	
console.log(req.query['order.id']);	
var orders = database.Orders.findById(order_id).then(function(order){
	 
 	 res.render('order_details', { order : order, errors:'' });
});	// then
}); // get
router.post('/', (req,res,next) => {
var orderid = req.body.orderid;
//console.log user_id;	
console.log('In Post:'); 
// console.log(req.query['user.id']);	
console.log(req.body.orderid);	
var orders = database.Orders.findById(orderid).then(function(order){
  if (!order) return next(new Error('failed to find order'));
  sess = req.session;
  console.log('I am here 0'); 
  req.check('document_no', 'Номер документа должен быть указан').notEmpty();
  console.log('I am here 1'); 
  req.check('document_date','Дата документа должна быть указана').notEmpty();
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
            res.render('order_details', { order:order,errors: elem.msg });
            return elem.msg;
        });
  } else{
    
  console.log('I am here 050'); 

  database.Orders.update(
  { 
    document_no: req.body.document_no,
    document_date: req.body.document_date,
    order_types_id: req.body.order_types_id,
    order_status_id: req.body.order_status_id,
    contragent_id: req.body.contragent_id,
    client_id:sess.client_id,
  //client_id:1,
    user_id: sess.user_id
  // user_id: 1
   },
  { where: {id:orderid}}
).then(result =>{
     console.log('Order updated');
     res.redirect('/orders_list')
    }).catch(err =>{
    console.log('Order not updated' );
    console.log( err);
    });
  
//	 user.firstname = req.body.firstname;
  }
// });	// update - then
});	// getValidationResult
}); // findById
}); // post

 
module.exports = router;
