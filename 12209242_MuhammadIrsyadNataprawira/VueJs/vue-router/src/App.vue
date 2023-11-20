<script setup>

</script>

<template>
    <div id="app">
        <nav>
            <ul>
                <li>
                    <router-link to="/" class="text-white decor-none">Home</router-link>
                </li>
                <li>
                    <router-link to="/about" class="text-white decor-none">About</router-link>
                </li>
            </ul>
        </nav>

        <router-view></router-view>
    </div>
</template>

<style scoped>
nav ul {
    display: flex;
    list-style: none;
    gap: 10px;
}

nav ul li {
    background-color: hsl(252, 48%, 57%);
    padding: 4px 6px;
    border-radius: 5px;
    color: #fff;
    transition: .5s;
}

nav ul li:hover {
    background-color: hsl(252, 38%, 38%);
}

.text-white {
    color: white;
}

.decor-none {
    text-decoration: none;
}

</style>
