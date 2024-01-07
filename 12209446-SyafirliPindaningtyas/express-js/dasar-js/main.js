//const nilai = 60;
//const user = {
   // name: 'Farhan',
    //userType: 'Admin',
//}

// let n = 0;
// for (let i = 0;i < 10;++i){
//     console.log(++n);
// }
// console.log (
//     '--------------------------'
// );

// n = 0;
// for (let i = 0;i < 10;++i){
//     console.log(n++);
// }



//switch (nilaiString){
    //case 'A':
        //console/log('Nilai anda sangant baik');
    //break;
    //case 'B':
        //console/log('Nilai anda baik');
   // break;
    //case 'C':
        //console/log('Nilai anda kurang');
    //break;
   //default:
       // console/log('anda beban keluarga');
    //break;

//}

//const array = [1, 5, 9, 11];


// // while//
// let i = 0;
// while (i < array.length) {
//     console.log(array[i]);
//     i++;
// } while (i < array.length)

// while ( i < array.length){
//     console.log(array[i]); 
//     i++;
// }
//------for-------//
// array.forEach(val => console.log(val));

// array.forEach(val => {
//     console.log(val)
// });

// for (let i = 0; i < array.length; i++) {
//     console.log(array[i])
// }

// const students= [
//     {
//         nama: 'Agus',
//         nilai: 74
//     },
//     {
//         nama: 'jeno',
//         nilai: 80
//     },
//     {
//         nama: 'el',
//         nilai: 50
//     },
//     {
//         nama: 'ellen',
//         nilai: 10
//     },
// ];

// const underperformingStudents = students.filter
//     (student => student.nama == 'el');

// console.log (underperformingStudents);


//MAP//
// const students= [
//     {
//         nama: 'Agus',
//         nilai: 74
//     },
//     {
//         nama: 'jeno',
//         nilai: 80
//     },
//     {
//         nama: 'el',
//         nilai: 50
//     },
//     {
//         nama: 'ellen',
//         nilai: 10
//     },
// ];
//const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
    //console.log ('totalNilai', totalNilai)
// const studentsWithGrade = students.map (student =>{
//     if (student.nilai >= 75) {
        
//     let grade; 


//     if (student.nilai >= 90) {
//         grade = 'A';
//     } else if (student.nilai >= 75) {
//         grade = 'B';
//     } else {
//         grade = 'F';
//     }
//     return {
//         ...student, 
//         grade, 
//     };
// }
// });
// console.log(studentsWithGrade);


//-------first-class function / Higher order function---//
//-------- pure function

// const multiply = 2;
// const multiplyByTwo = (number) => {
//     console.log(number * multiply);
// }
// multiplyByTwo(50);

//atau
const multiplyByTwo = (number) => {
    console.log(number * 2);
}
multiplyByTwo(50);
const variabelFungsi = () => {
    console.log ('i am a function');
}
const fungsi2 = (message) => {
    console.log(message);
}
function callFunction (aFunction) {
    aFunction('ini message');
}

callFunction(fungsi2);
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
const nilai = [100, 50, 78, 11,89, 500];
nilai.sort((a, b) => a > b ? 1 : -1);
console.log(nilai);


