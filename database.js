

const mysql = require ('mysql');

const connection = mysql.createConnection({
    host:"localhost",
    user: "root",
    password: "",
    database: "online_quiz"
});

connection.connect(function (error) {
    if (error) {
        throw error;
    }
    else{
        console.log("Connected to the Database!");
    }
});

module.exports = connection;

