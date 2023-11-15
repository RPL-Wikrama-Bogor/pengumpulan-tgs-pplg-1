const cart = [
    {
        namaProduk: "DVD",
        harga: 5000,
        checked: true
    },
    {
        namaProduk: "Buku",
        harga: 10000,
        checked: true
    },
    {
        namaProduk: "Kaos Code",
        harga: 20000,
        checked: false
    }
]

const totalHarga = cart.reduce((total, produk) => produk.checked ? total + produk.harga : total, 0)

const sortedCart = cart.sort((a, b) => a.harga - b.harga);


console.log(totalHarga);
console.log(sortedCart);
