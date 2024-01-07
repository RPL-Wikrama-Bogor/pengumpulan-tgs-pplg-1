// 1, buatkan fungsi dengan menggunakan promise untuk menjalankan tugas 
// berdasarkan data dibawah ini jalankan pada http://localhost:7000

const http = require('http');

const tugas = [
    { nama: 'A', hasil: true, waktu: 3000 },
    { nama: 'B', hasil: false, waktu: 1000 },
    { nama: 'C', hasil: false, waktu: 2000 },
    { nama: 'D', hasil: true, waktu: 4000 },
]

function jalankanTugas() {
    const promises = [];

    tugas.forEach(tugasItem => {
        const promise = new Promise((resolve, reject) => {
            setTimeout(() => {
                if (tugasItem.hasil) {
                    resolve(`${tugasItem.nama} selesai`);
                } else {
                    reject(`${tugasItem.nama} gagal`);
                }
            }, tugasItem.waktu);
        });

        promises.push(promise);
    });

    Promise.allSettled(promises)
        .then(results => {
            console.log("Hasil tugas:");
            results.forEach(result => {
                if (result.status === "fulfilled") {
                    console.log(result.value);
                } else {
                    console.error(result.reason);
                }
            });
        });
}

const server = http.createServer((req, res) => {
    if (req.url === '/run') {
        jalankanTugas();
        res.writeHead(200, { 'Content-Type': 'text/plain' });
        res.end('Menjalankan tugas...\n');
    } else {
        res.writeHead(404, { 'Content-Type': 'text/plain' });
        res.end('Halaman tidak ditemukan\n');
    }
});

server.listen(7000, 'localhost', () => {
    console.log('Server berjalan di http://localhost:7000/');
});