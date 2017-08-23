var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var bcrypt = require('bcrypt');

var connection = new Sequelize('warehouses', 'root', 'admin',{
 dialect: 'mysql'
});

var Users = connection.define('users', {
id: {
    type: Sequelize.INTEGER,
    primaryKey: true,
    autoIncrement: true
  },
lastname:Sequelize.STRING,
firstname: Sequelize.STRING,
email: Sequelize.STRING,
password: Sequelize.STRING
 
},{timestamps: false});
var us1;
var sess;
connection.sync();

router.get('/', (req,res,next) => {
//  res.render('index', { title: 'Express' });
 	 res.render('login', { title: 'Express', firstname: 'Askar', lastname: 'Bazayev', email: 'As@mk.com'});
});

router.post('/', (req,res,next) => {
//var myHash = bcrypt.hash('myPassword', 10, function(err, hash) {
//       return hash;
//    });
// Generate a salt
var salt = bcrypt.genSaltSync(10);
// Hash the password with the salt
var hash = bcrypt.hashSync(req.body.password, salt);
// Finally just store the hash in your DB
// .. code to store in Redis/Mongo/Mysql/Sqlite/Postgres/etc	
var users1 = Users.findOne({
  where: { // SELECT * FROM users WHERE email: req.body.email
    email: req.body.email
  }
}).then(function(user) {	  //post
 var foundFirstName;
 var email;
 	foundFirstName = user.firstname;
 	email = user.email;
  var hash = user.password;
 console.log('found users');
  console.log(hash);
  if (bcrypt.compareSync(req.body.password, hash)){
  	sess = req.session;
  	sess.email = user.email;
  	sess.firstname = user.firstname;
  	sess.lastname = user.lastname;
  	res.redirect('/');
 // 	res.render('index', {title: 'Express'}); // ; // true
 return;
  }
  else
    res.render('error', { error: Error});
 return; 
   console.log('firstname:');
   console.log(user.firstname);
 

console.log(foundFirstName);
  	 res.render('login', { title: 'Express', firstname: foundFirstName, lastname: 'bazayev', email: email});

 	
  });  //then int 2
  });  //post

 
module.exports = router;
