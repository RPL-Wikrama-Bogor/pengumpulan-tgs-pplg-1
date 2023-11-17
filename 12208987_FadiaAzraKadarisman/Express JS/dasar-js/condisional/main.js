// if else
const nilai = 90;

if (nilai >= 90) {
    console.log('A');
} else if (nilai >= 75) {
    console.log('B');
}else{
    console.log('C');
}

// switch case
// *break = untuk berhenti
// default akan di eksekusi apabila kondisi tidak terpenuhi di semua case
const keterangan = 'A';

switch (keterangan) {
    case 'A':
        console.log("Nilai anda sangat baik!");
        break;
    case 'B':
        console.log("Nilai anda baik!");
        break;
    case 'B':
        console.log("Nilai anda kurang");
        break;
    default:
        console.log("Anda beban keluarga");
        break;
}

// pengkondisian menggunakan objek
const user = {
    name: 'Fadia',
    userType: 'Admin'
}

switch (user.userType) {
    case 'Admin':
        console.log('Anda adalah admin');
        break;
    default:
        console.log('Anda adalah student');
        break;
}