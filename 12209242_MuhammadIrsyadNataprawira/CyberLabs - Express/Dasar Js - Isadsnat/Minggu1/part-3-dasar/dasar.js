//cara membuat variabel

var a = "ini a"
let b = "ini b"
const c = "ini c"

//let itu ES6 yang bisa dibilang udah modern. Sedangkan var ini sudah terlalu jadul atau memakai konsep ecma script terdahulu menurutku"

let nama = "Isad"
let umur = 17
let apakahBenar = true
let uang = 10_000_000

//operator aritmatika
let num1 = 10
let num2 = 15
// console.log(num1 + num2)
// console.log(num1 - num2)
// console.log(num1 * num2)
// console.log(num1 / num2)
// console.log(num1 % num2)
//console.log() adalah fungsi bawaan JS untuk menjalankan atau run code js.

let hasilTambah = num1 + num2 
console.log(hasilTambah); //25

hasilTambah = num1 - num2 
console.log(hasilTambah); //-5

hasilTambah = num1 * num2
console.log(hasilTambah); //150

hasilTambah = num1 / num2
console.log(hasilTambah); //0.6666666666666666

hasilTambah = num1 % num2
console.log(hasilTambah); //10

//string juga bisa ditambah namun string tidak bisa dikurang dengan operator aritmatika
let firstName = "Jojo"
let lastName = "Gunawan"
let fullName = firstName + lastName
console.log(fullName)
console.log(firstName + " " + lastName)
console.log(firstName - lastName) // NaN

//alur pembacaan kode itu dari kiri ke kanan dan atas ke bawah
//contoh

let angka = 20
console.log(angka + 10) //30
angka = 10
console.log(angka + 10) //20
angka = false 
console.log(angka + 10) //10

//kenapa 10 ?? karna false itu 0 dan true itu 1, kaya tombol on of di terminal listrik.

//membaca error
//kalau ga error gawat oss.
//contoh

// const hewan = "Kucing"
// console.log(hewan)
//di ubah ke data lain atau data baru. Misal : 
// hewan = "Anjing" // ini bakal error karena const itu data tetap jadi gabisa diganti kaya let.