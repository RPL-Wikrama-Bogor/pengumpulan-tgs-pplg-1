<template>
  <ul>
    <li>
      <!-- <a href="/">Home</a>
      <a href="/about">About</a> -->
      <!-- router-link tidak akan mereload, dan akan tetap diam -->
      <router-link :to="{ name: 'Home'}">Home</router-link>
      <router-link to="/about">About</router-link>
    </li>
  </ul>
  <router-view></router-view>
</template>