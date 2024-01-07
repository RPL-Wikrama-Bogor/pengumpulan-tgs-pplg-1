// const nilai = 80;
// const nilaiString ='A';

// switch (nilaiString){
//     case 'A':
//         console.log('nilai anda sangat baik');
//         break; //pemberhentian function saat suatu fungsi terpenuhi 
//     case 'B':
//         console.log('nilai anda baik');
//         break; 
//     default:
//        throw Exception('anda harus belahar lagi');
//         break;
// }

// const user{
//     name: 'Jeno',
//     userType: 'admin',
// }

//------------------------------------------------------------------------------------------------------

// switch (user.userType){
//     case 'admin':
//         console.log('nilai anda sangat baik');
//         break; //pemberhentian function saat suatu fungsi terpenuhi 
//     case 'student':
//         console.log('nilai anda baik');
//         break; 
//     default:
//         throw Exception('anda harus belahar lagi');
//     break;
// }

//-------------------------------------------------------------------------------
// n = 0;
// for(let i = 0;i < 10;++i){
//     console.log(++n);
// }

// console.log('-----------------------------------------------');

// n = 0;
// for(let i = 0;i < 10;++i){
//     console.log(n++);
// }

// const array = [1, 5, 9, 11];

// let i = 0;
// do {
//     console.log(array[i]);
//     i++;
// } while (i < array.length)

// while (i < array.length){
//     console.log(array[i]);
//     i++;
// }

//while di pakai ketika ingin terus menerus di ulang, contoh: 
//for di pakai


//programmer
// array.forEach(val => console.log(val));

// array.forEach(val => {
//     //
//     //
//     //
//     console.log(val);
// });

//tradisional
// for(let i = 0; i < array.length; i++){
//     console.log(array[i]);
// }

//cara menentukan memakai switch atau if else:
//switch: nilai udah di ketahui | if else: nilai berupa range

//running di vs ctrl + alt + n

//-----------------------------filter----------------------------

// const students = [
//     {
//         nama: 'minghao',
//         nilai: 80
//     },
//     {
//         nama: 'wonu',
//         nilai: 100
//     },
//     {
//         nama: 'woozi',
//         nilai: 70
//     },
//     {
//         nama: 'dk',
//         nilai: 40
//     },
// ];

// const underperfomingStudents= students.filter
// (student => student.nilai <= 75);

// // const underperfomingStudents= students.filter
// // (student => student.nama == 'minghao');
//memanggil hanya minghao saja

// console.log(underperfomingStudents );

//===================== map ==================
// const students = [
//     {
//         nama: 'minghao',
//         nilai: 80
//     },
//     {
//         nama: 'wonu',
//         nilai: 100
//     },
//     {
//         nama: 'woozi',
//         nilai: 70
//     },
//     {
//         nama: 'dk',
//         nilai: 40
//     },
// ];

// //spread operator

// const studentsWithGrade = students.map(student => {
//     return{
//         ...student, //... artinya spread
//         grade: student.nilai >= 75 ? "A" : "B",
//     };
// });

// console.log(studentsWithGrade);

const students = [
    {
        nama: 'Agus',
        nilai: 74,
        kelas: 11,
    },
    {
        nama: 'Irsyad',
        nilai: 100,
        kelas: 11,
    },
    {
        nama: 'Aip',
        nilai: 50,
        kelas: 11,
    },
    {
        nama: 'Asep',
        nilai: 10, 
        kelas: 11,
    }
];

const studentsWithGrade = students.map( student => {
    let grade;
    
    if(student.nilai >= 90) {
        grade = 'A';
    }else if (student.nilai >= 75) {
        grade = 'B';
    }else {
        grade = 'F';
    }
    
   return {
     ...student, 
     // ... student itu sama dengan 
     // student.nama,
     // student.nilai,
     grade,
   };
});

console.log(studentsWithGrade);


//---------------------------- jika ingin memanggil satu nama saja ----------------------------
// const studentsWithGrade = students.map( student => {
        
//         if(student.nama = 'minghao') {
//             let grade;
        
//             if(student.nilai >= 90) {
//                 grade = 'A';
//             }else if (student.nilai >= 75) {
//                 grade = 'B';
//             }else {
//                 grade = 'F';
//             }
//         }

//        return student;
//     });
    
//     console.log(studentsWithGrade);

console.log('--------------------------------------------------------------------');
// multiplyByTwo(50);

const variabelFungsi = () => {
    console.log('i am a function');
}

const fungsi2 = (message) => {
    console.log(message);
}

function callFunction (aFunction){
    aFunction('ini message');
}

callFunction(fungsi2);

console.log('-------------------------------------------------------------------------');

const cart = [
    {
        namaProduk: 'kaos',
        harga: 30000,
        checked: true,
    },
    {
        namaProduk: 'lap',
        harga: 2000,
        checked: false,
    },
    {
        namaProduk: 'sendal',
        harga: 31000,
        checked: true,
    },
]
const totalHarga = cart.reduce((total, produk) => produk.checked ? total + produk.harga : total,0);

console.log('totalHarga',totalHarga);

const nilai = [100, 50, 78, 11, 89, 500];
nilai.sort((a,b) => a > b ? 1 : -1);
cart.sort((a, b) => a.harga > b.harga ? 1 : -1);

console.log(nilai);
console.log(cart);

console.log('--------------------------------------------------------------------');

const product = cart.find(produk => produk.namaProduk === 'kaos');
console.log('product',product ?? 'Product tidak ditemukan');
