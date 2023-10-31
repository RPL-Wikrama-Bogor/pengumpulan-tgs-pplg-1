<template>
  <p>-----Todolist-----</p>
  <input v-model="formData.name" type="text" placeholder="Nama" />
  <br>
  <input v-model="formData.class" type="text" placeholder="Kelas" />
  <br>
  <button @click="addData()">Submit</button>
  
  <table>
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Kelas</th>
    </tr>
    <tr v-for="(item, index) in classData" :key="index">
      <td>{{ index+1 }}</td>
      <td>{{ item.name }}</td>
      <td>{{ item.class}}</td>
      <td><button @click="destroy(item.id)">Hapus</button></td>
    </tr>
  </table>

</template>

<script>  
  export default{
    data(){
      return{
          classData :[{
            id: Date.now(),
            name:'Ragibavi',
            class:'11'
          }],
          formData :[{
            name:'',
            class:''
          }]
      }
    },
    methods:{
      addData(){
        this.formData.id  = Date.now()
        this.classData.push(this.formData)
        this.formData = [{
          name:'',
          class:''
        }]
      },
      destroy(id){
        this.classData = this.classData.filter(item => item.id !=id)
      }
    }
  }
</script>