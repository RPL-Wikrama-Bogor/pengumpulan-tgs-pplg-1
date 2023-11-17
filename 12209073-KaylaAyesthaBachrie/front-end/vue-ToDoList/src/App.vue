<template>
    <div>
        <input type="text" placeholder="masukan nama" v-model="formDataRombel.nama">
        <br>
        <input type="text" placeholder="masukan rombel" v-model="formDataRombel.rombel">
        <br>
        <button @click="tambahRombel">Tambah Siswa</button>

        <table>
            <tr>
                <th> Id</th>
                <th> Nama</th>
                <th> Kelas</th>
                <th> Aksi</th>
            </tr>
            <tr v-for="(murid, index) in dataRombel" :key="index">
                <td>{{ index + 1 }}</td>
                <td>{{ murid.nama }}</td>
                <td>{{ murid.rombel }}</td>
                <td><button @click="hapusDataRombel(murid.id)">Hapus</button></td>
            </tr>
        </table>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                dataRombel:[{
                    nama: 'Dimas',
                    rombel: 'KLN'
                }],
                formDataRombel:{
                    nama: '',
                    rombel: ''
                }
            }
        },
        methods: {
            tambahRombel(){
                this.formDataRombel.id = Date.now();
                this.dataRombel.push(this.formDataRombel);
                this.formDataRombel = {
                    nama: '',
                    rombel: ''
                }
            },
            hapusDataRombel(id){
                this.dataRombel = this.dataRombel.filter(item => item.id != id);
            }
        }
    }
</script>