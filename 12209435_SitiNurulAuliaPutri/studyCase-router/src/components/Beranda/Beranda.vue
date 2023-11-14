<template>
    <div>
        <div class="section_1">
            <div class="section1_content">
                <h1>{{ DataHome.title }}</h1>
                <p>
                    {{ DataHome.description }}
                </p>
            </div>

            <div class="section1_img">
                <img :src="DataHome.file" alt="beranda">
            </div>
        </div>

        <Service></Service>
    </div>
</template>
<script>
import Service from './Service.vue';
import { Get } from '../../Api/index.js'

export default {
  components: {
    Service
  },
  data() {
        return{
            DataHome: [{
                title: '',
                description: '',
                file: ''
            }]
        }
    },
    async mounted() {
        const data = await Get('http://localhost:9000/api/home');
        this.DataHome = data.data
    }
}

</script>

<style scoped>
.section_1{
    padding: 20px 0;
    display: flex;
    align-items: center;
}

.section1_content{
    width:50%;
    padding: 30px 0;
}

.section1_img{
    width: 50%;
}

.section1_img img{
    width: 100%;
}

.section1_content h1{
    font-size: 48px;
}

.section1_content p{
    margin-bottom: 20px;
}

@media screen and (max-width: 600px) {
    .section_1{
        flex-direction: column;
        padding: 20px 2px;
    }

    .section1_content{
        width: 100%;
        padding: 30px 0;
    }

    .section1_img{
        width: 100%;
    }
}

</style>