const elmGetBooks = document.getElementById("getBooks")
        async function getBooks(){
            const api = await fetch(`${url}/book`)
            const { data } = await api.json()

            data.forEach(data =>{
                const newElement = document.createElement("div")
                newElement.innerHTML = `Id : ${data.id},<br>
                                        Name Book : ${data.name},<br>
                                        Publisher : ${data.publisher},<br>
                                        Year : ${data.year},<br>
                                        Page Count : ${data.page_count}<br><br>`
                elmGetBooks.appendChild(newElement)
            })
        }
        getBooks()