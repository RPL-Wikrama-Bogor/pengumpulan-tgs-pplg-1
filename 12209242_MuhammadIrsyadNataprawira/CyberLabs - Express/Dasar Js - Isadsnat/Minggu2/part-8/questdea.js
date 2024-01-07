// 1. Buatlah perulangan dari satu variabel array 
// contoh

const data = [5, 5, 2]
// loop data...
// total nilai adalah 10 karena 5 + 5 + 2 = 10

// Buat dalam for, while dan do while
// For 
console.log('Using For')
let totalFor = 0

for (let i = 0; i < data.length; i++){
    totalFor += data[i]
}
console.log(`Total nilai adalah ${totalFor} karena ${data[0]} + ${data[1]} + ${data[2]} = ${totalFor}`);

// -------------- //
console.log('');
// -------------- //

// While 
// Write your code here ^_^
console.log('Using While')
const dataSec = [5, 10, 2]
let totalSec = 0
let j = 0

while (j < dataSec.length) {
    totalSec += dataSec[j]
    j++
}
console.log(`Total nilai adalah ${totalSec} karena ${dataSec[0]} + ${dataSec[1]} + ${dataSec[2]} = ${totalSec}`);

// -------------- //
console.log('');
// -------------- //

// Do While
// Write your code here ^_^
console.log('Using Do While')
let k = 0
let totalThird = 0
const dataThird = [6, 2, 1]

do {
    totalThird += dataThird[k]
    
    k++
} while (k < dataThird.length)

console.log(`Total nilai adalah ${totalThird} karena ${dataThird[0]} + ${dataThird[1]} + ${dataThird[2]} = ${totalThird}`);
