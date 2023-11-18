<template>
    <div class="page">
        <h3>Contact Us</h3>
        <div class="row-page">
            <Page></Page>
        </div>
    </div>
</template>

<script>
import Page from '@/components/Contact/Page.vue';
export default{
    components:{
        Page
    }
}
</script>

<style>
.page{
    margin-top: 80px;
}

.page h3{
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: center;
}
</style>