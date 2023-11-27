// const nilai = 90;

// if(nilai >= 90) {
//     console.log('a')
// } else if (nilai <=75 ){
//     console.log('b')
// } else {
//     console.log('C')
// }


// const nilai = 10 ;

// const nilaiString = 'C';

// switch (nilaiString) {
//     case('A'):
//         console.log('Bagus');
//     break;
//     case('B'):
//         console.log('lumayan');
//     break;
//     case('C'):
//         console.log('remed');
//     break;
// }

// let n = 0;
// for (let i = 0; i < 10;++ i ) {
//     console.log(++n);
// }

// console.log('------------------')

// const array = [1, 5, 9, 10];

// for(let i = 0; i < array.length; i++){
//     console.log(array[i]);
// }


// let i = 0;

// do {
//     console.log(array[i]);
// } while (i < array.length)  

// while (i < array.length) {
//     console.log(array[i])
//     i++;
// }


const student = [
  {
      nama: 'p',
      nilai: 90,
  },
  {
      nama: 's',
      nilai: 87,
  },
  {
      nama: 'g',
      nilai: 90,
  }
];

const underNilaiStudent = student.map(student => {
  let grade;
  if (student.nilai >= 90) {
      grade = 'A';
  } else if (student.nilai >= 75) {
      grade = 'B';
  } else {
      grade = 'C';
  }
  return {
      ...student,
      grade,
  }
})
// (pljr => pljr.nama == 's');
console.log(underNilaiStudent);