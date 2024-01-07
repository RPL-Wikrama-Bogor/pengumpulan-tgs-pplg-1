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

const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
    
console.log('totalNilai', totalNilai);
console.log('rata-rata nilai', totalNilai / student.length);

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
    //   ... student itu sama dengan 
    //   student.nama,
    //   student.nilai,
     
     grade,
  };
});

console.log(studentsWithGrade);


// ----------------------------------------------
// map

// const students = [
//     {
//         nama: 'Agus',
//         nilai: 74,
//         kelas: 11,
//     },
//     {
//         nama: 'Irsyad',
//         nilai: 100,
//         kelas: 11,
//     },
//     {
//         nama: 'Aip',
//         nilai: 50,
//         kelas: 11,
//     },
//     {
//         nama: 'Asep',
//         nilai: 10, 
//         kelas: 11,
//     }
// ];

// const studentsWithGrade = students.map( student => {
//     let grade;
    
//     if(student.nilai >= 90) {
//         grade = 'A';
//     }else if (student.nilai >= 75) {
//         grade = 'B';
//     }else {
//         grade = 'F';
//     }
    
//   return {
//      ...student, 
     // ... student itu sama dengan 
     // student.nama,
     // student.nilai,
     
    //  grade,
//   };
// });

// console.log(studentsWithGrade);


// ----------------------------------------------
// filter

// const students = [
//     {
//         nama: 'Agus',
//         nilai: 74
//     },
//     {
//         nama: 'Irsyad',
//         nilai: 100
//     },
//     {
//         nama: 'Aip',
//         nilai: 50
//     },
//     {
//         nama: 'Asep',
//         nilai: 10
//     }
// ];

// const underPerformingStudents = students.filter
//     (student => student.nilai <= 70);
    
// const underPerformingStudents = students.filter
//     (student => student.nama == 'Aip');
    
// console.log(underPerformingStudents);


// ----------------------------------------------
// do while

//  const array = [1, 5, 9, 11];
 
//  let i = 0;
//  do {
//      console.log(array[i]);
//      i++;
//  }while (i < array.length);


// --------------------------------------------
// while

//  const array = [1, 5, 9, 11];

//  let i = 0;
//  while(i < array.length) {
//      console.log(array[i]);
//      i++;
//  }


// --------------------------------------------
// foreach


// const array = [1, 5, 9, 11];

// array.forEach(val => {
//     console.log(val);
// });

// atau

// array.forEach(val => console.log(val));

// kalau mengeluarkan array pakai for

// for (let i = 0; i < array.length; i++) {
//     console.log(array[i]);
// }


// ------------------------------------------
// perbedaan ++n dan n ++


//ditambah dulu, baru ditampilin
// let n = 0;
// for ( let i = 0; i < 10; ++i) {
//     console.log(++n);
// }

// console.log ('=========')

//ditampilin dulu, baru ditambah (jd 0 nya tampil)
// n = 0;
// for ( let i = 0; i < 10; ++i) {
//     console.log(n++);
// }
    

// -----------------------------------------


// const user = {
//     name: Aryanti,
//     userType: 'Admin',
// }
// switch (user.userType) {
//     case 'Admin';
//         console.log ('Halo, Admin!');
//         break;
//     case 'Student';
//         console.log ('Selamat Datang!');
//         break;
//     default;
//          throw Exception('Tipe user tidak ditemukan');
//     break;
// }


// -----------------------------------------------------


// const nilai = 60;
// conts nilaiString = 'A';

// switch (nilaiString) {
//     case 'A';
//         console.log ('Sangat baik');
//         break;
//     case 'B';
//         console.log ('Baik');
//         break;
//     case 'C';
//         console.log ('Kurang');
//         break;
//     default;
//          console.log ('Anda beban keluarga');
//     break;
// }


// -------------------------------------------------------
// if else


// const nilai = 90;
//  if (nilai >= 90) {
//     console.log('A');
//  }else if(nilai >= 75){
//     console.log('B');
// }else {
//     console.log('C');
// }