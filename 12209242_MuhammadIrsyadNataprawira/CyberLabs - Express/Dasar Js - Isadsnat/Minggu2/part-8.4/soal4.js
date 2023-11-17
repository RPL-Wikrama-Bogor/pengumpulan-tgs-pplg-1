function pasanganTerbesar(num) {
    // you can only write your code here!
    const numStr = num.toString()

    let maxNum = 0

    for ( let i = 0; i < numStr.length; i++ ) {
        // disini itu posisi numStr[i] misal '6' berati diambil 6 dan ditambah sama numStr[i + 1]
        // nah misal di posisi numStr[i] itu = '6' dan ditambah satu itu index setelah '6'  itu '4'
        // dibagung lah jadinya 64
        const pasangan = parseInt(numStr[i] + numStr[i + 1])

        if ( pasangan >= maxNum ) {
            maxNum = pasangan
        }
    }

    return maxNum
}

// TEST CASES
console.log(pasanganTerbesar(641573)); // 73
console.log(pasanganTerbesar(12783456)); // 83
console.log(pasanganTerbesar(910233)); // 91
console.log(pasanganTerbesar(71856421)); // 85
console.log(pasanganTerbesar(79918293)); // 99