// Examine the document object
// console.dir(document);

// console.log(document.domain);
// console.log(document.title);
// console.log(document.URL);
// document.title = 123;
// console.log(document.doctype);
// console.log(document.head);
// console.log(document.body);
// console.log(document.all);
// console.log(document.all[10]);
// console.log(document.forms);
// console.log(document.links);
// console.log(document.images);
// console.log(document);

// var items = document.getElementsByClassName('list-group-item');
// console.log(items);
// console.log(items[1]);
// items[1].textContent = "Hello";
// items[1].style.fontWeight = "bold";
// items[1].style.backgroundColor = "yellow";
// Array.from(items).map((item) => 
//     item.style.backgroundColor = "red"
// )

// var items = document.getElementsByTagName('li');
// console.log(items);
// console.log(items[1]);
// items[1].textContent = "Hello";
// items[1].style.fontWeight = "bold";
// items[1].style.backgroundColor = "yellow";
// Array.from(items).map((item) => 
//     item.style.backgroundColor = "red"
// )

// var odd = document.querySelectorAll('li:nth-child(odd)');
// var even = document.querySelectorAll('li:nth-child(even)');

// for (var i = 0; i < odd.length; i++) {
//     odd[i].style.backgroundColor = '#f4f4f4';
//     even[i].style.backgroundColor = '#ccc';
// }


// Traversing the DOM

// var itemList = document.querySelector('#items');

// Parent node
// console.log(itemList.parentNode);
// itemList.parentNode.style.backgroundColor = '#f4f4f4';
// console.log(itemList.parentNode.parentNode.parentNode);

// Parent element
// console.log(itemList.parentElement);
// itemList.parentElement.style.backgroundColor = '#f4f4f4';
// console.log(itemList.parentElement.parentElement.parentElement);

// Child nodes
// console.log(itemList.childNodes);

// Children
// console.log(itemList.children);
// console.log(itemList.children[0]);
// itemList.children[0].style.backgroundColor = 'orange';
// itemList.children[1].style.backgroundColor = 'white';
// itemList.children[2].style.backgroundColor = 'green';


// console.log(itemList.firstChild); // Gives node not element
// console.log(itemList.firstElementChild); // Gives first child element
// console.log(itemList.lastElementChild); // Gives last child element


// console.log(itemList.nextSibling); // Gives node not element
// console.log(itemList.previousSibling); // Gives node not element
// console.log(itemList.nextElementSibling); // Gives element
// console.log(itemList.previousElementSibling); // Gives element



// // # Creating elements
// var newDiv = document.createElement('div');

// newDiv.id = 'new';
// newDiv.className = 'hello';
// newDiv.setAttribute('title', 'new div');

// newDiv.textContent = 'Hello World';
// // var newDivText = document.createTextNode('Hello World');
// // newDiv.appendChild(newDivText);

// var container = document.querySelector('header .container');
// var h1 = document.querySelector('header h1');

// console.log(newDiv);
// // console.log(container);

// newDiv.style.fontSize = '30px';

// container.insertBefore(newDiv, h1);



// # Events
// var button = document.getElementById('button').addEventListener('click', buttonClick);

// function buttonClick(e) {

//     // console.log('Button clicked');
//     // document.getElementById('header-title').textContent = 'Changed';
//     // document.getElementById('main').style.backgroundColor = '#14f4f4';
    
//     // console.log(e);
//     // console.log(e.target);
//     // console.log(e.target.id);
//     // console.log(e.target.className);
//     // console.log(e.target.classList.contains('btn'));
    
//     // var output = document.getElementById('output');
//     // output.innerHTML = '<h3>'+e.target+'</h3>'

//     // console.log(e.type);
//     // console.log(e.path);

//     // console.log(e.clientX); // from left of window
//     // console.log(e.clientY); // from top of window

//     // console.log(e.offsetX); // from left of element
//     // console.log(e.offsetY); // from top of element

//     console.log(e.altKey);
//     console.log(e.ctrlKey);
//     console.log(e.shiftKey);
// }


var button = document.getElementById('button');
var box = document.getElementById('box');

// button.addEventListener('click', runEvent);
// button.addEventListener('dblclick', runEvent);
// button.addEventListener('mousedown', runEvent);
// button.addEventListener('mouseup', runEvent);

// box.addEventListener('mouseenter', runEvent);
// box.addEventListener('mouseleave', runEvent);

// box.addEventListener('mouseover', runEvent);
// box.addEventListener('mouseout', runEvent);

var output = document.getElementById('output');
box.addEventListener('mousemove', runEvent);

function runEvent(e) {
    console.log('EVENT TYPE: ' + e.type)

    output.innerHTML = '<h3>MouseX: '+e.offsetX+'</h3>'+'<h3>MouseY: '+e.offsetY+'</h3>'
}