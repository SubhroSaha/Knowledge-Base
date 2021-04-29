const person = require('./person')

const person1 = new person('Subhro Saha', 30);
const person2 = new person('Bipro Saha', 17);

// console.log(person);
// person1.greeting();
// person2.greeting();

const Logger = require('./logger');

const logger = new Logger();

logger.on('message', data => console.log('Called listener', data));

logger.log('Hello');
logger.log('World');