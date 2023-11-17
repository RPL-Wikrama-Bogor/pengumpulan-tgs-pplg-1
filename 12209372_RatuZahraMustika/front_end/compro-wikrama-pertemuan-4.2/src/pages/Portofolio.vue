<template>

</template>














<script>
import { Get } from '@/Api.index.js';
export default {
    async mounted() {
        const response = await
        Get('http://127.0.0.1:9000/api/portfolio');
    }
}
</script>