const EventEmitter = require('events'); // Class

var url = 'http://mylogger.io/log';

class Logger extends EventEmitter {
    log(message) {

        //Send an HTTP reauest
        console.log(message);
        
        // Raise an event
        this.emit('messageLogged', { id: 1, url: url });
    }
}

module.exports = Logger;