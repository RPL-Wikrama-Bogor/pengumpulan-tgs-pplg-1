<template>
  <div>
    <input type="text" placeholder="masukan nama" v-model="formDataKelas.nama">
    <br>
    <input type="text" placeholder="masukan kelas" v-model="formDataKelas.kelas">
    <br>
    <button @click="tambahKelas">tambah siswa</button>

    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <td><button @click="hapusDataKelas(murid.id)">Hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      dataKelas: [{
        id: Date.now(),
        nama: 'radit',
        kelas: '10'
      }],
      formDataKelas: {
        nama: '',
        kelas: '',
        id: null
      }
    }
  },
  methods: {
    tambahKelas() {
      if (this.formDataKelas.nama && this.formDataKelas.kelas) {
        this.formDataKelas.id = Date.now();
        this.dataKelas.push({ ...this.formDataKelas });
        this.formDataKelas.nama = '';
        this.formDataKelas.kelas = '';
        this.formDataKelas.id = null;
      }
    },
    hapusDataKelas(id) {
      this.dataKelas = this.dataKelas.filter(item => item.id !== id);
    }
  }
}
</script>