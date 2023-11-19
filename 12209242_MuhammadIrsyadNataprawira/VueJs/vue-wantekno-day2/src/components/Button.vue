<script setup>
defineProps({
    value: String,
    class: String
})
</script>
<template>
    <button v-bind="$attrs" :class="class">{{ value }}</button>
</template>

<style scoped>

</style>