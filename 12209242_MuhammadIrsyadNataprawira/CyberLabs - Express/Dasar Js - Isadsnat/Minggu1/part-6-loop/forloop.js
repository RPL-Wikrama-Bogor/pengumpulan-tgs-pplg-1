let names = ["Ikmal", "Bagja", "Khoirudin"]

for (let i = 0; i < names.length; i++){
    console.log(`Before reverse : ${names[i]}`)
}

console.log(' ')

for (let i = names.length - 1; i >= 0; i--){
    console.log(`After reverse : ${names[i]}`)
}