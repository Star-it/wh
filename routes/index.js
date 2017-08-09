var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express1' });
});
router.get('/hello', (req,res,next) => {
//  res.render('index', { title: 'Express' });
  res.render('index',{title:'Hello World1984!'});
  res.render('index',{title:'Hello World1986!'});
});
// router.get('/register', (req,res,next) => {
//  res.render('index', { title: 'Express' });
//  res.render('register',{askar:'Hello World1986!'});
// });
module.exports = router;
