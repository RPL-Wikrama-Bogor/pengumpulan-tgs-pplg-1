// Buatlah sebuah fungsi js yang menggunakan map untuk mengembalikan daftar barang dengan harga diskon 10%

const products = [
    {
        name: "Laptop",
        price: 1000
    },
    {
        name: "Smartphone",
        price: 500
    },
    {
        name: "Tablet",
        price: 300
    },
]

const mapedProduct = products.map(product => {
    const { price } = product
    
    const diskon = price * 0.1
    const discountedPrice = price - diskon

    return {
        ...product,
        discountedPrice
    }
})

console.log(mapedProduct);