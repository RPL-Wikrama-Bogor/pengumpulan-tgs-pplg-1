//jalankan pada http://localhost:7000

// Mendefinisikan sebuah array 'tugas' yang berisi beberapa objek tugas dengan properti nama, hasil, dan waktu.
const tugas = [
    {
        nama: "A",
        hasil: true,
        waktu: 3000
    },
    {
        nama: "B",
        hasil: false,
        waktu: 1000
    },
    {
        nama: "C",
        hasil: false,
        waktu: 2000
    },
    {
        nama: "D",
        hasil: true,
        waktu: 4000
    }
];

// Membuat sebuah fungsi 'soal' yang mengambil dua argumen, yaitu nama tugas dan status berhasil (true/false).
function soal(Task, succes) {
    return new Promise((resolve, reject) => {
        // Mencari tugas yang sesuai dengan nama yang diberikan.
        const tugasTerkait = tugas.find(tugas => tugas.nama === Task);

        // Jika tugas ditemukan, maka akan menjalankan setTimeout untuk mensimulasikan tugas asynchronous.
        if (tugasTerkait) {
            setTimeout(() => {    
                if (succes) {
                    // Jika berhasil, promise akan di-'resolve' dengan pesan yang sesuai.
                    resolve(`Tugas ${Task} Sudah Selesai`);
                } else {
                    // Jika gagal, promise akan di-'reject' dengan pesan yang sesuai.
                    reject(`Tugas ${Task} Belum Selesai`);
                }
            }, tugasTerkait.waktu);
        } else {
            // Jika tugas tidak ditemukan, promise akan di-'resolve' dengan pesan bahwa tugas tidak ditemukan.
            resolve(`Tugas ${Task} tidak ditemukan`);
        }
    });
}

// Memanggil fungsi 'soal' untuk masing-masing tugas dengan parameter yang sesuai.

// Contoh pemanggilan tugas 'A' yang berhasil.
soal('A', true)
    .then((result) => {
        console.log(result);
    })
    .catch((error) => {
        console.log(error);
    });

// Contoh pemanggilan tugas 'B' yang gagal.
soal('B', false)
    .then((result) => {
        console.log(result);
    })
    .catch((error) => {
        console.log(error);
    });

// Contoh pemanggilan tugas 'C' yang gagal.
soal('C', false)
    .then((result) => {
        console.log(result);
    })
    .catch((error) => {
        console.log(error);
    });

// Contoh pemanggilan tugas 'D' yang berhasil.
soal('D', true)
    .then((result) => {
        console.log(result);
    })
    .catch((error) => {
        console.log(error);
    });
