onMounted(() => {
    const savedData = localStorage.getItem('dataKelas')
    if (savedData) {
        dataKelas.value = JSON.parse(savedData)
    }
})

const addSiswa = () => {
    if (formDataKelas.value.nama && formDataKelas.value.kelas) {
        const newItem = {
            id: Date.now(),
            nama: formDataKelas.value.nama,
            kelas: formDataKelas.value.kelas
        }
        dataKelas.value.push(newItem)

        // Save the updated data to localStorage
        localStorage.setItem('dataKelas', JSON.stringify(dataKelas.value))

        formDataKelas.value.nama = ''
        formDataKelas.value.kelas = ''
    }
}

const deleteData = (id) => {
    dataKelas.value = dataKelas.value.filter(item => item.id !== id)

    // Save the updated data to localStorage
    localStorage.setItem('dataKelas', JSON.stringify(dataKelas.value))
}