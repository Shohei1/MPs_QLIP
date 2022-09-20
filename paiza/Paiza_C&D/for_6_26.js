let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");

let word = lines[0];

let number = word.length;

let a = "++";

for (let i = 0; i < number; i++) {
    a = a + "+";
}

console.log(a);
console.log(`+${word}+`);
console.log(a);
