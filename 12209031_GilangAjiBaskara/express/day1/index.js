const students = [
    {
        nama: 'John',
        umur: 20,
        nilai: [90, 85, 92]
    },
    {
        nama: 'Alice',
        umur: 22,
        nilai: [75, 80, 92]
    },
    {
        nama: 'Bob',
        umur: 21,
        nilai: [85, 91, 78]
    }
];

function hitungRataRataNilai(student) {
    const jumlahNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
    const rataRata = jumlahNilai / student.nilai.length;
    return rataRata;
}

const rataRataNilaiSiswa = students.map(student => ({
    nama: student.nama,
    umur: student.umur,
    rataRata: hitungRataRataNilai(student)
}));

console.log(rataRataNilaiSiswa);
