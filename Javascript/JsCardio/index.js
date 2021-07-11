const numbers = [1, -1, 2, 3];

const filtered = numbers.filter((n) => {
  return n > 0;
});

console.log(filtered);

const mapped = numbers.map((n) => {
  if (n < 0) {
    return n * -1;
  } else {
    return n;
  }
});

console.log(mapped);
