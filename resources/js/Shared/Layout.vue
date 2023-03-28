<template>
    <section class="p-4 bg-gradient-to-r from-green-600 via-green-500 to-green-300 shadow-xl">
      <header class="flex">
        <div class="w-full md:ml-auto">
         
          <Nav class="mt-auto mb-auto" />
        </div>
      </header>
    </section>
    <section class="p-4">
      <slot />
    </section>
  </template>
  

<script>
import Nav from "./Nav.vue";

export default {
    components: { Nav },

    created(){
        this.$store.commit('setBrand', this.$page.props.brands)
        console.log("Layout create");
    },
};
</script>