


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
];

function applyDiscount(products) {
    return products.map(product => ({
        name: product.name,
        price: product.price * 0.9 // Harga diskon 10% (90% dari harga asli)
    }));
}

const discountedProducts = applyDiscount(products);
console.log(discountedProducts);

