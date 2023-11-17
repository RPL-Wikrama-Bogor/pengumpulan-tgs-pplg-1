let input = ["0001", "Roman Alamsyah ", "Bandar Lampung", "21/05/1989", "Membaca"];

function dataHandling(input) {
    // Mengubah data index 1 hingga 4 elemen dalam array
    input.splice(1, 4, "Roman Alamsyah Elsharawy", "Provinsi Bandar Lampung", "21/05/1989", "Pria", "SMA Internasional Metro")
    console.log(input);
    // Mengsplit data bulan dan switch jadi nama bulan yang seharusnya.
    let dateSplit = input[3].split('/') 
    // jadinya ["21", "05", "1989"] karna udah di split tinggal diubah ke nama bulan seharusnya
    if (dateSplit[1] === '05') {
        console.log("Mei")
    }
    
    let newDate = [dateSplit[2], dateSplit[0], dateSplit[1]] 
    console.log(newDate);
    console.log(dateSplit.join('-'))
    console.log(input[1].slice(0,15));

}

dataHandling(input);

/**
 * keluaran yang diharapkan (pada console)
 *
 * ["0001", "Roman Alamsyah Elsharawy", "Provinsi Bandar Lampung", "21/05/1989", "Pria", "SMA Internasional Metro"]
 * Mei
 * ["1989", "21", "05"]
 * 21-05-1989
 * Roman Alamsyah //batasi hanya 15 karakter saja pada array elemen ke 2
 */