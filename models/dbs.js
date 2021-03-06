var Sequelize = require('sequelize');
var mysql = require('mysql2');
var bcrypt = require('bcrypt');
var session = require('express-session');
var async = require('async');
 var connection = new Sequelize('warehouses', 'root', 'admin',{
 dialect: 'mysql'
 });
var SequelizeStore = require('connect-session-sequelize')(session.Store);
 class DBS {		// database with Sequelize
    constructor (host, dbusername, dbpassword, dbname){
        this._host = host;
        this._dbusername = dbusername;
        this._dbpassword = dbpassword;
        this._dbname = dbname;
        var con = new Sequelize(this._dbname, this._dbusername, this._dbpassword, { dialect: 'mysql' });
        this.con = con;
	this.Clients = connection.define('clients', {
	id: {
             type: Sequelize.INTEGER,
             primaryKey: true,
             autoIncrement: false
  	},
	name:Sequelize.STRING,
	title: Sequelize.STRING,
	description: Sequelize.STRING,
	address: Sequelize.STRING,
	bin_iin: Sequelize.STRING,
	bank_data: Sequelize.STRING,
 	status:Sequelize.INTEGER,
	rating:Sequelize.INTEGER
	},{timestamps: false});
	this.Users = connection.define('users', {
	id: {
    	     type: Sequelize.INTEGER,
             primaryKey: true,
             autoIncrement: true
  	},
	lastname:Sequelize.STRING,
	firstname: Sequelize.STRING,
	email: Sequelize.STRING,
	password: Sequelize.STRING,
 	client_id:Sequelize.INTEGER
    },{timestamps: false});
	this.Orders = connection.define('orders', {
        id: {
                 type: Sequelize.INTEGER,
                 primaryKey: true,
                 autoIncrement: true
          },
        document_no:Sequelize.STRING,
        document_date: Sequelize.DATE,
        order_status_id: Sequelize.INTEGER,
        order_types_id: Sequelize.INTEGER,
        contragent_id: Sequelize.INTEGER,
        client_id: Sequelize.INTEGER,
        user_id: Sequelize.INTEGER
    
    },{timestamps: false});
	this.Order_types = connection.define('order_types', {
        id: {
                 type: Sequelize.INTEGER,
                 primaryKey: true,
                 autoIncrement: true
          },
        name:Sequelize.STRING
        
    },{timestamps: false});
        // this.Clients.hasMany(this.Users); // Will add client_id to user
	this.Session = connection.define('Session', {
  sid: {
    type: Sequelize.STRING,
    primaryKey: true
  },
  userId: Sequelize.STRING,
  expires: Sequelize.DATE,
  data: Sequelize.STRING(50000)
},{timestamps: false});
var extendDefaultFields= function(defaults, session){
  return {
    data: defaults.data,
    expires: defaults.expires,
    userId: session.userId
  };
}
 //var store = new SessionStore({
  this.store = new SequelizeStore({
  db: con,
  table: 'Session',
  extendDefaultFields: extendDefaultFields
});

   } // constructor
 
    createUser(req, res){
        var firstname = req.body.firstname;
        var lastname = req.body.lastname;
      	var email = req.body.email;
        var password = req.body.password;
        var city = req.body.city;
        var name = req.body.name;
//        let hash = bcrypt.hashSync(password, 10);
// Generate a salt
var salt = bcrypt.genSaltSync(10);
// Hash the password with the salt
var hash = bcrypt.hashSync(req.body.password, salt);
        let sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES ('','"+ firstname +"','"+ lastname +"','"+ email +"','"+ hash +"')";
        this.con.query(sql, (err, result)=>{
            if(err)  {
            	console.log( err);
            	throw err;
			}	
            res.redirect('/login');
        });
    }
 
    checkUser(req, res){
        var email = req.body.email;
        var password = req.body.password;
        let sql = "SELECT * FROM `users` WHERE email='" + email + "'";
        return this.con.query(sql, (err, result, fields)=>{
            if(err) throw err;
            if(result.length === 1){
                if(bcrypt.compareSync(password, result[0].password)) {    
                    req.session.user_id = result[0].id;
                    req.session.email = result[0].email;
                    res.redirect('/profile');
                }else{
                    res.redirect('/login?error=1');
                }
            }else{
                res.redirect('/login?error=1');
            }
        })
    }
    deleteUser(req, res){
        var email = req.body.email;
        var password = req.body.password;
        let sql = "DELETE FROM `users` WHERE email='" + email + "'";
        return this.con.query(sql, (err, result, fields)=>{
            if(err){
            	 throw err;
            }else{
                res.redirect('/users_list');
            }
        })
    }
}
module.exports = DBS;