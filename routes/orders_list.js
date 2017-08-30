var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var db = require('../models/dbs.js');
var database = new db('localhost', 'root', 'admin', 'warehouses');
var bcrypt = require('bcrypt');
// var app.use(express.bodyParser());
var session = require('express-session');
database.con.sync();
router.get('/', (req,res,next) => {
    var sess = req.session;
    var orders = database.Orders.findAll({
  attributes: ['id', 'document_no', 'document_date', 'order_status_id', 'order_types_id', 'contragent_id', 'client_id', 'user_id'],
  where: {client_id:sess.client_id}
},).then(function(orders){
	 
 	 res.render('orders_list', { orders : orders });
});	// then
}); // get
router.get('/delete', function(req, res) {
  var user_id_del = req.query['order.id'];
  console.log('order_id_del:');
  console.log(order_id_del);
  database.Orders.destroy(
        {  where: {id:order_id_del}}
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
