<template>
    <div>
        <div class="container">
            <div class="portofolio">
                <h3>Portofolio Kami</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, praesentium hic. Culpa optio, quibusdam
                    alias
                    fuga ullam recusandae dolorem repellat.</p>
                <div class="category">
                    <span v-for="_ in DataCategories" @click="filter(_.id)">{{ _.title }}</span>
                    <span @click="all">All</span>
                </div>
                <div class="row-portofolio">
                    <CardPortfolio v-for="item in DataPortfolio" :portfolio="item"></CardPortfolio>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import CardPortfolio from '@/components/Portfolio/CardPortfolio.vue';
import { Get } from '../Api';
export default {
    components: {
        CardPortfolio
    },
    methods: {
        async filter(id) {
            const { data } = await Get('http://localhost:9000/api/portfolio?category_id=' + id)
            this.DataPortfolio = data.data
        },
        async all() {
            const response = await Get('http://localhost:9000/api/portfolio')
            this.DataPortfolio = response.data.data
        }
    },
    data() {
        return {
            DataPortfolio: [],
            DataCategories: [],
            selectedCategory: null
        }
    },
    async mounted() {
        const { data } = await Get('http://localhost:9000/api/portfolio')
        this.DataPortfolio = data.data

        const response = await Get('http://localhost:9000/api/categories')
        this.DataCategories = response.data
    }
}
</script>

<style>
/* category */
.category {
    margin: 10px 0 35px 0;
    display: flex;
    flex-wrap: wrap;
}

.category span {
    background-color: #bdcdff;
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
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
}

.portofolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4F556A;
    max-width: 680px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;
}

.portofolio p span {
    color: gray;
}

@media screen and (max-width: 600px) {


    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }

    .portofolio h4 {
        font-size: 20px;
    }
}
</style>