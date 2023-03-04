<template>
 
        <h1 class="text-2xl pb-6">Visi skelbimai</h1>

        <article v-for="listing in listings" :key="listing.id" class="p-6 flex border-t border-b">
            <div class="left flex-shrink-0 mr-4">
              <div class="image">
                <img class="w-70 h-52 object-cover" src="../../../public/assets/Images/test.jpg">
              </div>
            </div>
            <div class="description">
              <h2 class="item-title pb-3"><Link :href="route('listings.show', { listing: listing.id })" class="font-bold text-xl text-green-500">{{ listing.title }}</Link></h2>
              <div class="item-description">
                <div class="primary pb-2">
                  {{ listing.engine }}
                  {{ listing.fuelType }}
                  {{ listing.year }}
                  {{ listing.transmition }}
                </div>
                <div class="secondary">
                  200000km
                  {{ listing.Type }}
                  {{ listing.city }}
                </div>
                <div class="item-price pt-20  ">
                  <a class="font-bold p-1 text-green-500 border-2 rounded-lg border-green-500">{{ listing.price }} €</a>
                </div>
              </div>
            </div>
          </article>
          

</template>

<script>
import axios from 'axios';
import Layout from "../Shared/Layout.vue";
export default {
    layout: Layout,
    props: {
        brands: String,
        listings: Array,
    },
};
</script>