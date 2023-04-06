<template>
  <article class="p-6 flex border-t">
    <div class="left flex-shrink-0 mr-4">
      <div class="image h-60 w-70 aspect-[6/4]">
        <img class="w-full h-full object-cover" :src="'/storage/' + photo" >
      </div>
    </div>
    <div class="description">
      <h2 class="item-title pb-3"><Link :href="link" class="font-bold text-2xl text-green-500">{{ make }} {{ model }}</Link></h2>
      <div class="item-description">
        <div class="primary pb-2">
          {{ engine }},
          {{ fuelType }},
          {{ year }},
          {{ transmition }},
        </div>
        <div class="secondary">
          {{ miles }} km,
          {{ city }}
        </div>
        <div class="item-price pt-20  ">
          <a class="font-bold p-1 text-green-500 border-2 rounded-lg border-green-500">{{ price }} €</a>
        </div>
      </div>
    </div>
  </article>
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
layout: Layout,
props: {
    engine: String,
    fuelType: String,
    year: String,
    transmition: String,
    carType: String,
    city: String,
    price: String,
    id: Number,
    title: String,
    make: String,
    model: String,
    photo: String,
    miles: Number,
    listing: Object,
},

computed: {
    link(){
        return `/listings/${this.id}`
    }
},
};
</script>