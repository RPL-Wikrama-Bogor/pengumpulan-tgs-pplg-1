// const siswa=[
//     {
//         nama:'udin',
//         nilai:[80,40,70,60]
//     },
//     {
//         nama:'dudan',
//         nilai:[75,60,80,88]
//     },
//     {
//         nama:'asep',
//         nilai:[88,75,25,90]
//     },
// ]
// const nilaiSiswa =siswa.map(students =>{
// const totalNilai =siswa.nilai.reduce((total,nilai) =>total + nilai,0);
// const rataRata =totalNilai /siswa.nilai.length;
//     return{
//         ...students,
//         rataRata
//     }
// });
// console.log(nilaiSiswa)


const produk=[
    {
        namaProduk:'Sabun',
        harga:4000
    },
    {
        namaProduk:'odol',
        harga:8000
    },
    {
        namaProduk:'mie',
        harga:3000
    }
]

const harga = produk.map(produk =>{
    const total = 0.10 * produk.harga
    const diskon = produk.harga - total
    console.log('Nama Produk' ,produk.namaProduk)    
    console.log('Harga sebelum diskon', produk.harga)
    console.log('Harga sesudah diskon', diskon)
    return{
        ...produk,
        diskon
    }
}
    )
