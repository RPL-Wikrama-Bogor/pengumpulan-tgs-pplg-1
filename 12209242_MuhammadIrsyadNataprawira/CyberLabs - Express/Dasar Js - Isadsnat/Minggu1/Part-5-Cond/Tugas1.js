// SOAL 1 :  
// algoritma
/* 
- user input nama dan peran. (jika nama dan peran !terisi maka menampilkan alert)
- peran pemain terdapat 3 bagian yaitu, Ksatria, Tabib dan Penyihir. jika tidak dipilih maka otomatis jadi NPC
- menampilkan nama dan peran contoh: 
    halo Ksatria Njier , kamu dapat menyerang dengan senjatamu! -> ada output peran, nama dan pesan.
*/

//isi algoritma mu disini (AWAS KALO GA DI ISI!!!!)
let nama = "Agus", peran = "Ksatria"

//code disini gunakan console.log untuk outputnya
if (nama.length === 0 && peran.length === 0){
    console.log("Nama dan Peran harus diisi!")
} else if (nama.length === 0) {
    console.log("Nama harus diisi!")
} else if (peran.length === 0) {
    console.log("Peran harus diisi!")
} else if (peran == "Ksatria") {
    console.log(`Halo, ${peran} ${nama}, kamu dapat menyerang dengan senjatamu! `)
} else if (peran == "Tabib") {
    console.log(`Halo, ${peran} ${nama}, kamu bisa membantu temanmu yang terluka!`)
} else if (peran == "Penyihir") {
    console.log(`Halo, ${peran} ${nama}, ciptakan keajaiban yang membantu kemenanganmu!`)
} else {
    console.log(`Halo, ${nama} jadi bot ya.. `)
}

