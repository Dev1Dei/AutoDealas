<template>

    <article class="p-6 flex border-t">
        <div class="left flex-shrink-0 mr-4">
          <div class="image">
            <img class="w-70 h-52 object-cover" src="../../../public/assets/Images/test.jpg">
          </div>
        </div>
        <div class="description">
          <h2 class="item-title pb-3"><Link :href="link" class="font-bold text-xl text-green-500">{{ make }} {{ model }}</Link></h2>
          <div class="item-description">
            <div class="primary pb-2">
              {{ engine }},
              {{ fuelType }},
              {{ year }},
              {{ transmition }}
            </div>
            <div class="secondary">
              200000km,
              {{ Type }},
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
},
computed: {
    link(){
        return `/listings/${this.id}`
    }
},
};
</script>