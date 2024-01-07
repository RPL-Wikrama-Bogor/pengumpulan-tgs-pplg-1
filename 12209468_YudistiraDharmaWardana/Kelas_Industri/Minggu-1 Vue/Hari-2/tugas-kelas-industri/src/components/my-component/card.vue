<template>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <div class="card-service">
        <image>{{ image }}</image>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSqLgO0IBFMADmHMwPOaD93N-0SUtkRiIMtg&usqp=CAU" style="border-radius: 6px;" alt="">
        <ul>
            <h3>{{ title }}</h3>
            <p>{{ description }}</p>
            <ul class="slot-list">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEA8PDw8PDw8PDw8PDw8PEBANDw8PFRUWFhURFRUYHCggGBolHRUVITEhJSkrLi4uFx8zODMuNygtLisBCgoKDg0OFw8PGysdHR0rLSstLS0rLS0tLSstLSsrLSstLS0rLSsrLS0tLSsrLSsrLS0tKystLSstKy03Ky0rLf/AABEIAQoAvgMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIEAwUGBwj/xABHEAACAQIDAwgHAgoJBQAAAAABAgADEQQSIQUxQQYTIlFhcYGRFDJCkqGx0VLBFiMzU2JygqKywgcVNENzk9Lh8BdEVGPx/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//EAB4RAQEBAQADAAMBAAAAAAAAAAABERICITEiQVET/9oADAMBAAIRAxEAPwD1SAhASNMr0rC8xS2KgKys++EQhHFClCOEBQhCArSJk4iIEIGO0IEYpKKBGKSiMBRSUUBQMcUBQMIQLsUlFABHGIQIQkjFAUIRwFFHCBGElEYESIpKIwIxGSigRiMlEYEYRwgRgYxFAUI4oF6KOEAhHCAjImTigRhHCAoRwtAjCOKAopKKBG0RkoQISJkzIwFFJRQFFHCBGEcDKLkI4pEMRxCOASMlFAUIQgEIRwFIyURgRhHFKFFHFAUiZORgKKOKAjEZIxGBGEdoQLkUcJACOAhAIQhAUI4oCjhHAjCOKUIiKSigRiMcRgKKMwgRiMZigKEIGAoo4GBbgI4pA44o4BFGYoBCEIBCOEoURjigKKSitAiYo4oCMUZigKKMxQFFHCAoGEIFuEISAjijgEUcUAhCEB
                        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
                        mqi+4bxwjDXO1nbqqHwB+UrFSTcBr9oE65UGug8phqIMw0G48BHJrlcS7cVA03nIsrYLFqTYX0NiDx8Z1CU1JF1HtcBOa2rQTMvQX1vsiTFRxuPqg9BEI4XNz8phatWYBszq2ugsqdnCYcTRQObKo1G5RLlCktvVXyEmtT0r1NoGmo552ueJsL91pGhtPDvoWYk6aNlMz42ipZQVUgXsCAQJkpYWmN1NBu9lY1MRJvqFNjxvDKx41Ae8TbhBpoN3UJEDXzlxGnemet+4kEwUm1rOO606A0lt6q+Qjp0U+wvuiZtani1SZtNbeQi5knfv750eFoIbXRfdE3uHoJb1F90Sa1w//9k="
                    style="border-radius: 50%; width: 48px; height: 45px; margin: 0; padding: 0;" alt="">
                <ul>
                    <p style="margin-top: 5px;"><b>{{ name }}</b></p>
                    <p>{{ date }}</p>
                </ul>
                <i class="fa-solid fa-share" style="margin-left: 90px; margin-top: 10px;"></i>
            </ul>
        </ul>


        <!-- <button class="btn-service-global">CSS GLOBAL</button> -->
    </div>
</template>

<script>
export default {
    props: ['title', 'description', 'image', 'name', 'date']
}

</script>

<style scoped>
.card-service {
    text-align: start;
    min-height: 206px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 1);
    border-radius: 6px;
    background: white;
    transition: all 0.5s ease;
    display: flex;
    /* align-items: center; */
    margin: 190px 330px 30px 350px;
}

.card-service h4 {
    font-size: 10px;
    line-height: 30px;
    color: #343b4e;
}

.card-service p {
    font-weight: 400;
    color: #827f8d;
    margin: 0 10px 0 0;
}

.flex-list {
    display: flex;
    width: 70px;
    height: 50px;
    padding: 20px 0 0 0;
    border-radius: 50%;
}

.slot-list {
    margin: 0;
    padding: 0;
    display: flex;
    margin-top: 20px;
    margin-bottom: 10px;
}
</style>