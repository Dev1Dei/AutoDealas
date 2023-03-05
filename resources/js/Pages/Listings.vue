<template>
  <h1 class="text-2xl pb-6">Visi skelbimai</h1>
  <car-listing v-for="listing in listings" :key="listing.id" :fuelType="listing.fuelType" :engine="listing.engine"
    :year="listing.year" :transmition="listing.transmition" :title="listing.title" :carType="listing.Type"
    :city="listing.city" :price="listing.price" :id="listing.id" >
    

  </car-listing>
</template>

<script>
import CarListing from "./CarListing.vue";
import Layout from "../Shared/Layout.vue";
export default {
  layout: Layout,
  props: {
    brands: String,
    listings: Array,
  },
  components: {
    CarListing,
  },
  computed: {
    link() {

    }
  },
};
</script>