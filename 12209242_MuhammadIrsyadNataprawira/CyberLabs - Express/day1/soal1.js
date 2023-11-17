const students = [
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
    }
]

const averageStudent = students.map(student => {
    const { nilai } = student

    const nilaiSiswa = nilai.reduce((total, nilai) => total + nilai, 0)

    const average = nilaiSiswa / nilai.length

    return {
        ...student,
        average
    }
})

const averageStud = students.map(student => {
    const { nilai } = student
    let sum = 0

    for ( let i = 0; i < nilai.length; i++ ) {
        sum += nilai[i]
    }

    const average = sum / nilai.length

    return {
        ...student,
        average
    }
})

console.log({averageStud});
console.log({averageStudent});
