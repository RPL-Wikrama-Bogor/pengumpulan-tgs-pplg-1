// let = 1;

// for (let i = 1; i <= 10; i++){
//     console.log(i);
// }
// console.log("-----------------------------------------");

// const array = [1,5,7,11];

// array.forEach(val =>console.log(val))

// array.forEach(val =>{
//     console.log(val);
// })

// for (let i = 0; i < array.length; i++){
//     console.log(array[i]);
// }

// console.log("-----------------------------------------");

// const array = [1,5,7,11];
// let i = 0;

// do{
//     console.log(array[i]);
//     i++;
// }while(i < array.length)


// while(i < array.length){
//     console.log(array[i]);
//     i++;
    
// }
// console.log("-----------------------------------------");

const students = [
    {
        nama: 'Agus',
        nilai: 78,
        bapak: 'Ucup'
    },
    {
        nama : 'Asep',
        nilai: 50,
        bapak: 'Ucup'
    },
    {
        nama: 'Agung',
        nilai: 100,
        bapak: 'Ucup'
    }
];

const underperformingStudents = students.filter
    (student => student.nilai <= 75);
    
console.log(underperformingStudents);

console.log('------------------------------------------------')

const studentsWithGrade = students.map(student => {
    let status;
    
    if (student.nilai >= 90){
        status = 'Sepuh';
    }else if(student.nilai >= 75){
        status = 'Pemula';
    }
    else{
        status = 'Gak bisa main';
    }
    
    
    return{
        ...student,
        status,
    };
})


// : student.nilai >= 75 ? "Keja Bagus" : "Gak bisa main"
console.log(studentsWithGrade);








const variableFungsi = () => {
    console.log('iam a function');
}

const fungsi2 = () => {
    console.log('mang ea');
}

function callFunction (aFunction){
    aFunction();
};

function callFunction (aFunction){
    aFunction();
}
callFunction(fungsi2);

console.log('-----------------------------');

const cart =[
    {
        namaProduk:'Sepatu',
        harga:30000,
        cheked:true
    },
    {
        namaProduk:'Sabun',
        harga:3000,
        cheked:true
    },
    {
        namaProduk:'Sandal',
        harga:30000,
        cheked:false
    },

]
const totalProduk = cart.reduce((total,cart)=> cart.cheked ? total + cart.harga : total,0 )
console.log('total harga', totalProduk)

const produk =cart.find(produk => produk.namaProduk == 'Sandal');
console.log('produk', produk ?? 'Produk tidak ada')

console.log('-----------------------------');

const nilai =[100,22,443,55,66];
nilai.sort((a,b) => a > b ? 1: -1)
console.log(nilai)

---------------------------------------------------------

const students = [
    {
        nama: 'Jhon',
        umur: 20,
        nilai: [90, 85,88]
    },
    {
        nama: 'Alice',
        umur: 22,
        nilai: [75, 80, 92]
    },
    {
        nama: 'Bob',
        umur: 21,
        nilai: [88, 91, 78]
    },
]


const rataRataStudents = students.map(students =>{
    let rataRata;
    
    return{
        ...students,
        rataRata
    }
})

console.log('rataRataStudents');



