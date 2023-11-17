const testFunction = () => {
    console.log("Hello World");
}

const newFunction = (messege) => {
    console.log(messege);
}

const agakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
        resolve("Telat");
        // reject("Saya kena lobang");
        }, 3000)
    })

}


module.exports = {
    testFunction,
    newFunction,
    agakTelat
} 
