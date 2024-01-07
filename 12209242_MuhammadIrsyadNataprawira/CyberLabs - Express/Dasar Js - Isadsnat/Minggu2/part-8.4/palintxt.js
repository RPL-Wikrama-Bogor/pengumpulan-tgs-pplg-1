/*
Diberikan sebuah function palindrome(kata) yang menerima satu parameter. Function tersebut akan mengembalikan nilai true jika kata merupakan palindrome, dan false jika bukan. Kata palindrome adalah sebuah kata yang jika dibalik, tetap sama. Contoh, 'katak' dibalik tetaplah 'katak'.
*/

/* 
Yang ini logikanya gampang ajasi

buat satu variabel tampungan yg disini gw buat variable namenya temp
dan looping lah si parameter kata nya yg seperti biasa kalau mau access item paling kanan itu pasti kata.length - 1
dan i nya --, lalu udah gitu temp diisi kata[i] yg dimana kata[i] itu isi dari parameter kata yg udh di looping,
dalam artian si temp ini isinya adalah parameter kata yang terbalik
abis itu tinggal return apakah temp sama kaya kata ? kalau iya berati return true kalau ngga ya false 
*/

function palindrome(kata) {
  // you can only write your code here!
  let temp = ''

  for ( let i = kata.length - 1; i >= 0; i-- ) {
    temp += kata[i]
  }

  return temp === kata
}

// TEST CASES
console.log(palindrome('katak')); // true
console.log(palindrome('blanket')); // false
console.log(palindrome('civic')); // true
console.log(palindrome('kasur rusak')); // true
console.log(palindrome('mister')); // false