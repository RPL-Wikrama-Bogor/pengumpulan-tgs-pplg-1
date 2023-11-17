const nilai = 90;

// PERCABANGAN / KONDISIONAL
// if (nilai >= 90){
//     console.log('A');
// } else if(nilai>= 75){
//     console.log('B')
// } else{
//     console.log('C')
// }
// 

// SWITCH
// switch sama seperti if else
// menggunakan switch : skenarionya sudah di ketahui(ex)
// menggunakan if else : untuk range
const nilaiString = 'A';
const user = {
    name: 'Ayestha',
    userType: 'Admin', //admin, student
}

// switch (user.userType){
//     case 'Admin':
//         console.log('Nilai anda Sangat Baik');
//         break;
//     case 'Student':
//         console.log('Nilai anda Baik');
//         break;
//         // menggunakan default jika nilai case diatas tidak ada yang sesuai
//     default:
//         throw Exception('Tipe user tidak di temukan');
//         break;
// }

// FOR / PERULANGAN
// i-- diambil dulu
// --i di kurangin dulu baru diambil
// let n = 0;
// for (let i = 0; i < 10; ++i){
//     console.log(++n);
// }

// console.log('------------------------------------------')

// n = 0;
// for (let i = 0; i < 10; i++){
//     console.log(n++);
// }

// ARRAY

// const students = [
//     {
//         nama: 'Ayes',
//         nilai: 74
//     },
//     {
//         nama: 'Dimas',
//         nilai: 100
//     },
//     {
//         nama: 'Chanyeol',
//         nilai: 50
//     },
// ];

// // MAP 
// const studentWithGrade = students.map(student => {
//     // cara mas farhan
//     if (student.nilai >= 75) {
//         let grade;
    
//         if (student.nilai >= 90) {
//           grade = 'A';
//         } else if (student.nilai >= 75) {
//           grade = 'B';
//         } else {
//           grade = 'F';
//         }
//         return {
//           ...student,
//           grade,
//         };
//       }
//       return student;
//     return{
    //  titik tiga untuk Spread Operator = propertynya diambil terus di taruh
//     //     ...student, 
//     //     // grade: student.nilai >= 90 ? "A" : student.nilai >= 75 ? "B" : student.nilai == 70 ? "C" : "Belajar Lagi",
//     //     grade,
//     // };
// });

// console.log(studentWithGrade);
// fungsi filter untuk memfilter elemen-elemen dari suatu koleksi (seperti daftar, array, atau objek iterable lainnya) berdasarkan kriteria tertentu. 
// const underperformingStudents = students.filter(student => student.nilai <= 75);
//     console.log(underperformingStudents);

// const array = [1, 5, 9, 11];

// jika didalam arraynya ada function
// array.forEach(val => {
//     console.log(val);
// })

// // cara mas farhan
// array.forEach(val => console.log(val));

// // cara kakang
// for (let i = 0; i < array.length; i++){
//     console.log(array[i]);
// }

// WHILE
// let i = 0;
// do-while perlu di seleksi minimal sekali
// do {
//     console.log(array[i]);
//     i++;
// } while (i < array.length)

// while (i < array.length) {
// console.log(array[i]);
//     i++;
// }

// REDUCE 
// const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
// console.log(totalNilai);
// console.log('rata-rata nilai', totalNilai / students.length);

// // FIRST CLASS FUNCTION / HIGHER ORDER FUNCTION
// const cart = [
//     {
//         namaProduk: 'Kaos Kaki',
//         harga: 10000,
//         checked: true,
//     },
//     {
//         namaProduk: 'Sabun',
//         harga: 15000,
//         checked: true,
//     },
//     {
//         namaProduk: 'Sepatu',
//         harga: 150000,
//         checked: false,
//     },
// ];

// const totalHarga = cart.reduce((total, produk) => produk.checked ? total = produk.harga : total, 0);
// console.log(totalHarga);

// const grade = [100, 50, 78, 11, 89, 500];
// grade.sort((a, b) => {
//     if (a < b) {
//         return -1
//     }
    
//     if (a > b) {
//         return 1
//     }
// })
// console.log(grade);

// cart.sort((a, b) => a.harga < b.harga ? 1 : -1);

// const produk = cart.find(produk => produk.namaProduk === 'Kaos');
// console.log(produk ?? 'Produk tidak di temukan');

// // PURE FUNCTION

// const multiplyByTwo = (number) => {
//     console.log('Kali dua : ', number * 2);
// }

// multiplyByTwo(20);

// const variableFungsi = () => {
//     console.log('i am a function');
// }

// const fungsi2 = (message) => {
//     console.log(message);
// }

// function callFunction (aFunction){
//     aFunction('Ini message');
// }

// callFunction(variableFungsi);
// callFunction(fungsi2);

// TUGAS 
//buatlah sebuah fungsi JavaScript yang menggunakan map untuk mengembalikan rata-rata nilai siswa
// const students = [
//     {
//         nama: "Kayla",
//         umur: 10,
//         nilai: [90, 85, 88]
//     },
//     {
//         nama: "Ayestha",
//         umur: 17,
//         nilai: [75, 80, 92]
//     },
//     {
//         nama: "Bachrie",
//         umur: 20,
//         nilai: [88, 91, 78]
//     },
// ];
// const hitung = (students) => {
//     const rataStudents = students.map((student) => {
//         const jumlah = student.nilai.reduce((a, b) => a + b, 0);
//         const rataStd = jumlah / students.length;
//         return {
//             ...student,
//             averageNilai: rataStd,
//         };  
//     });
//     return rataStudents;
// };

// const averageNilaiStd = hitung(students);
// console.log(averageNilaiStd);

// buatlah sebuah fungsi javascript yang menggunakan map untuk mengembalikan daftar
// barang dan harga diskon 10%
const products = [
    {
        name: "Sweater",
        price: 150000
    },
    {
        name: "T-Shirt",
        price: 50000
    },
    {
        name: "Kemeja",
        price: 30000
    },
];

const Count = (products) => {
    const diskonProduct = products.map((product) => {
        const diskon = product.price * 0.1;
        return {
            ...product,
            priceAfterDiskon: diskon,
        };  
    });
    return diskonProduct;
};

const result = Count(products);
console.log(result);

// cara menghapus/mengubah/menambahkan item dalam array menggunakan splice
let angka = [1, 2, 3, 4, 5];
angka.splice(2, 1); //menghapus
angka.splice(2, 0, 10, 11); //mengubah
angka.splice(2, 0, 10);

// perbedaan array splice dan slice
// splice = tidak menciptakan array yang baru
// slice = menciptakan array yang baru

// cara mengubah posisi item dalam array
let number = [1, 2, 3, 4, 5];
angka.shift(); //menghapus angka di depan
angka.push(1); //menambahkan angka dibelakang

// cara menjumlahkan item pada array menggunakan function _sum dan function reduce
// perbedaan map dan filter
// map = memodifikasi isi array
// filter = 