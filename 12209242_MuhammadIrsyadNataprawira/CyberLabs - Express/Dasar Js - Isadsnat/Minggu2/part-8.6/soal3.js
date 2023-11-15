//tentukan apakah ini deret aritmatika atau bukan
function tentukanDeretAritmatika(arr) {
    // you can only write your code here!
    let length = arr.length
    
    if (length <= 2) {
        return true // length yang kurang dari 2 element selalu dianggap deret aritmatika
    }
    
    let commonDiff = arr[1] - arr[0] // selisih pertama
    for ( let i = 1; i < length - 1; i++) {
        let currentDiff = arr[i + 1] - arr[i] 

        if ( currentDiff !== commonDiff ) { 
            return false 
            // selisih tidak konstan, bukan deret aritmatika
        }
    }

    return true

}

// TEST CASES
console.log(tentukanDeretAritmatika([1, 2, 3, 4, 5, 6])); // true
console.log(tentukanDeretAritmatika([2, 4, 6, 12, 24])); // false
console.log(tentukanDeretAritmatika([2, 4, 6, 8])); // true
console.log(tentukanDeretAritmatika([2, 6, 18, 54])); // false
console.log(tentukanDeretAritmatika([1, 2, 3, 4, 5, 6])); // true