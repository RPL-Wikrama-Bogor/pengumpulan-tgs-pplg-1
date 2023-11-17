<template>
    <div class="container">
        <div class="portofolio">
        <!-- <Portofolio :data="DataPortfolio"></Portofolio> -->
        <h4>Portofolio Kami</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        {{  DataCategories }}
        <div class="category">
            <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title }}</span>
        </div>
        <div class="row-portofolio">
            <Card v-for="item in DataPortfolio" :portfolio="item"></Card>
        </div>
        </div>
    </div>
</template>

<script>

// import Portfolio from '@/components/Beranda/Portofolio.vue';
import Card from '@/components/Portofolio/Card.vue';
import { Get } from '@/Api/index.js';

export default {
    components: {
        // Portfolio,
        Card,
    },
    methods: {
         async filter(id) {
            const response = await Get('http://127.0.0.1:9000/api/portfolio?category_id=' + id);
            this.DataPortfolio = response.data.data;

        }
    },
    // beforeCreate() {
    //     console.log(this.DataPortfolio);
    //     console.log('beforeCreate');
    // },
    // created() {
    //     console.log(document.querySelector('.portfolio'));
    //     console.log(this.DataPortfolio);
    //     console.log('created');
    // },
    // beforeMounth() {
    //     console.log(document.querySelector('.portfolio'));
    //     console.log('beforemount');
    // },
    // mounted() {
    //     console.log('mounted');
    // },
    // data() {
    //     return {
    //         DataPortfolio: []
    //     }
    // },

    data() {
        return {
            DataPortfolio: [],
            DataCategories: [],
        }
    },
    async created () {
        const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio');
        this.DataPortfolio = responsePortfolio.data.data;
       
        const responseCategories = await Get('http://127.0.0.1:9000/api/categories');
        this.DataCategories = responseCategories.data;
        console.log(responseCategories);

    },

}
</script>

<style>
.category {
    margin: 10px 0 35px 0;
    display: flex;
    flex-wrap: wrap;
}

.category span {
    background-color: skyblue;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    margin: 5px;
    cursor: pointer;
    }
    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;

    }
    .portofolio {
        margin-top: 10px;
    }
    .portofolio h4 {
        margin-top: 25px;
        font-weight: 900;
        font-size: 50px;
        line-height: 35px;
        margin-bottom: 0;
        text-align: center;
        color:cornflowerblue;
    }
    .portofolio p {
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        color: slategray;
        max-width: 680px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
        text-align: center;
    }
    .portofolio p span {
        color: slategrey;
    }

    @media screen and (max-width: 600px) {
        .row-portofolio {
            display: grid;
            grid-template-columns: repeat(1,1fr);
            grid-gap: 10px;
        }
        .portofolio h4{
            font-size: 20px;
        }
    }
    
</style>