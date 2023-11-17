const variabelFungsi = () => {
    console.log('i am a function');
}
const fungsi2 = (message) => {
    console.log(message);
}

function callFunction (aFunction) {
    aFunction('ini message');
}
callFunction(fungsi2);



const cart = [
    {
        namaProduk: 'Kaos Kaki',
        harga:10000,


    }
]



const totalHarga = cart.reduce((total, produk) => produk.checkedc ? total + peoduk.harga : total, 0);

console.log('totalHarga', totalHarga);
const nilai = [100, 50, 78, 11, 89, 500];

nilai.sort((a, b) => a > b ? 1 : -1)
cart.sort((a, b) => a.harga < b.harga ? 1 : -1);

const produk = cart.find(produk => produk.namaProduk === 'Kaos Kaki');

console.log()