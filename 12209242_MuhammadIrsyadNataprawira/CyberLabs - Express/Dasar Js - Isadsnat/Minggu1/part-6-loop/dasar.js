//while()
//for()
console.log('While loop dasar')
let i = 5

while (i>= 0){
    console.log(i + ' While');
    i--
}

// --------------- //
console.log(' ')
// --------------- //

//dalam loopong ada yang namanya arah, kiri itu pengurangan, kanan itu pertambahan
// Warning : Infinite Loop / Gabisa jalan loop nya
console.log('For Loop Dasar')
for (let i = 0; i < 5; i++){
    console.log(i + ' For loop');
}

// --------------- //
console.log(' ')
// --------------- //

// CONTOH KASUS
console.log('Study Case 1 -> Memecah kata & Mencari total huruf dalam 1 kata')
let nama1 = "Ryan"

// method length itu mengembalikan nilai angka, total huruf yang ada di string atau total element pada array
for(let i = 0; i < nama1.length ; i++){
    console.log(nama1[i]);
}

// Jadi pada tipe data str pada js ada yang namanya indexing
// Index itu berawal dari 0.
console.log(`Panjang kata : ${nama1.length}`)

// --------------- //
console.log(' ')
// --------------- //

// Kasus membalikan kata tanpa method reverse()
console.log('Studi Case 2 -> Membalikan kata secara manual')
let nama = "agus" // length nya 4, index dari 0 berati A = 0, G = 1, U = 2, S = 3
let result = ""
for (let i = nama.length - 1; i >= 0; i--){ // i = 4 - 1; 4 - 1 >= 0; i++
    result += nama[i] // s -> su -> sug -> suga -> done baru di console
}
// ini sesuai teori, karena mengakses yang paling kanan harus - 1 
console.log(`Before : ${nama}, After : ${result}`);

// --------------- //
console.log(' ')
// --------------- //

// Nested Loop
console.log('Nested Loop')
for (let i = 0; i < 5; i++){ 
    for (let j = 0; j < 5; j++){
        console.log(j);
    }
    console.log('');
}
console.log('selesai');
// Penjelasan study case nested loop menurut pandangan saya : 
// i = 0 < 5 ? berati true maka akan bertambah jadi 1 dan menjalankan langsung ke for j
// apakah j < 5, iya karna j = 0 terus begitu sampe data j menjadi 5 terus balik lagi ke parent
// parentnya tadi udah bertambah jadi 1 kan, 1 itu < 5 ? true maka akan ngejalanin lagi si log yang cuma untuk pemisah
// terus begitu sampe j jadi ada 5 data dan parent terpenuhi jadi 5 data begitu si.


// Kesimpulan looping akan sering bertemu sama method length.