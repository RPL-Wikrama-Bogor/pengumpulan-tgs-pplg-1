function hitungJumlahKata(kalimat) {
    // you can only write your code here!
    // kalimat di split agar data nya terbungkus menjadi array
    const kalimatSplited = kalimat.split(' ')
    // lalu disimpan di variabel dibawah untuk mengakses length dari data yang sudah menjadi array
    // di variabel kalimatSplited
    const jumlahKata = kalimatSplited.length

    // tinggal return 
    return jumlahKata
}

// TEST CASES
console.log(hitungJumlahKata('I have a dream')); // 4
console.log(hitungJumlahKata('Never eat shredded wheat or cake')); // 6
console.log(hitungJumlahKata('A song to sing')); // 4
console.log(hitungJumlahKata('I')); // 1
console.log(hitungJumlahKata('I believe I can code')); // 5