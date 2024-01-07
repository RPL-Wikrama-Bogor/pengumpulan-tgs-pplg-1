// Function Js
function message(){
    return "Hello World!"
}
console.log(message())

// ------------ //
console.log(' ');
// ------------ //

function test(){
    console.log("test tanpa return")
}
test()

// ------------ //
console.log(' ');
// ------------ //
// return itu memberikan nilai ke fungsi, bila tidak memberikan return di fungsi. maka fungsi tersebut memiliki nilai undefined
// return menurut saya itu mengembalikan nilai

// Parameter dalam fungsi

function addTest(a, b){
    return a + b
}

console.log(addTest(10, 5))

// ------------ //
console.log(' ');
// ------------ //

// Function ini bervariasii

// Function reverse

function reverse(kata){
    let reverse = ""
    for (let i = kata.length - 1; i >= 0; i--){
        reverse += kata[i]
    }
    return reverse
}

console.log(reverse("123"));
console.log(reverse("Hujan"));

// Function uppercase after space

function UAS(kata){
    let result = ""
    for(let i = 0; i < kata.length; i++){
        if(i == 0 || kata[i - 1] == ' '){
            result += kata[i].toUpperCase()
        } else {
            result += kata[i]
        }
    }
    return result
}
console.log(UAS("irsyad nataprawira"))
console.log(UAS("SMK wikrama bogor"))