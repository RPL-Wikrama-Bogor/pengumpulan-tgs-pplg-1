<template>
  <ul>
    <li>
      <router-link :to="{
        name: 'Home'
      }">Home</router-link>
      <a href="/about">About</a>
    </li>
  </ul>
  <router-view></router-view>
</template>