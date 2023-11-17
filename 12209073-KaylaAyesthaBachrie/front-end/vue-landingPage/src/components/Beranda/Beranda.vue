<template>
    <div>
        <div class="section_1">
            <div class="section1_content">
                <h1>{{ data.title }}</h1>
                <p>{{ data.description }}</p>
            </div>
            <div class="section1_img">
                <img :src="data.file" :alt="data.title">
            </div>
        </div>
    </div>
</template>
<script>
export default{
    props: ['data']
}
</script>
<style scoped>
/* section 1 */
    .section_1{
        padding: 20px 0;
        display: flex;
        align-items: center;
    }
</style>