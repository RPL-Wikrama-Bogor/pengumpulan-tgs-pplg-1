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


const map = students.map(students =>{
    const totalNilai= students.nilai.reduce((total,nilai)=> total + nilai,0);
    const rataRata = totalNilai;
    
    return{
        ...students,
        rataRata
    }
})

console.log(map);


