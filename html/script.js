console.log("Hello World");
x = 5;
console.log(x);

a = "Hello";
b = "World";
console.log(a + " " + b);

let array = [3, 4, "hello", [5, 6]];
console.log(array);
c = "5";
d = 5;
console.log(c + d);

const add = function (a, b, c) {
  c = a + b;

  return c;
};
console.log(add(5, 6));

console.log(String.prototype);
console.log(Array.prototype);
let n = "Supun Mahima";
y = n.split("").join(" ");
console.log(y);

const mostRepeated = (arr) => {
  [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
  const count = {};
  for (let i = 0; i < array.length; i++) {
    let num = arr[i].toString();
    if (counts.hasOwnProperty(num)) {
      counts[num]++;
    } else {
      counts[num] = 1;
    }
  }
};
console.log(counts);
