// Iseng iseng.

// Segitiga 
let input = 5
for (let i = 0; i <= input; i++) {
    let star = ''
    for (let j = 0; j <= input - i; j++) {
        star += '*'
    }
    console.log(star)
}
for (let i = 0; i <= input; i++){
    let star = ''
    for (let j = 0; j <= i; j++){
        star += '*'
    }
    console.log(star)
}

// ---------- //
console.log(' ');
// ---------- //

// persegi
let lebar = 10
for (let i = 1; i <= input; i++){
    let star = ''
    for (let j = 1; j <= lebar; j++){
        star += '*'
    }
    console.log(star);
}