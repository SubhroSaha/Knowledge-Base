console.log(__filename);
console.log(__dirname);

var url = 'http://mylogger.io/log';

function log(message) {
    //Send an HTTP reauest
    console.log(message);
}

// function logg(message) {
//     //Send an HTTP reauest
//     console.log(message);
// }


// console.log(module);

// module.exports.log = log;
module.exports = log;

// module.exports.logg = logg;