const students = [
    {
        nama: "john",
        umur: 20,
        nilai: [90, 85, 88]
    },
    {
        nama: "alice",
        umur: 22,
        nilai: [75, 80, 92]
    },
    {
        nama: "bob",
        umur: 21,
        nilai: [88, 91, 78]
    },
];
const hitung = (students) => {
    const rataRataNilai = students.map((student) => {
        const amount = student.nilai.reduce((a, b) => a + b, 0);
        const average = amount / student.nilai.length;
        return {
            ...student,
            rataRataNilai: average,
        };
    });
    return rataRataNilai;
};

const rataRataNilaiSiswa = hitung(students);
console.log(rataRataNilaiSiswa);