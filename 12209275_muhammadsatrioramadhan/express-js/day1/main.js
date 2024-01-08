// let n = 0

// for (let i = 0; i < 10; ++i) {
//   console.log(++n);
// }

// console.log('------------------------------');

// n = 0;

// for (let i = 0; i < 10; ++i) {
//     console.log(n++);
//   }

// const array = [1,5,9,11];
// array.forEach(val => {
//     //
//     //
//     //
//     console.log(val);
// })

// const array = [1,5,9,11];

// let i = 0;
// while (i < array.length) {
//     console.log(array[i]);
//     i++;
// }

// const students = [
//   {
//     nama: 'Iyus',
//     nilai: 76,
//   },
//   {
//     nama: 'Yopi',
//     nilai: 100,
//   },
//   {
//     nama: 'Iyus',
//     nilai: 50,
//   },
//   {
//     nama: 'Faridan',
//     nilai: 10,
//   },
// ];

// const totalNilai = students.reduce((total, student) => total + student.nilai,0);
// console.log(totalNilai);
// const studentsWithGrade = students.map((student) => {
//   if (student.nilai >= 75) {
//     let grade;

//     if (student.nilai >= 90) {
//       grade = 'A';
//     } else if (student.nilai >= 75) {
//       grade = 'B';
//     } else {
//       grade = 'F';
//     }
//     return {
//       ...student,
//       grade,
//     };
//   }
//   return student;
// });

// console.log(studentsWithGrade);

// const underperformingStudents = students.filter
//     (student => student.nilai == 50 );

// console.log(underperformingStudents);
const variableFungsi = () => {
    console.log(number*2);
}
const cart = [
    {
        namaProduk: 'Kaos kaki',
        harga: 10000,
        checked: true
    },
    {
        namaProduk: 'Sepatu',
        harga: 100000,
        checked: false
    },
    {
        namaProduk: 'Sabun',
        harga: 6000,
        checked: true
    },
];

const totalHarga = cart.reduce((total, produk) => produk.checked ? total + produk.harga : total , 0);
console.log('Total harga: ', totalHarga);

const nilai = [100,50,78,11,89,500];
nilai.sort((a,b) => a > b ? 1 : -1)
cart.sort((a,b) => a.harga > b.harga ? 1 : -1)
console.log(nilai);

const product = cart.find(produk => produk. namaProduk === 'Kaos kaki');
console.log('product', product ?? 'Produk tidak ditemukan');
