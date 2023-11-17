const siswa =[{
nama:'bocchi',
    nilai: 100
},{
nama:'yanto',
    nilai: 40
},
{
nama:'andi',
    nilai: 42
},
{
    nama:'asep',
        nilai: 43
    },
]
//filter
//alurnya kaya objek siswa akan kita filter dengan menggunkan .filter lalu objek itu akan dimasukan ke siswaa dan kita bisa cari dengan namaobjek.value kondisi lalu value
// const underperformingstudents = siswa.filter
// (siswaa => siswa.nilai == 42);

// console.log(underperformingstudents)


//map
//alurnya map akan menampung objek ke student lalu di return ke student lagi dengan menambah grade:'A' kedalam objek
// const siswawithgrade = siswa.map(
//     student=> {
//         return{
//          ...student, //... gunanya kaya menampilkan semua isi data disebuah objek
//          grede:student.nilai >=75 ? "A" : "B" //bisa kita pakai nullish operator yang dimana jika kondisinya >= 75 maka pilihan nya ada A atau B
//         }
//     }
// )
// // bisa juga kita pakai pengkondisian if dengan kita membuat variable dengan nama yang sama dengan return lalu memasukannya ke dalam output if lalu kita pakai variable itu ke return
// //secara garis besar direturn ini kita bisa atur sedemikian rupa jadi jika kita menginginkan menambah kan satu array aja jadi kita bisa ubah dengan logik percabangan juga lain lain
// console.log(siswawithgrade)

//Reduce
//alurnya array dimasukan ke totalNilai lalu masukan ke fungsi reduce didalamnya ada total dan siswa(array) ,total berjumlah 0 maka total + nilai akan menambah sampai total
//tambah
// const totalNilai =siswa.reduce((total,siswa) =>total + siswa.nilai,0)
// console.log('totalnilai', totalNilai)
// console.log('rata-rata', totalNilai / siswa.length)

//reduce program
const cart =[
    {
        namaProduk:'Sepatu',
        harga:30000,
        cheked:true
    },
    {
        namaProduk:'Sabun',
        harga:3000,
        cheked:true
    },
    {
        namaProduk:'Sandal',
        harga:30000,
        cheked:false
    },

]
const totalProduk = cart.reduce((total,cart)=> cart.cheked ? total + cart.harga : total,0 )
console.log('total harga', totalProduk)


//sort
//alur array dimasukan ke dalam variable sementara yaitu a dan b lalu a dan b di kondisikan mau yang besar atau yang terkecil, lalu 1 dan -1 adalah kanan atau kiri
const nilai =[100,22,443,55,66];
nilai.sort((a,b) => a > b ? 1: -1)
console.log(nilai)

//find
//alurnya si find akan mencari sesuai dengan apa yang kita tulis di kurung, atau nilai yang dipanggil akan dikembalikan ke objek tersebut
const produk =cart.find(produk => produk.namaProduk == 'Sandal');
console.log('produk', produk ?? 'Produk tidak ada')
//higher order function
//bisa untuk penggabungan js dan html
const variableFungsi = () => {
    console.log('I am a function')
}
function callFunction(aFunction){
    aFunction('ini function');
}
const fungsi2 =(message) =>{
    console.log(message)
}
callFunction(variableFungsi);
callFunction(fungsi2);