// // // // function doSomething(){
// // // //     for (let i = 0; i < 5; i++) {
// // // //         console.log(i);
// // // //     }
// // // //     console.log('finally:' + i);
// // // // }
// // // // doSomething();

// // // // function doSomething(){
// // // //     for (var i = 0; i < 5; i++) {
// // // //         console.log(i);
// // // //     }
// // // //     console.log('finally:' + i);
// // // // }
// // // // doSomething();



// // // let count = 5;
// // // count = 'a';

// // // let a : number;
// // // let b : boolean;
// // // let c : string;
// // // let d : any;
// // // let e : number[] = [1, 2, 3];
// // // let f : any[] = [1, true, 'hi'];

// // // a = 1;
// // // a = true;
// // // a = 'a';



// // const colorRed = 0;
// // const colorBlue = 1;
// // const colorGreen = 2;

// // enum Color { Red = 0, Blue = 1, Green = 2};
// // let backgroundColor = Color.Blue;



// let message;
// message = 'abc';
// let endsWithC = (<string>message).endsWith('c');
// let alternativeWay = (message as string).endsWith('c');



let message = "Hello World";
let log = function (message) {
    console.log(message);
}

function Mes (message) {
    console.log(message);
}

Mes(message);

let doLog = (message) => {
    console.log(message);
}

let whileLog = (message) => console.log(message);