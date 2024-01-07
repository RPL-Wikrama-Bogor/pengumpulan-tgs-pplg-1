const students =[
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
        nilai: [88, 91, 78]
    },
];

const hitung = (students) => {
    const rataRataNilai = students.map((student) => {
        const jumlah = student.nilai.reduce((a, b) => a + b, 0);
        const rataRata = jumlah / student.nilai.length;
        return {
            ...student,
            rataRataNilai: rataRata,
        };
    }); 
    return rataRataNilai;
};

const rataRataNilaiSiswa = hitung(students);
console.log(rataRataNilaiSiswa);
