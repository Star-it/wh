var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var db = require('../models/dbs.js');
var database = new db('localhost', 'root', 'Mandriva2012', 'warehouses');
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
  // Generate a salt
var salt = bcrypt.genSaltSync(10);
// Hash the password with the salt
var hash = bcrypt.hashSync(req.body.password, salt);
 
// Finally just store the hash in your DB
// .. code to store in Redis/Mongo/Mysql/Sqlite/Postgres/etc	
    console.log(hash);

var users = database.Users.create({ 

 lastname: req.body.lastname,
 firstname: req.body.firstname,
 email: req.body.email,
 password: hash 
 }).then(function(users2) {	  //post
// console.log('Over here');
// console.log(bcrypt.compareSync("my password", hash)); // true
// console.log(bcrypt.compareSync("not my password", hash)); // true

//   console.log(users2);
//   console.log(users2.getDataValue('firstname'));
   if (req.body.cbIsCompany){
    users2.client_id=users2.id; 
    var clients = database.Clients.create({
    id: users2.id,   
    name: req.body.company_name,
    address: req.body.company_address,
    bin_iin: req.body.bin_iin,
    bank_data: req.body.bank_data,
    description: req.body.company_description
    });
    /*.then(function(req,res, next) {
      res.send('client inserted')
    }
    
     // console.log('cbIsCompany is checked');
    */
  }
   else
    console.log('cbIsCompany is not checked');
   res.redirect('/login');
//  	 res.render('register', { title: 'Express', firstname: 'Askar', lastname: 'bazayv', email: 'As@mk.com'});
  });  //then int 2
 } // else check
});  //post

 
module.exports = router;
