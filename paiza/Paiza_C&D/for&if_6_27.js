let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");

let hairetsu = lines[0].split(" ");
let numberOfPeople = hairetsu[0];
let baisuX = hairetsu[1];
let baisuY = hairetsu[2];

let count = 1;

function seiri() {
    if (count % baisuX === 0 && count % baisuY !== 0) {
        console.log("A");
    } else if (count % baisuY === 0 && count % baisuX !== 0) {
        console.log("B");
    } else if (count % baisuX === 0 && count % baisuY === 0) {
        console.log("AB");
    } else {
        console.log("N");
    }
}

for (let i = 0; i < numberOfPeople; i++) {
    seiri();
    count++;
}
