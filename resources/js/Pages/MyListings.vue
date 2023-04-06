<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
      <div class="py-10 px-4 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">Mano Skelbimai</h1>
        <ul class="space-y-4">
          <li v-for="listing in listings" :key="listing.id" class="flex items-center justify-between bg-white shadow-md rounded-lg p-4 w-full">
            
            <div class="flex items-center">
                <img :src="'/storage/' + listing.photo" class=" w-40 h-32 mr-4 ">
                <div class="flex-grow">
                  <h2 class="text-lg font-bold text-green-600">{{ listing.title }}</h2>
                  <p class="text-gray-500 overflow-hidden text-ellipsis w-60" style="white-space: nowrap;">{{ listing.description }}</p>
                </div>
              </div>
            <div class="ml-4 flex-shrink-0 space-x-2 flex">
                <Link :href="`/listings/${listing.id}`" class="bg-green-400 hover:bg-green-500 hover:text-white text-black font-bold py-2 px-4 rounded-lg flex-1 text-center">Peržiūrėti</Link>
                <Link :href="`/listings/edit/${listing.id}`" class="bg-green-400 hover:bg-green-500 hover:text-white text-black font-bold py-2 px-5 rounded-lg flex-1 text-center">Pakeisti</Link>
                <button @click="deleteListing(listing.id)" class="bg-green-400 hover:bg-green-500 hover:text-white text-black font-bold py-2 px-6 rounded-lg flex-1 text-center">Ištrinti</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </template>
  
  
  
  
  
  
  
  
  <script>
  import { ref } from 'vue';
  import Layout from "../Shared/Layout.vue";
  import { usePage, router } from '@inertiajs/vue3';
  export default {
    layout: Layout,
    setup() {
      const { listings } = usePage().props;
      const deleteListing = async (listingId) => {
        if (confirm('Are you sure you want to delete this listing?')) {
          try {
            await router.delete(`/listings/${listingId}`);
            router.push('/')
            const index = listings.value.findIndex(listing => listing.id === listingId);
            if (index !== -1) {
              listings.value.splice(index, 1);
            }
            
          } catch (error) {
            console.error('Error deleting listing:', error);
          }
        }
      };
  
      return {
  listings,
  deleteListing,
};
    },
  };
</script>

  