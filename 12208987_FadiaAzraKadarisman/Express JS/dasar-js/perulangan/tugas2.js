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

const hitung = (products) => {
    const hitungDiskon = products.map((product) => {
        const diskon = product.price * 0.1 ;
        return {
            ...product,
            HargaSetelahDiskon: diskon,
        };
    }); 
    return hitungDiskon;
};

const hasil = hitung(products);
console.log(hasil);
