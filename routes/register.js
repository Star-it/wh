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
var Session = connection.define('Session', {
  sid: {
    type: Sequelize.STRING,
    primaryKey: true
  },
  userId: Sequelize.STRING,
  expires: Sequelize.DATE,
  data: Sequelize.STRING(50000)
});
 
function extendDefaultFields(defaults, session) {
  return {
    data: defaults.data,
    expires: defaults.expires,
    userId: session.userId
  };
}
 
//var store = new SessionStore({
  var store = new SequelizeStore({
  db: connection,
  table: 'Session',
  extendDefaultFields: extendDefaultFields
});
var us1;
connection.sync();
router.get('/', (req,res,next) => {
 	 res.render('register', { title: 'Express', firstname: req.body.firstname, lastname: req.body.lastname, email: req.body.email});
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
  	 res.render('register', { title: 'Express', firstname: 'Askar', lastname: 'bazayv', email: 'As@mk.com'});
  });  //then int 2
  });  //post

 
module.exports = router;
