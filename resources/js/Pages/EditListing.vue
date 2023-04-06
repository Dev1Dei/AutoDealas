<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
      <div class="py-10 px-4 max-w-md mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-green-600">Redaguoti skelbimą</h1>
        <form @submit.prevent="updateListing" class="space-y-4">
          <div class="flex flex-col space-y-2">
            <label for="description" class="text-lg font-bold text-gray-600">Aprašymas:</label>
            <textarea id="description" v-model="listing.description" required class="p-2 border border-gray-400" rows="5" style=""></textarea>
          </div>
          <div class="flex flex-col space-y-2">
            <label for="price" class="text-lg font-bold text-gray-600">Kainą (€):</label>
            <input type="number" id="price" v-model="listing.price" required class="p-2 border border-gray-400">
          </div>
          <div class="flex flex-col space-y-2">
            <label for="price" class="text-lg font-bold text-gray-600">Rida:</label>
            <input type="number" id="price" v-model="listing.miles" required class="p-2 border border-gray-400">
          </div>
          <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">Atnaujinti skelbimą</button>
        </form>
      </div>
    </div>
  </template>
  
  
  
  
  
  
  
  <script>
  import Layout from "../Shared/Layout.vue";
  import { ref } from 'vue';
  import { usePage, router } from '@inertiajs/vue3';
  export default {
    layout: Layout,
    setup() {
        
      const { listing } = usePage().props;
      
      const updateListing = async () => {
        try {
          await router.put(`/listings/${listing.id}`, listing);
          router.push(`/listings/${listing.id}`);
        } catch (error) {
          console.error('Error updating listing:', error);
        }
      };
  
      return {
        listing,
        updateListing,
      };
    },
  };
  </script>
  