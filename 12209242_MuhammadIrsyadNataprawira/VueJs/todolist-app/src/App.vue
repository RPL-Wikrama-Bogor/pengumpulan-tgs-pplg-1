<script setup>
import { ref } from "vue";
import { Icon } from "@iconify/vue";

const dataKelas = ref([
  {
    id: Date.now(),
    nama: "Irsyad",
    kelas: 11,
  },
]);

const saveData = localStorage.getItem("dataKelas");
if (saveData) {
  dataKelas.value = JSON.parse(saveData);
}

const formDataKelas = ref({
  nama: "",
  kelas: "",
});

const addSiswa = () => {
  if (formDataKelas.value.nama && formDataKelas.value.kelas) {
    const newItem = {
      id: Date.now(),
      nama: formDataKelas.value.nama,
      kelas: formDataKelas.value.kelas,
    };

    dataKelas.value.push(newItem);

    localStorage.setItem("dataKelas", JSON.stringify(dataKelas.value));

    formDataKelas.value.nama = "";
    formDataKelas.value.kelas = "";
  }
};

const deleteData = (id) => {
  dataKelas.value = dataKelas.value.filter((item) => item.id !== id);

  localStorage.setItem("dataKelas", JSON.stringify(dataKelas.value));
};
</script>

<template>
  <div>
    <div class="form mb-5">
      <input
        type="text"
        placeholder="Input Nama..."
        v-model="formDataKelas.nama"
      />
      <input
        type="text"
        placeholder="Input Kelas..."
        v-model="formDataKelas.kelas"
      />
      <button @click="addSiswa">Tambah siswa</button>
    </div>

    <table border="1" class="w-50 text-center">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(murid, index) in dataKelas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ murid.nama }}</td>
          <td>{{ murid.kelas }}</td>
          <td @click="deleteData(murid.id)" class="pointer">
            <Icon icon="gridicons:trash" width="30px" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>
.form {
  display: flex;
  flex-direction: column;
  width: 20%;
}

.mb-5 {
  margin-bottom: 10px;
}

.pointer {
  cursor: pointer;
}

.w-50 {
  width: 50%;
}

.text-center {
  text-align: center;
}
</style>

<script>
export default {
  components: {
    Icon,
  },
};
</script>
