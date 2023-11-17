// for
// i++ diambill dulu
// ++i di tambah dulu
console.log('--------for--------');
let n = 0;
for (let i = 0; i < 10; ++i) {
    console.log(++n);
}

console.log('-------------------------------------');
let m = 0;
for (let i = 0; i < 10; ++i) {
    console.log(m++);
}
console.log('------------------for array-------------');
const array = [2, 4, 6, 8];

for (let i = 0; i < array.length; i++) {
    console.log(array[i]);
}
// foreach
console.log('foreach');
array.forEach(val => {
    console.log(val);
});

console.log('while');
let i = 0;
while ( i < array.length) {
    console.log(array[i]);
    i++;
}

console.log('do-while');
// do-while perlu dieksekusi minimal sekali
let a = 0;
do {
    console.log(array[a]);
    a++;
}
while ( a < array.length) {
}

// first class function
// pure function

const variabelFungsi = () => {
    console.log('I am a function');
}

const fungsi2 = (message) => {
    console.log(message);
}

function callFunction(aFunction) {
    aFunction('Ini message');
}

callFunction(variabelFungsi);
callFunction(fungsi2);

// filter, map, reduce, & sort
console.log('filter, map, reduce, sort');
const students = [{
        nama: 'Ayes',
        nilai: 90
    },
    {
        nama: 'Asty',
        nilai: 3
    },
    {
        nama: 'Fadia',
        nilai: 100
    },
    {
        nama: 'Langga',
        nilai: 50
    }
];
const underperformingStudents = students.filter(student => student.nilai == 50);
console.log(underperformingStudents);

// ... = spread operator(mengambil semua property lalu ditaruh), sama saja seperti student.nama & student.nilai
const studentsWithGrade = students.map(student => {
    return{
        ...student,
       grade: student.nilai >= 90 ? 'A' : student.nilai >=  75 ? 'B' : student.nilai >= 50 ? 'C' : 'ANDA BEBAN KELUARGA'
    };
});
console.log(studentsWithGrade);

const totalNilai = students.reduce((total, student ) => total + student.nilai, 0);
console.log('Total nilai: ', totalNilai);
console.log('Rata-rata nilai: ', totalNilai/students.length);


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
cart.sort((a, b) => a.harga > b.harga ? 1 : -1);
console.log(cart);
const cari = cart.find( produk => produk.namaProduk === 'Asty');
console.log(cari ?? 'Produk tidak ditemukan');

const nilai = [100, 50, 78, 11, 89, 500];
nilai.sort((a, b) => a > b ? 1 : -1);
console.log(nilai);

const multiplyByTwo = (number) => {
    console.log(number*2);
}
multiplyByTwo(20);