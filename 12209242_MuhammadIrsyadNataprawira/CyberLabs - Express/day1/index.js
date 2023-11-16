const student = [
    {
        nama: 'Agus',
        nilai: 74
    },
    {
        nama: 'Elon',
        nilai: 100
    },
    {
        nama: 'Aip',
        nilai: 64
    },
    {
        nama: 'Rey',
        nilai: 80
    }
]

const studentWithGrade = student.map(student => {
    let grades = ''
    const { nama, nilai } = student

    if (nama == 'Elon') {
        if (nilai >= 90) {
            grades = 'A'
        } else if (nilai > 75) {
            grades = 'B'
        } else {
            grades = 'C'
        }

        return {
            ...student,
            grades
        }
    }

    return student
})

const totalNilai = student.reduce((total, student) => total + student.nilai, 0)

const average = totalNilai / student.length

console.log(studentWithGrade);
console.log({average});