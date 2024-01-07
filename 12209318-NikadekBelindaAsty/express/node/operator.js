const nilai = 90;
const nilaiString = 'a';

const user = {   // object
    name: 'user',
    userType: 'admin'
}

switch (nilaiString){
    case 'a':
        console.log("nilai baik");
        break;
    case 'b':
        console.log("nilai cukup");
        break;
    case 'c':
        console.log("nilai kurang");
        break;
    default:
        console.log("anda beban");
    break; 
}


if (nilai >= 90){
    console.log("A");
}else if (nilai >=75){
    console.log("B");
}else {
    console.log("C");
}


// i-- dikurang belakangan  
// --i dikurang dulu 
// for (let i = 10;  i > 0; i--) {
//     console.log(i);
// }
// n = 0;
// for (let i = 0;  i < 10; ++i) {
//     console.log(++n);
// }

// console.log("---------------------------");
// n = 0;
// for (let i = 0;  i < 10; ++i) {
//     console.log(n++);
// }

const array = [1, 5, 9, 11];

console.log ("cara 1");
array.forEach(val => console.log(val));

// for (const value in array){
//     console.log(value);
// }
console.log ("cara 2");
for ( let i = 0; i< array.length; i++ ) {
    console.log( array[i])
}

console.log ("while");
let i = 0;
while ( i < array.length ) {
    console.log( array[i]);
    i++;
}

console.log (" do-while");
let a = 0;
do {
    console.log( array[a]);
    a++;
}while ( a < array.length )
// do-while perlu dieksekusi minimal sekali 

// looping array dengan object



// console.log('filter');
const students = [{
        nama: 'Ayes',
        nilai: 90
    },
    {
        nama: 'Asty',
        nilai: 100
    },
    {
        nama: 'Fadia',
        nilai: 90
    }
];

// ... berfungsi untuk => spread operator ( property diambil terus ditaruh)
const underperformingStudents = students.filter(student => student.nilai <= 75);
console.log(underperformingStudents);

console.log ("Map");
console.log ("with ternary");
const studentsWithGrade = students.map(student => {
    return {
        ...student,
      //  membuat grade dari ternary
        grade: student.nilai >= 90 ?  "A" : student.nilai >= 75 ? "B" : student.nilai == 70 ? "C" : "anda beban",
    };
});
console.log(studentsWithGrade);


console.log("with if else");

const studentsAndGrade = students.map(student => {
    let grade;
        if (student.nilai >= 90){
            grade = 'A';
        }else if (student.nilai >=75){
            grade = 'B';
        }else {
            grade = 'C';
        }
    return {
        ...student,
        grade,
    };
});
console.log(studentsAndGrade);


const totalNilai = students.reduce((total, student) => total + student.nilai ,0);
console.log('Total Nilai :', totalNilai);
console.log('rata-rata nilai :', totalNilai / students.length);


const cart = [
    {
        namaProduk: 'Kaos Kaki',
        harga: 10000,
        checked: true,
    },
    {
        namaProduk: 'sepatu',
        harga: 100000,
        checked: false,
    }
];


const hitung = (cart) => {
    const hitungDiskon = cart.map((cart) => {
        const diskon = cart.harga * 0.1 ;
        return {
            ...cart,
            HargaSetelahDiskon: diskon,
        };
    }); 
    return hitungDiskon;
};

const hasil = hitung(cart);
console.log(hasil);

const totalHarga = cart.reduce((total, produk) => produk.checked ? total = produk.harga : total ,0)
console.log('Total harga :', totalHarga);

const grade = [100, 50, 78, 11, 89, 500];
grade.sort ((a, b) => a > b ? 1 : -1);
cart.sort ((a, b) => a.harga < b.harga ? 1 : -1);
console.log(grade);
console.log(cart)

const cari = cart.find(produk => produk.namaProduk == 'Kaos Kaki')
console.log('Product :', cari);

// first class function / higher order function 
// pure function 

const variabelFungsi = () => {
    console.log('i am a function');
}

const fungsi2 = (message) => {
    console.log(message);
}

function callFunction (aFunction){
    aFunction('ini message');
}

callFunction(variabelFungsi);
callFunction(fungsi2);

const multiplyByTwo = (number) => {
    console.log('Kali dua :', number*2);
}

multiplyByTwo(20);

// buatlah sebuah fungsi javaScript yang menggunakan map untuk mengembalikan rata-rata nilai siswa.

const siswa = [
    { 
        nama: "John",
        umur: 20,
        nilai: [90, 85, 88]
    },
    { 
        nama: "Alice",
        umur: 22,
        nilai: [75, 80, 92]
    },
    { 
        nama: "Bob",
        umur: 21,
        nilai: [81, 91, 78]
    }
]

const rataNilai = (siswa) => {
    const RataRataNilaiSiswa = siswa.map((student) => {
        const jumlah = student.nilai.reduce((a, b) => a + b, 0);
        const average = jumlah / student.nilai.length;
        return {
            ...student,
            RataRataNilaiSiswa: average,
        };
    });
    return  RataRataNilaiSiswa;
};

const RataNilaiSiswa = rataNilai(siswa);
console.log(RataNilaiSiswa);


// reduce mengakumulasi data / menambah data (sum)

// {[]} -> object
// [{}] -> array

