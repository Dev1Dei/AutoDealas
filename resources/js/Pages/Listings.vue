<template>
 
        <h1 class="text-2xl pb-6">Visi skelbimai</h1>

        <article class="p-6 mb-4 border-2 border-green-500 flex">
            <div class="left flex-shrink-0 mr-4">
              <div class="image">
                <img class="w-70 h-52 object-cover" src="../../../public/assets/Images/test.jpg">
              </div>
            </div>
            <div class="description">
              <h2 class="item-title pb-3"><a class="font-bold text-xl text-green-500">Audi A4</a></h2>
              <div class="item-description">
                <div class="primary pb-2">
                  2.0l,
                  Benzinas,
                  2022,
                  Mechanine
                </div>
                <div class="secondary">
                  200000km,
                  Lengvasis Automobilis,
                  Kretinga,
                </div>
                <div class="item-price pt-20 ">
                  <a class="font-bold p-1 text-green-500 border-2 rounded-lg border-green-500">2 000 €</a>
                </div>
              </div>
            </div>
          </article>
          <article class="p-6 border-2 border-green-500 flex">
            <div class="left flex-shrink-0 mr-4">
              <div class="image">
                <img class="w-70 h-52 object-cover" src="../../../public/assets/Images/test.jpg">
              </div>
            </div>
            <div class="description">
              <h2 class="item-title pb-3"><a class="font-bold text-xl text-green-500">Audi A4</a></h2>
              <div class="item-description">
                <div class="primary pb-2">
                  2.0l,
                  Benzinas,
                  2022,
                  Mechanine
                </div>
                <div class="secondary">
                  200000km,
                  Lengvasis Automobilis,
                  Kretinga,
                </div>
                <div class="item-price pt-20 ">
                  <a class="font-bold p-1 text-green-500 border-2 rounded-lg border-green-500">2 000 €</a>
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
        brands: String,
    },
};
</script>