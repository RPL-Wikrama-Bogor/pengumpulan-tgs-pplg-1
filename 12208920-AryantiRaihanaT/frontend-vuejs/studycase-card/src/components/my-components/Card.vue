<template>
    <div class="wrap">
        <div class="card">
            <div class="img-wrap">
                <img :src="'/src/assets/' + img " alt="">
            </div>

            <div class="text-wrap">
                <div class="title" v-html="title" ></div>
                <div v-html="description"></div>

                    <nav class="nav">
                        <div class="image">
                            <img :src="'/src/assets/' + imgProfile " alt="">
                        </div>

                        <div class="wrap-name-slot">
                            <div class="name">{{ name }} </div>
                            <div class="slot">
                                <slot></slot>
                            </div>
                        </div>

                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by
                                 @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons,
                                  Inc. --><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 
                                  1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 
                                  19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg>
                        </div>
                    </nav>
            </div>
        </div>
    </div>
</template>


<script>

    export default{

        //memanggil data
        props: ['title', 'description', 'img', 'imgProfile', 'name']

    }

</script>



<style scoped>
.wrap{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
margin-bottom: 10px;

}

.card{
display: flex;
width: 800px;
height: 330px;
margin-top: 180px;
box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.50);
border-radius: 60px 0px 0px 0px;
}

.img-wrap{
width: 40%;
height: auto;
position: relative;

}

.text-wrap{
padding: 10px 50px 0 50px;
width: 60%;
height: 100%;
font-family: sans-serif;
margin-top: 50px;
/* margin-top: 25px; */

}

.img-wrap img{
width: 100%;
height: 100%;
/* position: absolute; */

}

.title{
    font-size: 25px;
    font-weight: 600;
}

.nav{
display: flex;
padding: 15px 0 0 0;
margin-top: 30px;
}

.wrap-name-slot .name{
    margin-left: 17px;
    margin-top: 6px;
    font-weight: bold;
}

.wrap-name-slot .slot{
    margin-left: 17px;
}

.nav img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.icon-wrap{
    margin-left: 200px;
    margin-top: 10px;

}

</style>