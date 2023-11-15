let nilai = 85;

if (nilai >= 0 && nilai <= 100) {
    if (nilai >= 90) {
        console.log("Nilai: A");
    } else if (nilai >= 80) {
        console.log("Nilai: B");
    } else if (nilai >= 70) {
        console.log("Nilai: C");
    } else if (nilai >= 60) {
        console.log("Nilai: D");
    } else {
        console.log("Nilai: E");
    }
} else {
    console.log("Nilai tidak valid");
}
