// Fyi ini soal dari guru jurusan ehehe. 
// Ada sebuah array dengan nama names yang berisi beberapa nama. (done)
// Cetak nama-nama dalam array dalam urutan asli dengan tanda koma dan spasi di antara mereka. (done)
// Cetak nama-nama dalam array dalam urutan terbalik dengan tanda koma dan spasi di antara mereka.

const names = ['Jamal', 'Alam', 'Syahroni', 'Martini', 'Kinan']

let result = ""
for (let i = 0; i < names.length; i++){
    result += names[i]

    if (i !== names.length - 1){
        result += ', '
    }
}
console.log(`Normal : ${result}`)

let result2 = ""
for (let i = names.length - 1; i >= 0; i--){
    result2 += names[i]

    if(i !== 0){
        result2 += ', '
    }
}
console.log(`Reverse : ${result2}`)