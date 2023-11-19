<script setup>
defineProps({
    text: {
        type: String,
        required: true
    }
})
</script>

<template>
    <h1>{{ text }}</h1>
</template>