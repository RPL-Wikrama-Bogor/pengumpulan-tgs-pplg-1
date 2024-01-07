// Tipe data Object

const myObj = {
    nama: 'Irsyad',
    tinggi: 162,
    beratBadan: 44,
    hobi: 'ngoding',
    // getData: function getData() {
    //     console.log(`Nama: ${this.nama}\nTinggi: ${this.tinggi}\nBerat Badan: ${this.beratBadan}\nHobi: ${this.hobi}`);
    // }
}

// for (let key in myObj) {
//     console.log(myObj[key]);
// }


// Manipulasi Object
myObj.kelakuan = 'baik';
//atau bisa seperti ini
myObj['isNolep'] = true;

//atau dengan loop
let objAngka = {};
for (let i = 1; i <= 3; i++) {
  objAngka[i] = i
}
console.log(objAngka)