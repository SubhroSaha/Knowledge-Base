const companies = [
  { name: "Company One", category: "Finance", start: 1981, end: 2004 },
  { name: "Company Two", category: "Retail", start: 1992, end: 2008 },
  { name: "Company Three", category: "Auto", start: 1999, end: 2007 },
  { name: "Company Four", category: "Retail", start: 1989, end: 2010 },
  { name: "Company Five", category: "Technology", start: 2009, end: 2014 },
  { name: "Company Six", category: "Finance", start: 1987, end: 2010 },
  { name: "Company Seven", category: "Auto", start: 1986, end: 1996 },
  { name: "Company Eight", category: "Technology", start: 2011, end: 2016 },
  { name: "Company Nine", category: "Retail", start: 1981, end: 1989 },
];

const ages = [33, 12, 20, 16, 5, 54, 21, 44, 61, 13, 15, 45, 25, 64, 32];

//   forEach
//   filter
//   map
//   sort
//   reduce

// for (let i = 0; i < companies.length; i++) {
//   console.log(companies[i]);
// }

// companies.forEach(function (company, index, companies) {
//     console.log(company);
//     console.log(company.name);
// });

// let canDrink = [];
// for (let i = 0; i < ages.length; i++) {
//     if(ages[i] >= 21) {
//         canDrink.push(ages[i]);
//     }
// }
// console.log(canDrink);

// const canDrinks = ages.filter(function(age) {
//     return age >= 21;
// })

// const canDrinks = ages.filter(age => age >= 21);
// console.log(canDrinks);

// const retailsCompanies = companies.filter((c) => c.category === "Retail");
// console.log(retailsCompanies);

// const eightysCompanies = companies.filter(
//   (c) => c.start < 1990
// );
// console.log(eightysCompanies);

// const lastedTenYears = companies.filter(
//   (c) => c.end - c.start < 10
// );
// console.log(lastedTenYears);

// const companyNames = companies.map(
//   (c) => c.name
// );
// console.log(companyNames);

// const testMap = companies.map(
//     (c) => `${c.name} [${c.start} - ${c.end}]`
//   );
// console.log(testMap);

// console.log(ages.map((a) => Math.sqrt(a)));
// console.log(ages.map((a) => (a*2)));
// console.log(ages.map((a) => (Math.sqrt(a)*2)));
// console.log(ages.map((a) => Math.sqrt(a)).map((a) => a * 2));

// console.log(companies.sort((a, b) => (a.start > b.start) ? 1 : -1));
// console.log(companies.sort((a, b) => (a.start < b.start) ? 1 : -1));

// console.log(ages.sort((a, b) => (a > b) ? 1 : -1));

// console.log(ages.reduce((total, age) => total + age, 0));
console.log(companies.reduce((total, age) => total + (age.end - age.start), 0));
