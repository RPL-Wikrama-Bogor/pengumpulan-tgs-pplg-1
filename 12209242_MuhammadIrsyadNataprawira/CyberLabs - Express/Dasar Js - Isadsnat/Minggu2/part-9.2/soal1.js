// Soal 1
console.log('Soal 1 - Indentifikasi prima 1 or 0');
//cek apakah angka yang dikirim adalah angka prima atau bukan?
//cek google bagi yang ga tau apa itu angka prima
function angkaPrima(angka) {
    // Math.sqrt() = fungsi bawaan js untuk ngitung akar
    for (let i = 2; i <= Math.sqrt(angka); i++) {
        if (angka % i === 0) {
            return `${angka} false`
        }
    }
    
    return `${angka} true`
}

// TEST CASES
console.log(angkaPrima(3)); // true
console.log(angkaPrima(9)); // false
console.log(angkaPrima(15)); // false
console.log(angkaPrima(21)); // false
console.log(angkaPrima(7)); // true
console.log(angkaPrima(6)); // false
console.log(angkaPrima(23)); // true
console.log(angkaPrima(33)); // false