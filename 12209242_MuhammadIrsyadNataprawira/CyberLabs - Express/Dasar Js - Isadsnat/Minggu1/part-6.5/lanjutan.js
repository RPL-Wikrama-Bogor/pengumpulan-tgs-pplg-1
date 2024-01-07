// Lanjutan looping phase 0 - 6.5
// Counter pada looping

let i = 0

while (i < 100){
    console.log(i);

    i += 5 // disini counternya ditentukan besarnya berapa
}

// ----------- //
console.log(' ')
// ----------- //

//disini kita akan belajar merge -> if else
let j = 0
while (j < 50){
    // Process Genap / Ganjil
    if (j % 2 != 0){
        console.log(`${j} adalah Ganjil`)
    } else {
        console.log(`${j} adalah Genap`)
    }
    j++
}

// ----------- //
console.log(' ')
// ----------- //

// Kenapa modulus bisa mencari kelipatan?
// Karena modulus operator adalah sisa bagi misal :
// 3 / 2 hasilnya akan koma, dan 3 % 2 hasilnya 1
// maka bisa dibilang apapun angkanya kalau dimodulus apapun angkanya dan hasilnya 0 
// maka itu adalah kelipatannya
// c/o n % 3 === 0, maka ini adalah kelipatan 3
// c/o n % 5 === 0, maka ini adalah kelipatan 5
// c/o n % 2 === 0, maka ini adalah kelipatan 2 dan 2 bisa menentukan ganjil atau genap

// Problem Fizzbuzz
// jika i adalah kelipatan 3 maka cetak fizz
// jika i adalah kelipatan 5 maka cetak buzz
// jika i adalah kelipatan 3 dan 5 maka cetak fizzbuzz
// jika bukan keliapatan diatas maka tampilkan angka

for (let i = 1; i < 50; i++){
    if(i % 3 === 0 && i % 5 === 0){
        console.log('fizzbuzz')
    }else if (i % 3 === 0 && i % 5 !== 0) {
        console.log("fizz")
    } else if (i % 5 === 0 && i % 3 !== 0){
        console.log("buzz")
    } else {
        console.log(i)
    }
}

// ----------- //
console.log(' ')
// ----------- //

// Pada looping ada break dan continue.
// break membuat loop berhenti sepenuhnya
// continue membuat loop skip di iterasi atau kondisi tertentu

for (let i = 0; i < 10; i++) {
    if (i === 7) {
        continue;
    }
    console.log(i)
}