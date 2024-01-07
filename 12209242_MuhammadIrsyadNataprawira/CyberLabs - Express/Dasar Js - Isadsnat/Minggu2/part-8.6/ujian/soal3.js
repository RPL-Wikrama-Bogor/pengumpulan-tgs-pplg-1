/*
diberikan sebuah function groupAnimals(animals) yang menerima satu parameter berupa array,
fungsi ini akan me-return array 2 dimensi
*/
function groupAnimals(animals) {
    let result = []
    
    animals.sort() 

    let currentGroup = [animals[0]]
    
    for (let i = 1; i < animals.length; i++) {
        if (animals[i][0] === currentGroup[0][0]) {
            currentGroup.push(animals[i])
        } else {
            result.push(currentGroup)
            currentGroup = [animals[i]]
        }
    }

    result.push(currentGroup)

    return result
}

// TEST CASES
console.log(groupAnimals(['cacing', 'ayam', 'kuda', 'anoa', 'kancil']));
// [ ['ayam', 'anoa'], ['cacing'], ['kuda', 'kancil'] ]
console.log(groupAnimals(['cacing', 'ayam', 'kuda', 'anoa', 'kancil', 'unta', 'cicak']));
// [ ['ayam', 'anoa'], ['cacing', 'cicak'], ['kuda', 'kancil'], ['unta'] ]
