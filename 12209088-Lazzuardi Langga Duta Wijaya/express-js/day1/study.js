const students = [
    {
        nama: "John",
        umur: 20,
        nilai: [90,85,88]
    },
    {
        nama: "Alice",
        umur: 22,
        nilai: [75,80,92]
    },
    {
        nama: "john",
        umur: 21,
        nilai: [88,91,78]
    }
];


const map = students.map(student => {
    const totalNilai = student.nilai.reduce((total,nilai) => total + nilai ,0);
    const rataRata = totalNilai / student.nilai.length;
    return {
        ...student,
        rataRata
    }
});

console.log(map);
