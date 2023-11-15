//DILARANG MENGGUNAKAN METHOD SORT, PELAJARI ALGORITMA SORTING YANG ADA DI GOOGLE
//saran sih pake bubblesort walau tidak efisien tapi bagus buat belajar sorting
function urutkanAbjad(str) {
    // you can only write your code here!
    let karakter = str.split('');
    let n = karakter.length;
    let urutan;

    do {
        urutan = false;

        for (let i = 0; i < n - 1; i++) {
            if (karakter[i] > karakter[i + 1]) {
                // Tukar karakter jika urutannya salah
                let temp = karakter[i];
                karakter[i] = karakter[i + 1];
                karakter[i + 1] = temp;
                urutan = true;
            }
        }
    } while (urutan);

    return karakter.join('');
}

// TEST CASES
console.log(urutkanAbjad('hello')); // 'ehllo'
console.log(urutkanAbjad('truncate')); // 'acenrttu'
console.log(urutkanAbjad('developer')); // 'deeeloprv'
console.log(urutkanAbjad('software')); // 'aeforstw'
console.log(urutkanAbjad('aegis')); // 'aegis'