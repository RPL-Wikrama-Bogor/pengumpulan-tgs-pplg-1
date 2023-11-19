<template>
    <div class="card-blog">
        <img src="https://themesflat.co/html/grabyinsur/images/project/img-08.jpg" alt="">
        <div class="card-blog-description">
            <div class="time">
                {{ blog.created_at }}
            </div>
            <h4>
               {{ blog.title }}
            </h4>
            <p>{{ blog.description }}</p>
            <a href="">read more</a>
        </div>
    </div>
</template>
<script>
export default {
    props: ["blog"]
}
</script>