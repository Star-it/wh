var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var bcrypt = require('bcrypt');
// var app.use(express.bodyParser());

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
connection.sync();
/* .then(function (){
 Users.create({ 
  lastname: 'Bazayev',
 firstname: 'Askar'
 });
for (var i = 1; i<20; i++) {
 Users.findById(i).then(function(users){
 if (users != null)	
 console.log(users.dataValues);
 });
}

});
*/
router.get('/', (req,res,next) => {
//  res.render('index', { title: 'Express' });
/*
for (var i = 199; i<200; i++) {
 Users.findById(i).then(function(users){
 if (users != null){	
// console.log(users.dataValues);
// us1 = users;
// res.send( users.getDataValue('firstname'));
  res.render('register', { title: 'Express', firstname: users.getDataValue('firstname'), lastname: users.getDataValue('lastname'), email: users.getDataValue('email')});
 //	 res.render('register', { title: 'Express', firstname: users.firstname, lastname: users.lastname, email: users.email})
 }
 });
}
//  User.findAll().then(users => {
//   console.log(users)
// })
// res.send('ready to register');	
*/
 // res.render('register', { title: 'Express'})
 	 res.render('register', { title: 'Express', firstname: req.body.firstname, lastname: req.body.lastname, email: email});
});

router.post('/', (req,res,next) => {
//var myHash = bcrypt.hash('myPassword', 10, function(err, hash) {
//       return hash;
//    });
if (req.body.password !== req.body.confirmPassword){
	console.log('Пароль и его подnверждение не совпадают');
	console.log(req.body.password);
	console.log(req.body.confirmPassword);
//	res.send('Пароль и его подверждение не совпадают');
}
// Generate a salt
var salt = bcrypt.genSaltSync(10);
// Hash the password with the salt
var hash = bcrypt.hashSync(req.body.password, salt);
 
// Finally just store the hash in your DB
// .. code to store in Redis/Mongo/Mysql/Sqlite/Postgres/etc	
    console.log(hash);
var users = Users.create({ 

 lastname: req.body.lastname,
 firstname: req.body.firstname,
 email: req.body.email,
 password: hash 
 }).then(function(users2) {	  //post
 console.log('Over here');
 console.log(bcrypt.compareSync("my password", hash)); // true
 console.log(bcrypt.compareSync("not my password", hash)); // true

//   console.log(users2);
//   console.log(users2.getDataValue('firstname'));
   console.log('firstname:');
   console.log(users2.firstname);
// 	 res.render('register', { title: 'Express', firstname: users2.getDataValue('firstname'), lastname: users2.lastname, email: users2.email});
// 	 res.render('register', { title: 'Express', firstname: users2.getDataValue('firstname'), lastname: users2.getDataValue('lastname'), email: users2.getDataValue('email')});
 // res.send('Hello');
  	 res.render('register', { title: 'Express', firstname: 'Askar', lastname: 'bazayv', email: 'As@mk.com'});
 	 /*  
  Users.findById(users2.id)}).then(function(users3){
      console.log(users3)
 	if (users3 != null){	
 //	 console.log(users.dataValues);
// res.send( users.getDataValue('firstname'));
 	 res.render('register', { title: 'Express', firstname: users3.firstname, lastname: users3.lastname, email: users3.email})
 
	}
	else res.send('ok234');
//  });  //then int1
// Users.findById(new_user.id).then(function(users){
*/  
  });  //then int 2
  });  //post

 /*	
 Users.findById(new_user.id).then(function(users){
 if (users != null){	
 console.log(users.dataValues);
// res.send( users.getDataValue('firstname'));
  res.render('register', { title: 'Express', firstname: users.getDataValue('firstname'), lastname: users.getDataValue('lastname'), email: users.getDataValue('email')});
 }
 });

 Users.findById(new_user.id).then(function(user){
 if (user != null){	
// console.log(user.firstname);
// res.send( users.getDataValue('firstname'));
  res.render('register', { title: 'Express', firstname: user.firstname, lastname: user.lastname, email: user.email});
 }
 });
*/
// res.send('ok');

module.exports = router;
