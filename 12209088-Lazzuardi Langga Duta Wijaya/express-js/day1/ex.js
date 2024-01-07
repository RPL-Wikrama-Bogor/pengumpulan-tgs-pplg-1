const students = [
    {
      name: "Carter",
      age: 20,
      grade: [90, 85, 88]
    },
    {
      name: "Alice",
      age: 22,
      grade: [75, 80, 92]
    },
    {
      name: "Magnolia",
      age: 21,
      grade: [88, 91, 78]
    }
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