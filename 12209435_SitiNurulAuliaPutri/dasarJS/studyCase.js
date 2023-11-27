const students = [
    {
        nama: "John",
        umur: 20,
        nilai: [90,85, 88],
    },
    {
        nama: "Alice",
        umur: 22,
        nilai: [75, 80, 92],
    },
    {
        nama: "Bob",
        umur: 21,
        nilai: [88, 91, 78],
    },
];

const average = students.map(student => {
    const totalNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
    const rataRata = totalNilai  / student.nilai.length;
    
    return{
        ...student, //... artinya spread
        rataRata
    };
});

console.log(average);

console.log('-----------------------------------------------------------------------------');

const products =[
    {
        name: "Laptop",
        price: 2000,
    },
    {
        name: "handphone",
        price: 200,
    },
    {
        name: "tablet",
        price: 100,
    },

]

const discount = products.map(product => {
    const totalHarga = product.price.reduce((prices) => prices * 10 / 100, 0);
    // const HargaDiskon = product.price - totalHarga;
    
    return{
        ...product, //... artinya spread
        // HargaDiskon,
        totalHarga,
    };
});

console.log(discount);

console.log('---------------------------------');
const numbers = [1, 2, 3, 5, 9];
const doubled = numbers.map((number)=>number * 2);

console.log(doubled);