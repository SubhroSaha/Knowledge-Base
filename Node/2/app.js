// const path = require('path');
// var pathObj = path.parse(__filename);
// console.log(pathObj);


// const os = require('os');
// var totalMemory = os.totalmem();
// var freeMemory = os.freemem();
// console.log('Total Memory: ' + totalMemory);
// console.log('Free Memory: ' + freeMemory);
// Using Template String > ES6 / ES2015 / ECMAScript 6
// console.log(`Total Memory: ${totalMemory}`);
// console.log(`Free Memory: ${freeMemory}`);


// const fs = require('fs');
// const files = fs.readdirSync('../')
// console.log(files);
// const filesAsync = fs.readdir('./', function(err, files) {
//     if (err) console.log('Error', err);
//     else console.log('Result', files);
// })


// const EventEmitter = require('events'); // Class
// const emitter = new EventEmitter(); // Object
// // Register a listener
// emitter.on('messageLogged', function(arg) { // Normal function
//     console.log('Listener called', arg);
// })
// emitter.on('messageLogged', (arg) => { // Arrow function
//     console.log('Listener called', arg);
// })
// // Raise an event
// emitter.emit('messageLogged', { id: 1, url: 'http://' });


// const EventEmitter = require('events'); // Class
// const Logger = require('./logger');
// const logger = new Logger();
// logger.on('messageLogged', (arg) => { // Arrow function
//     console.log('Listener called', arg);
// })
// logger.log('message');


const http = require('http');
const server = http.createServer((req, res) => {
    if (req.url === '/') {
        res.write('Hello World');
        res.end();
    }
    if (req.url === '/api/courses') {
        res.write(JSON.stringify([1, 2, 3]));
        res.end();
    }
});
server.listen(3000);
console.log('Listening on port 3000...');