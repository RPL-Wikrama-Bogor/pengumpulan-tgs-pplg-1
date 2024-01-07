// Array
//Simplenya Array adalah kumpulan dari berbagai data, Array itu seperti List
// kalian bisa menampung banyak data pada satu variabel array

// Contoh

let animals = ["lion", "cat", "tiger", "fish"]
console.log(animals)

// -------------- //
console.log(' ')
// -------------- //

// data array itu bebas
let bebas = [1, false, "Kata kata", undefined, [] + {} ]
console.log(bebas)

// -------------- //
console.log(' ')
// -------------- //

// array lebih bagus kalau diisi hanya satu tipe data, dan satu tujuan.
// Cara mengakses salah satu elemen array itu cukup dengan indexing
// index tu dimulai dari 0

let index = [1, 2, 3]
const indexing = index[0]
console.log({indexing}) // Output : 1 
// itu di kurung { } itu biar jadi object

// -------------- //
console.log(' ')
// -------------- //

/* 
MACAM-MACAM ARRAY METHOD
length
push()
pop()
shift()
unshift()
splice()
slice()
*/

// length akan mereturn nilai total element / item pada array
let hewan = ["gajah", "jerapah"]
// console.log(hewan.length) //2

// let angka = [3,2,1,4,5,6,7]
// console.log(angka.length) //7

let orang = ["mamat", "martin"];
console.log('Push Method -> Nambahin agus, resel');
orang.push("agus", "resel");
console.log(orang); //["mamat", "martin", "agus"]
// method push() itu buat nambah element di paling kanan
console.log('Pop method -> Hapus element paling kanan - resel');
orang.pop()
console.log(orang)
// pop() buat hapus element di paling kanan
console.log('Shift method hapus element paling kiri - mamat');
orang.shift()
console.log(orang);
// shift() ngehapus element di paling kiri
console.log('Unshift method nambah element paling kiri ')
orang.unshift('blabalbla')
console.log(orang);
// unshift() nambah element di paling kiri atau element pertama

console.log(' ');

/* 
method splice berfungsi bisa menambahkan data, bisa menghapus data pada array, bisa dua duanya sekaligus tergantung isi parameter yang kalian berikan pada splice
contoh .splice(0,1,"gajah", "macan") 
simplenya .splice(param1, param2, ...param-sisanya) //...berarti parameternya bisa ada banyak data
parameter pertama sebagai penentuan posisi mau di index ke berapa
parameter kedua sebagai penentuan mau menghapus berapa data/elemen/item (bisa juga ga ngehapus apa apa kalau di kasih nilai 0)
parameter sisanya, itu untuk nambahin data ke dalam array, jumlahnya bisa banyak
*/
//contoh menghapus 1 item dari index nomor 1
let hewani = ["marmut", "kucing", "tikus"];
hewani.splice(1,1);
console.log(hewani); //["marmut", "tikus"]

//contoh menambahkan 1 item tanpa menghapus apa apa, dari index nomor 1
let hewans = ["marmut", "kucing", "tikus"];
hewans.splice(1,0,"gajah");
console.log(hewans); //["marmut", "gajah", "kucing", "tikus"]

//contoh menambahkan 1 item dan menghapus 2 item, dari index nomor 1
console.log('Splice method');
let hewanLagi = ["marmut", "kucing", "tikus"];
hewanLagi.splice(1,2,"gajah");
console.log(hewanLagi); //["marmut", "gajah"]
//contoh menambahkan 3 item dan menghapus 2 item, dari index nomor 1
let hewan2 = ["marmut", "kucing", "tikus"];
hewan2.splice(1,2,"gajah", "jerapah", "singa");
console.log(hewan2); //["marmut", "gajah", "jerapah", "singa"]

// -------------- //
console.log(' ')
// -------------- //

// ada method slice() untuk motong array 
console.log('Slice method');
// cara penggunaannya itu -> array.slice()
// contoh
//contoh memotong dari index 1 sampai sebelum index ke 3
//dengan kata lain
//contoh memotong dari index 1 sampai index 2
let beforeSlicedHewan = ["gajah", "jerapah", "badak", "singa"];
let slicedHewan = beforeSlicedHewan.slice(1,3);
console.log(slicedHewan) //["jerapah", "badak"]

// -------------- //
console.log(' ')
// -------------- //

// Array multidimensi
// console.log('Array multidimensi');
let dataArray = [
    [1,2,3],
    [4,5,6]
]
console.log(dataArray);
// console.log(dataArray.length);
// console.log(dataArray[0][1]);
// console.log(dataArray[1][1]);

// Keluarkan semua data multidimensi itu pake nested for
// for (let i = 0; i < dataArray.length; i++){
//     for (let j = 0; j < dataArray[i].length; j++){
//         console.log(dataArray[i][j])
//     }
// }
