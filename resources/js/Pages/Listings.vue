<template>
  <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
  <h1 class="text-2xl pb-6">Visi skelbimai</h1>
  <div class="flex justify-center mb-6">
    <button :class="{ 'border-green-400': sortBy === 'make' }" class="px-4 py-2 mr-4 border rounded hover:bg-green-200 hover:text-green-800 focus:outline-none" @click="sortListings('make')">
      <span :class="{ 'opacity-50': sortBy !== 'make' }">Rūšiuoti pagal markę</span>
      <span v-if="sortBy === 'make'" class="text-green-400">
        <svg class="w-6 h-6 inline-block" viewBox="0 0 24 24">
          <path v-if="sortOrder === 1" fill="currentColor" d="M5 8l5 5 5-5z" />
          <path v-if="sortOrder === -1" fill="currentColor" d="M15 12l-5-5-5 5z" />
        </svg>
      </span>
    </button>
    <button :class="{ 'border-green-400': sortBy === 'model' }" class="px-4 py-2 mr-4 border rounded hover:bg-green-200 hover:text-green-800 focus:outline-none" @click="sortListings('model')">
      <span :class="{ 'opacity-50': sortBy !== 'model' }">Rūšiuoti pagal modelį</span>
      <span v-if="sortBy === 'model'" class="text-green-400">
        <svg class="w-6 h-6 inline-block" viewBox="0 0 24 24">
          <path v-if="sortOrder === 1" fill="currentColor" d="M5 8l5 5 5-5z" />
          <path v-if="sortOrder === -1" fill="currentColor" d="M15 12l-5-5-5 5z" />
        </svg>
      </span>
    </button>
    <button :class="{ 'border-green-400': sortBy === 'price' }" class="px-4 py-2 mr-4 border rounded hover:bg-green-200 hover:text-green-800 focus:outline-none" @click="sortListings('price')">
      <span :class="{ 'opacity-50': sortBy !== 'price' }">Rūšiuoti pagal kainą</span>
      <span v-if="sortBy === 'price'" class="text-green-400">
        <svg class="w-6 h-6 inline-block" viewBox="0 0 24 24">
          <path v-if="sortOrder === 1" fill="currentColor" d="M5 8l5 5 5-5z" />
          <path v-if="sortOrder === -1" fill="currentColor" d="M15 12l-5-5-5 5z" />
        </svg>
      </span>
    </button>
  </div>
  
  
  
  
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
    listings: Object,
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
  data(){
    return {
      sortBy:'',
      currentPage: 1,
      pageSize: 10,
      totalPages: 0,
    };
  },
  computed: {
    link() {
        
    },
    searchResults(){
      return this.$page.props.searchResults;
    }
  },
  methods: {
    sortListings(sortBy) {
  if (this.sortBy === sortBy && this.sortOrder === 1) {
    this.sortOrder = -1;
  } else if (this.sortBy === sortBy && this.sortOrder === -1) {
    this.sortBy = '';
    this.sortOrder = 0;
  } else {
    this.sortBy = sortBy;
    this.sortOrder = 1;
  }

  if (this.sortOrder === 0) {
    if(this.searchResults != null){
      this.searchResults.sort((a, b) => a.id - b.id)
    }
    else {
    this.listings.sort((a, b) => a.id - b.id);
    }
  } else {
    if(this.searchResults != null){
      this.searchResults.sort((a, b) => {
      if (a[sortBy] < b[sortBy]) return -1 * this.sortOrder;
      if (a[sortBy] > b[sortBy]) return 1 * this.sortOrder;
      })
    } else {
    this.listings.sort((a, b) => {
      if (a[sortBy] < b[sortBy]) return -1 * this.sortOrder;
      if (a[sortBy] > b[sortBy]) return 1 * this.sortOrder;
      return 0;
    });
    }
  }
},

    sortByPriceAsc() {
      this.$inertia.visit(route('listings.sortByPriceAsc'));
    }
  }
}
</script>