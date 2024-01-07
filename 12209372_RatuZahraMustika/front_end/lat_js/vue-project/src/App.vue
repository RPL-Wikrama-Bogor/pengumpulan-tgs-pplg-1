<template>
  <div>
    <input type="text" placeholder="masukan nama" v-model="formDataKelas.nama">
    <br>
    <input type="text" placeholder="masukan kelas" v-model="formDataKelas.kelas">
    <br>
    <button @click="tambah kelas">tambah siswa</button>

    <table>
      <tr>
        <th> Id</th>
        <th> Nama</th>
        <th> Kelas</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return{
      dataKelas: [{
        nama: 'radit',
        kelas: '10'
      }],
      formDataKelas:{
        nama:'',
        kelas:''
      }

      
    }
  },
  
  methods: {
    tambahKelas() {
      this.dataKelas.push(this.formDataKelas);
    }
}
}

</script>