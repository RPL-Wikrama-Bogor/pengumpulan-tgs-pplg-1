<script setup>
import Button from './Button.vue';

defineProps({
    title: {
        type: String,
        required: true
    },
    desc: {
        type: String,
        required: true
    },
})

</script>

<template>
    <div class="card">
        <h1>{{ title }}</h1>
        <p>{{ desc }}</p>
        <slot></slot>
        <Button class="btn-primary mx-2" value="Click"/>
        <Button value="Local" class="btn-secondary"></Button>
    </div>
</template>

<style scoped>
.card {
    background-color: #f2f2f2;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>