<template>
  <div class="coming-soon-container">
    <div class="content">
      <h1>Coming Soon</h1>
      <p>We are working on something awesome!</p>
      <router-link to="/blog">Back?</router-link>
    </div>
  </div>
</template>

<style scoped>
.coming-soon-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f2f2f2;
}

.content {
  text-align: center;
}

h1 {
  font-size: 36px;
  color: #333;
}

p {
  font-size: 18px;
  color: #555;
  margin-bottom: 20px;
}

a {
  font-size: 1.5rem;
  font-weight: bold;
}

.countdown {
  display: flex;
  justify-content: center;
}

.countdown-item {
  margin: 0 10px;
  font-size: 24px;
  color: #333;
}

.countdown-number {
  font-size: 36px;
  color: #007bff;
}

.countdown-label {
  font-size: 18px;
  color: #555;
}
</style>
