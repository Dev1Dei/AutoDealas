<template>
  <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
  <h1 class="text-2xl pb-6">Visi skelbimai</h1>
  <car-listing v-for="listing in searchResults ? searchResults : this.listings" :key="listing.id" :fuelType="listing.fuelType" :model="listing.model" :make="listing.make" :engine="listing.engine"
    :year="listing.year" :transmition="listing.transmition" :title="listing.title" :carType="listing.Type"
    :city="listing.city" :price="listing.price" :id="listing.id">
  </car-listing>
  </div>
</template>

<script>
import CarListing from "./CarListing.vue";
import Layout from "../Shared/Layout.vue";

export default {
  layout: Layout,
  props: {
    brands: String,
    listings: Array,
    searchResults: {
      type: Array,
      default: null,
    }
  },
  components: {
    CarListing,
  },
  watch:{
    results:{
      handler(newVal, oldVal){
      this.$store.commit('setListings', this.listings);
      
       }
    },
  },
  computed: {
    link() {
        
    },
    searchResults(){
      return this.$page.props.searchResults;
    }
  },
}
</script>