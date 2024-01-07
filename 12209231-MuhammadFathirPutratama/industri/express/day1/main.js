// // const nilai = 90;
// // const nilaiString = "D";


// // switch(nilaiString){
// //     case 'A':
// //     console.log('nilai anda bagus');
// //     break;
// //     case 'B':
// //     console.log('nilai nya b aja');
// //     break;
// //     case 'C':
// //     console.log('nilainya kurang');
// //     break;
// //     default:
// //     console.log('rill dongo');
// //     break;
// // }


// // n = 0;

// // for(let i = 0;i < 10; ++i){
// //     console.log(++n);
// // }

// // console.log('-----------------------------------------------');

// // n = 0
// // for (let i = 0; i < 10;++i){
// //     console.log(n++);
// // }

// const array = [1, 5, 9, 11];
// // for( let i = 0; i < array.length; i++){
// //     console.log(array[i]);
// // }

// // array.forEach(val =>{
// //     console.log(val);
// // }) 
// let i = 0;

// do{
//     console.log(array[i]);
//     i++;
// }
// while(i < array.length)

// while( i < array.length){
//     console.log(array[i]);
//     i++;
// }

// const students = [
//     {
//         nama: 'Yuli',
//         nilai: 90
//     },
//     {
//         nama: 'japar',
//         nilai: 70
//     },
//     {
//         nama: 'toro',
//         nilai: 84
//     },
//     {
//         nama: 'hendra',
//         nilai: 87
//     }
// ];

const multiply = 10;

const multiplyByTwo = (number) => {
   console.log(number * multiply)
}

multiplyByTwo(50);

 const variableFungsi = () => {
    console.log("i'm a function");
 }
// const underPerformingStudents = students.filter(student => student.nilai <= 75);
// console.log(underPerformingStudents);

// const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
// console.log('totalNilai', totalNilai);

// const cart =[
//     {
//         namaProduk: 'Kaos kaki',
//         harga: 10000,
//         Checked: true
//     },
//     {
//         namaProduk: 'sepatu',
//         harga: 100000,
//         Checked: false
//     },
//     {
//         namaProduk: 'Hoodie',
//         harga: 500000,
//         Checked: true
//     },
// ];

// const totalHarga = cart.reduce((total, produk) => produk.Checked ? total + produk.harga : total,0);
// console.log('totalHarga', totalHarga);

// const nilai = [100, 50, 78, 11, 89, 500];

// nilai.sort((a, b) => a > b ? 1 : -1);
// cart.sort((a, b) => a.harga < b.harga ? 1 : -1);

// const product = cart.find(produk => produk.namaProduk == 'sepatu');

// console.log('product', product ?? 'Product tidak di temukan');
// nilai.sort((a, b) => {
//     if( a < b){
//         return -1
//     }

//     if(a > b){
//         return 1
//     }
// })

// const studentsWithGrade = students.map(student =>{
// let grade;

//     if(student.nilai >= 90){
//         grade = 'A';
//     }else if(student.nilai >= 80){
//         grade = 'B';
//     }else{
//         grade = 'C';
//     };


//     return {
//         ...student,
//         grade,
//     };

    
// });

// console.log(studentsWithGrade);