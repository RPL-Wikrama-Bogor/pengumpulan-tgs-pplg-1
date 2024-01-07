// 1. Melakukan Looping Menggunakan While
console.log('Soal 1 - Counter maju mundur -> While')
// Problem
// Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax while. 
// Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk membuat suatu looping yang menghitung maju dan 
// menghitung mundur. Jangan lupa tampilkan di console juga judul 'LOOPING PERTAMA' dan 'LOOPING KEDUA'.
//tampilkan output yang menunjukan kalau looping itu maju pada looping pertama dan mundur pada looping kedua

console.log('While - Looping Maju') 
let i = 1
while (i < 10){
    console.log(`${i} - Maju`)

    i++
}

console.log('While - Looping Mundur')
let j = 10
while (j >= 1){
    console.log(`${j} - Mundur`)

    j--
}

// ----------- //
console.log(' ')
// ----------- //

// 2. Melakukan Looping Menggunakan For
console.log('Soal 2 - Counter maju mundur -> For')
// Problem
// Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax while. 
// Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk membuat suatu looping yang menghitung maju dan 
// menghitung mundur. Jangan lupa tampilkan di console juga judul 'LOOPING PERTAMA' dan 'LOOPING KEDUA'.
//tampilkan output yang menunjukan kalau looping itu maju pada looping pertama dan mundur pada looping kedua

console.log('For - Looping maju')
for (let i = 1; i <= 5; i++){
    console.log(`${i} - Maju`)
}

console.log('For - Looping mundur')
for (let i = 5; i >= 1; i--){
    console.log(`${i} - Mundur`)
}

// ----------- //
console.log(' ')
// ----------- //

// 3. Angka Ganjil dan Genap
// Hint: kamu akan menggunakan kondisional juga di kasus ini.
console.log('Soal 3 - Counter Ganjil dan Genap')
// Problem
// Buatlah sebuah perulangan 1 - 100 dengan pertambahan counter sebanyak 1
// Di dalam perulangan, periksa setiap angka counter:
for (let counter = 1; counter <= 100; counter++) {
    if (counter % 2 === 0) {
      console.log(counter + " adalah angka GENAP")
    } else {
      console.log(counter + " adalah angka GANJIL")
    }
  }
  console.log('Done!')
// Apabila angka counter adalah angka genap, tuliskan GENAP
// Apabila angka counter adalah angka ganjil, tuliskan GANJIL

// ----------- //
console.log(' ')
// ----------- //

//4. counter kelipatan
// Buatlah 3 perulangan baru dari 1 - 100, dengan pertambahan counter sebesar 2, 5, dan 9.
// Pada 3 perulangan baru ini periksa setiap angka counter:
console.log('Counter 2:')
for (let i = 1; i <= 100; i += 2) {
    if (i % 3 === 0) {
        console.log(`${i} - Kelipatan 3`)
    }
}

console.log('\nCounter 5:');
for (let i = 1; i <= 100; i += 5) {
    if (i % 6 === 0) {
        console.log(`${i} - Kelipatan 6`)
    }
}

console.log('\nCounter 9');
for (let i = 1; i <= 100; i += 9) {
    if (i % 10 === 0) {
        console.log(`${i} - Kelipatan 10`)
    }
}
console.log('Done!');
// Apabila bukan kelipatan yang ditentukan tidak perlu menuliskan apa-apa
// Apabila angka counter adalah kelipatan 3 dengan pertambahan 2, kelipatan 6 dengan pertambahan 5, dan kelipatan 10 dengan pertambahan 9, tuliskan:
// "3 kelipatan 3"dan seterusnya.

// ----------- //
console.log(' ')
// ----------- //

// 5. Bintang asteriks
// Problem buatlah bintang seperti berikut
// let input = 5
//hasilnya
// //*
// //**
// //***
// //****
// //*****
console.log("Membuat segitiga dengan looping");
let input = 5
for (let i = 1; i <= input; i++) {
    let star = ''
  for (let j = 1; j <= i; j++) {
    star += ' *'
  }
  console.log(star)
}
