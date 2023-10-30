<template>
  <div class="card c1">
    <div class="card-header">
      Input Data
    </div>
    <div class="card-body">
      <p class="card-text">
        <input class="form-control" type="text" placeholder="Input Name" v-model="formDataKelas.nama">
        <br>
        <input class="form-control" type="text" placeholder="Input Class" v-model="formDataKelas.kelas">
      </p>
      <button class="btn btn-success" @click="tambahKelas">Add Student</button>
    </div>
  </div>
  <div class="card c2">
    <div class="card-body">
      <div class="table .table-bordered table-striped">
        <table class="">
          <tr>
            <th scope="col"> ID</th>
            <th scope="col"> Name</th>
            <th scope="col"> Class</th>
            <th scope="col"> Action</th>
          </tr>
          <tr v-for="(murid, index) in dataKelas" :key="index">
            <td>{{ index + 1 }}</td>
            <td>{{ murid.nama }}</td>
            <td>{{ murid.kelas }}</td>
            <td><button class="btn btn-danger" @click="hapusDataKelas(murid.id)" >Delete</button></td>
          </tr>
        </table>    
      </div>
    </div>
  </div>
</template>
<!-- Vincensius Marcel Suhendar PPLG XI-1 -->
<script>
export default{
  data(){
    return{
      dataKelas: [{
        id: Date.now(),
        nama: 'Vincent',
        kelas: '11',
      }],
      formDataKelas:{
        nama:'',
        kelas:''
      }
    }
  },
  methods:{
    tambahKelas(){
      this.formDataKelas.id = Date.now();
      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas = {
        nama:'',
        kelas: ''
      }
    },
    hapusDataKelas(id){
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }
  }
}
</script>