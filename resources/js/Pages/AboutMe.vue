<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
      <form @submit.prevent="updateProfile" class="max-w-md mx-auto">
        <div class="mb-4">
          <label for="Name" class="block font-bold mb-2">Vardas</label>
          <a>{{ user.name }}</a>
        </div>
        <div class="mb-4">
          <label for="country" class="block font-bold mb-2">Šalis</label>
          <input id="country" type="text" v-model="country" required class="w-full p-2 border border-gray-400">
        </div>
        <div class="mb-4">
          <label for="city" class="block font-bold mb-2">Miestas</label>
          <input id="city" type="text" v-model="city" required class="w-full p-2 border border-gray-400">
        </div>
        <div class="mb-4">
          <label for="phone" class="block font-bold mb-2">Telefono numeris</label>
          <input id="phone" type="text" v-model="phone" required class="w-full p-2 border border-gray-400">
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Išsaugoti</button>
      </form>
</div>
  </template>
  
  <script>
  import Layout from "../Shared/Layout.vue";
  export default {
    layout: Layout,
    props: {
    user: {
     type: Object,
     default: () => ({}),
    }
  },
  data() {
  return {
    country: this.user.country || "",
    city: this.user.city || "",
    phone: this.user.phone || "",
    form: {
      processing: false,
      errors: {},
    },
  };
},
    methods: {
        updateProfile() {
    this.$inertia.put(`/aboutme/${this.user.id}/update`, {
      country: this.country,
      city: this.city,
      phone: this.phone,
    }, {
      preserveScroll: true,
      onStart: () => {
        this.form.processing = true;
      },
      onFinish: () => {
        this.form.processing = false;
      },
      onError: (errors) => {
        this.form.errors = errors;
      },
      onSuccess: (response) => {
        this.form.errors = {};
        // You can display a success message or do something else with the response.
      }
    });
  },

    },
  };
  </script>
  