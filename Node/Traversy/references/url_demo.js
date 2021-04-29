const url = require('url');

const myUrl = new URL('https://subhrosaha.github.io:8000/hello.js?id=100&status=active');

// Serialized URL
console.log(myUrl.href);
console.log(myUrl.toString());

// Host (root domain)
console.log(myUrl.host); // With port
console.log(myUrl.hostname); // Withour port
console.log(myUrl.pathname); // Pathname
console.log(myUrl.search); // Serialized Query
console.log(myUrl.searchParams); // Query param object

myUrl.searchParams.append('abc', '123'); // Add params
console.log(myUrl.searchParams); // Add params

myUrl.searchParams.forEach((value, name) => console.log(`${name}: ${value}`));