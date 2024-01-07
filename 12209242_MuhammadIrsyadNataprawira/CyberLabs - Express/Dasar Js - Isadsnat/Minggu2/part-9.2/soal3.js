console.log('Soal 3 - Media');
function cariMedian(arr) {
    // you can only write your code here!
    arr.sort((a,b) => {
        return a - b
    })

    const length = arr.length
    if (length % 2 === 1) {
        return arr[Math.floor(length / 2)]
    } else {
        const tengah1 = arr[length / 2 - 1]
        const tengah2 = arr[length / 2]

        return (tengah1 + tengah2) / 2
    }

}

// TEST CASES
console.log(cariMedian([1, 2, 3, 4, 5])); // 3
console.log(cariMedian([1, 3, 4, 10, 12, 13])); // 7
console.log(cariMedian([3, 4, 7, 6, 10])); // 6
console.log(cariMedian([1, 3, 3])); // 3
console.log(cariMedian([7, 7, 8, 8])); // 7.5