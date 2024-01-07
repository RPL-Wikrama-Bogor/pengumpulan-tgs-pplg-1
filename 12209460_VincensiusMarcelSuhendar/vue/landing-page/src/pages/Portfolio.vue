<template>
    <div class="container">
        <div class="portfolio">
            <h4>Our Portfolio</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sit cumque reprehenderit temporibus accusamus autem culpa aliquam vel officia unde?</p>
            <div class="category">
                <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title }}</span>
            </div>
            <div class="row-portfolio">
                <cardport v-for="item in DataPortfolio" :portfolio="item"></cardport>
            </div>
        </div>
    </div>
</template>
<script>
import cardport from "@/components/my-components/cardport.vue"
import { Get } from "@/api/index.js"
export default{
    components:{
        cardport,
    },
    data(){
        return{
            DataPortfolio:[],
            DataCategories:[]
        }
    },
    async created(){
        const responsePortfolio = await Get('portfolio');
        this.DataPortfolio = responsePortfolio.data.data;
        const responseCategories = await Get('categories');
        this.DataCategories = responseCategories.data;
    },
    methods:{
        async filter(id){  
            const responsePortfolio = await Get(`portfolio?category_id=${id}`);
            this.DataPortfolio = responsePortfolio.data.data;
        }
    },
}
</script>
<style>
.category{
    margin: 10px 0 35px 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.category span{
    background-color: #bdcdff;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    margin: 5px;
    cursor: pointer;
}

.row-portfolio{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 10px;
}

.portfolio{
    margin-top: 10px;
}

.portfolio h4{
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
    text-align: center;
}

.portfolio p{
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

.portfolio p span{
    color: gray;
}


@media screen and (max-width: 600px){
    .row-portfolio{
        display: grid;
        grid-template-columns: repeat(1,1fr);
        grid-gap: 10px;
    }

    .portfolio h4{
        font-size: 20px
    }
}
</style>