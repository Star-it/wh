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
var user_id = req.query['user.id'];
//console.log user_id;	
console.log(req.query['user.id']);	
var users = database.Users.findById(user_id).then(function(user){
	 
 	 res.render('user_details', { user : user, errors:'' });
});	// then
}); // get
router.post('/', (req,res,next) => {
var userid = req.body.userid;
//console.log user_id;	
console.log('In Post:'); 
// console.log(req.query['user.id']);	
console.log(req.body.userid);	
var users = database.Users.findById(userid).then(function(user){
  if (!user) return next(new Error('failed to find user'));
  console.log('I am here 0'); 
  req.check('firstname', 'Name must be Filled in').notEmpty();
  console.log('I am here 1'); 
  req.check('email', 'Email must be Filled in').notEmpty();
  console.log('I am here 2'); 
  req.check('email', "Invalid Email").isEmail();
  console.log('I am here 3');
  var hash=''; 
  console.log(req.body.password);
  if(req.body.password.length>0){
  console.log('password not empty'); 
    // Generate a salt
    var salt = bcrypt.genSaltSync(10);
    // Hash the password with the salt
    hash = bcrypt.hashSync(req.body.password, salt);
    
  } else{
        console.log('password not empty'); 
        hash = user.password;
  }
  console.log(hash);
  req.check('password', 'Passwords do not Match').equals(req.body.confirmed_password)
  console.log('I am here 4a'); 
  // debug('debug works!!');
  req.getValidationResult().then(function (result) {
  if (!result.isEmpty()) {
        var errors = result.array().map(function (elem) {
     //     console.log('There are following validation errors: ' + errors.join('&&'));
 //         res.render('user_details', { errors: errors });
            res.render('user_details', { user:user,errors: elem.msg });
            return elem.msg;
        });
  } else{
    
  console.log('I am here 050'); 

  database.Users.update(
  { firstname: req.body.firstname,
   lastname: req.body.lastname,
   email:req.body.email,
   password:hash },
  {  where: {id:userid}}
).then(result =>{
     console.log('User updated');
     res.redirect('/users_list')
    }).catch(err =>{
    console.log('User not updated' );
    console.log( err);
    });
  
//	 user.firstname = req.body.firstname;
  }
// });	// update - then
});	// getValidationResult
}); // findById
}); // post

 
module.exports = router;
