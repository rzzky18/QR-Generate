<template>
  <div>
    <h2>Form </h2>
    <form @submit.prevent="submit">
      <input v-model="form.nama" placeholder="Nama" />
      <input v-model="form.tempat_tinggal" placeholder="Tempat_tinggal" />
      <input v-model="form.nip" placeholder="nip" type="number"/>
      <input v-model="form.email" placeholder="Email" type="email" />
      <button type="submit">Simpan</button>
    </form>

    <div v-if="errors.length">
      <ul>
        <li v-for="(error, index) in errors" :key="index">{{ error }}</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        nama: '',
        tempat_tinggal: '',
        nip: '',
        email: ''
      },
      errors: []
    }
  },
  methods: {
    async submit() {
      this.errors = [];

      // Validasi Front-End
      if (!this.form.nama || !this.form.tempat_tinggal || !this.form.nip || !this.form.email) {
        this.errors.push('Semua field wajib diisi.');
        return;
      }

      try {
        await fetch("http://127.0.0.1:8000/api/karyawan", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
          },
          body: JSON.stringify(this.form)
        });
        alert("Berhasil disimpan!");
      } catch (err) {
        this.errors.push("Gagal menyimpan data.");
      }
    }
  }
}
</script>
