var express = require('express');
var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var path = require('path');
var bodyParser = require('body-parser');
var passwordHash = require('password-hash');
const MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
var sharedsession = require("express-socket.io-session");

app.use(express.static(path.resolve('../www')));

app.use(bodyParser.urlencoded({ extended: true }));

var session = require("express-session")({
    secret: "the_cake_is_a_lie",
    resave: true,
    saveUninitialized: true,
    duration: 30 * 60 * 1000,
  	activeDuration: 5 * 60 * 1000
});

app.use(session);

app.get('/',function(req, res){
  res.sendFile(path.resolve('../www/loginform.html'));
});

app.get('/log',function(req, res){
	if (req.session.user)
	{
		res.redirect('/logout');
	}
	else
	{
		res.sendFile(path.resolve('../www/loginform.html'));
	}
});

app.get('/logout',function(req, res){
	if (req.session.user)
	{
		res.sendFile(path.resolve('../www/logout.html'));
	}
	else
	{
		res.redirect('/log');
	}
});

app.post('/logoutsubmit',function(req, res){
	delete req.session.user;
	res.redirect('/log');
});

app.post('/loginsubmit', function(req, res){
	var loginuname = req.body.username;
	var loginpwordraw = req.body.password;

	var query = {};
	query = { "username": loginuname, "password": loginpwordraw};

	MongoClient.connect(url, function(err, db) {
		if (err) throw err;
		var dbo = db.db("userdb");

		dbo.collection("users").find(query).toArray(function(err, result) {
	    if (err) throw err;
	    if (result.length)
	    {
	    	req.session.user = loginuname;
	    	req.session.save();
	    	console.log(req.session);
	    	res.redirect('/logout');
	    }
	    else
	    {
	    	res.redirect('/log');
	    }
	    db.close();
  		});
	});
});

app.post('/signupsubmit', function(req, res){
	var newemail = req.body.email;
	var newuname = req.body.username;
	var pass1 = req.body.password1;

	var newobj = {
		email: newemail,
		username: newuname,
		password: pass1
	};

	MongoClient.connect(url, function(err, db) {
		if (err) throw err;
		var dbo = db.db("userdb");
		dbo.collection("users").insertOne(newobj, function(err, res) {
			if (err) throw err;
			console.log("new user created");
			console.log(res.insertedCount);
		});
	});
	req.session.user = newuname;
	console.log(req.session.user);
	res.redirect('/log');
});

app.get('/search',function(req, res){
	res.sendFile(path.resolve('../www/search.html'));
});

app.get('/send', function(req, res) {
	if (req.session.user)
	{
		res.sendFile(path.resolve('../www/send.html'));
	}
	else
	{
		res.sendFile(path.resolve('../www/uhoh.html'));
	}
});

app.get('/consoles',function(req, res){
  res.sendFile(path.resolve('../www/consoles.html'));
});

app.get('/games',function(req, res){
  res.sendFile(path.resolve('../www/games.html'));
});

app.post('/sendsubmit',function(req, res){
  res.sendFile(path.resolve('../www/thanks.html'));
});

app.post('/searchy', function(req, res){
	var rawquery = req.body.search;
	var query = rawquery.toLowerCase();
	console.log(query);
	res.redirect('/search');
});

io.on('connection', function(socket) {  
    console.log('Client connected...');

    socket.on('disconnect', function(){
    	console.log('Client left...');
    });

    socket.on('getconsoles', function(){
    	MongoClient.connect(url, function(err, db) {
			if (err) throw err;
			var dbo = db.db("userdb");
			dbo.collection("consoles").find().toArray(function(err, result) {
			    if (err) throw err;
			    	var photoarray = [];
					var namearray = [];
					var darray = [];
					var pricearray = [];
			    for (var i = 0; i < result.length; i++)
			    {
			    	photoarray.push(result[i].photo);
			    	namearray.push(result[i].name);
			    	darray.push(result[i].description);
			    	pricearray.push(result[i].price);
			    }
			    io.emit('sendconsoles', photoarray, namearray, darray, pricearray);
			});
    	});
	});

	socket.on('getgames', function(){
    	MongoClient.connect(url, function(err, db) {
			if (err) throw err;
			var dbo = db.db("userdb");
			dbo.collection("games").find().toArray(function(err, result) {
			    if (err) throw err;
			    	var photoarray = [];
					var namearray = [];
					var consolearray = [];
					var darray = [];
					var pricearray = [];
			    for (var i = 0; i < result.length; i++)
			    {
			    	photoarray.push(result[i].photo);
			    	namearray.push(result[i].name);
			    	consolearray.push(result[i].console);
			    	darray.push(result[i].description);
			    	pricearray.push(result[i].price);
			    }
			    io.emit('sendgames', photoarray, namearray, consolearray, darray, pricearray);
			});
    	});
	});
});

http.listen(9050, function(){
  console.log('server on!');
});