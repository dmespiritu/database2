//This should be able to connect to the Dataabase for the user website. 
var mysql = require('mysql');

var con = mysql.createConnection({
	host:"localhost",
	user: "root"
	password: "T4k3 0ff, eh?"
	database: "BlazeCoin"
});

con.connect(function(err)) {
	if(err) throw err;
	console.log("Database is connected");
}