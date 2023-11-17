const x = [3, 4, 5]

let num1 = 0
let num2 = 0
let num3 = 0

for (let i = 0; i < x.length; i++) {
    if (i === 0) {
        num1 += x[i]
    } if (i === 1) {
        num2 += x[i]
    } else {
        num3 += x[i]
    }
}

let result = num1 + num2 + num3

console.log(`Hasil: ${num1} + ${num2} = ${num3}`);