<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
        <Head title="Naujas Skelbimas" />
        <h1 class="text-4xl font-bold">Naujas Skelbimas</h1>

        <form method="POST" action="/">
            <div class="mb-6 mt-6">
                <h3 class="text-xl mb-4">Pasirinkite markę</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" @change="getModels">
                    <option>Select an option</option>
                    <option v-for="brand in  this.$store.getters.getBrand" :key="brand.id" :selected="brand.id == this.selected"
                      :value="brand.id" >{{ brand.title }}</option>
                  </select>
                  <h3 class="text-xl mb-3 mt-6">Pasirinkite modelį</h3>
                  <select class="block w-full py-2 px-3 border border-gray-400 mb-4">
                    <option v-for="model in this.$store.getters.getModel" :key="model.id">{{ model.model }}</option>
        
                  </select>
            </div>

        </form>

    </div>
   
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
    props: {
    brands: Array,
    models: Array,
  },
    layout: Layout,
    methods: {
    getModels(event) {
      this.selected = event.target.value;
     
      console.log(event.target.value);
    },
  },
  created() {
    this.$store.commit('setModel', this.models),
      console.log('setModel');
  },
  data() {
    return {
      selected: '',
    }
  },
};

</script>