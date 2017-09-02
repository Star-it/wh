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
database.con.sync();
router.get('/', (req,res,next) => {
var users3 = database.Users.findAll({
  attributes: ['id', 'firstname', 'lastname', 'email', 'password']
}).then(function(users3){
	 
 	 res.render('users_list', { users : users3 });
});	// then
}); // get
router.get('/delete', 
function(req, res) {
  var user_id_del = req.query['user.id'];
  console.log('user_id_del:');
  console.log(user_id_del);
  database.Users.destroy(
        {  where: {id:user_id_del}}
      )
	.then(function (deletedRecord) {

            if(deletedRecord === 1){
                res.status(200).json({message:"Deleted successfully"});

            }
            else
            {
                res.status(404).json({message:"record not found"})
            }


        })
        .catch(function (error){
            res.status(500).json(error);
        });



});
 
module.exports = router;
