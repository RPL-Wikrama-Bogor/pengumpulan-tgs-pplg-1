<template>
    <div>
        <div class="section_1">
            <div class="section1_content">
                <h1>we are enjoy and happy to industri PPLG</h1>
                <p>Wikrama mengadakan pembelajaran program industri vue js disekolah,selama 2 minggu</p>
            </div>
            <div class="section1_img">
                <img src="@/assets/img/section_1.jpg" alt="beranda">
            </div>
        </div>
    </div>
</template>
<style scoped>

.section_1 {
    padding: 20px 0;
    display: flex;
    align-items: center;
}

.section1_content {
    width: 50%;
    padding: 30px 0;
}

.section1_img {
    width: 50%;
}

.section1_img img {
    width: 100%;
}

.section1_content h1 {
    font-size: 48px;
}

.section1_content p {
    margin-bottom: 20px;
}

@media screen and (max-width: 600px) {

    .section_1 {
        flex-direction: column;
        padding: 20px 20px;
    }

    .section1_content {
        width: 100%;
        padding: 30px 0;
    }

    .section1_img {
        width: 100%;
    }
}

</style>