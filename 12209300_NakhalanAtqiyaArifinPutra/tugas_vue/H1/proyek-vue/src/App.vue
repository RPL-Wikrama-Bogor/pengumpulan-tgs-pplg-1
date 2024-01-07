<template>
<div>
  <!--input data siswa dan akan masuk ke table-->
  <input type="text" placeholder="Masukan nama" v-model="formDataKelas.nama" required>
  <br>
  <input type="number" placeholder="Masukan kelas" v-model="formDataKelas.kelas" required>
  <br>
  <button @click="tambahKelas">Tambah Siswa</button>

<table>
  <tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Kelas</th>
  </tr>
  <tr v-for="(murid, index) in dataKelas" :key="index">
    <td>{{ index+1 }}</td>
    <td>{{murid.nama}}</td>
    <td>{{murid.kelas}}</td>
    <td><button @click="hapusDataKelas(murid.id)">Hapus data</button></td>

  </tr>
</table>
</div>
</template>
<script>
export default{
  data(){
    return{
      dataKelas:[{
        nama:'nakhalan',
        kelas: 10
      }],
      formDataKelas:{
        nama:'',
        kelas:''
      }
    }
  },
  methods:{
    tambahKelas(){
      this.formDataKelas.id =Date.now()

      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas ={
        nama:'',
        kelas:''
      }
    },
    hapusDataKelas(id){
      this.dataKelas =this.dataKelas.filter(item => item.id != id);
    }
  } 
}
</script>