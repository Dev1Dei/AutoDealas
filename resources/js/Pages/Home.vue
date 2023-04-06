<template>
  <form @submit.prevent="search">
  <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
    <div class="flex flex-col md:flex-row h-full">
      <div class="w-full md:w-1/2 border-r-0 md:border-r border-gray-400">
        <div class="p-8">
          <h2 class="text-xl font-bold mb-4">Markės</h2>
          <select class="block w-full py-2 px-3 border border-gray-400 mb-4" @change="getModels" v-model="form.marke">
            <option value default disabled>Pasirinkite markę</option>
            <option v-for="brand in  this.$store.getters.getBrand" :key="brand.id" :selected="brand.id == this.selected"
              :value="brand.id" >{{ brand.title }}</option>
          </select>
          <h2 class="text-xl font-bold mb-4">Kaina</h2>
          <div class="flex mb-4">
            <select class="block w-1/2 py-2 px-3 border border-gray-400 mr-2" v-model="form.minPrice">
              <option value default disabled>Nuo</option>
              <option value="150">150</option>
              <option value="300">300</option>
              <option value="500">500</option>
              <option value="1000">1000</option>
              <option value="1500">1500</option>
              <option value="2000">2000</option>
              <option value="2500">2500</option>
              <option value="3000">3000</option>
              <option value="3500">3500</option>
              <option value="4000">4000</option>
              <option value="4500">4500</option>
              <option value="5000">5000</option>
              <option value="6000">6000</option>
              <option value="7000">7000</option>
              <option value="8000">8000</option>
              <option value="9000">9000</option>
              <option value="10000">10000</option>
              <option value="12500">12500</option>
              <option value="15000">15000</option>
              <option value="17500">17500</option>
              <option value="20000">20000</option>
              <option value="25000">25000</option>
              <option value="30000">30000</option>
              <option value="45000">45000</option>
              <option value="60000">60000</option>
              <option value="70000">70000</option>
              <option value="80000">80000</option>
              <option value="90000">90000</option>
              <option value="100000">100000</option>
            </select>
            <select class="block w-1/2 py-2 px-3 border border-gray-400" v-model="form.maxPrice">
              <option value default disabled>Iki</option>
              <option value="150">150</option>
              <option value="300">300</option>
              <option value="500">500</option>
              <option value="1000">1000</option>
              <option value="1500">1500</option>
              <option value="2000">2000</option>
              <option value="2500">2500</option>
              <option value="3000">3000</option>
              <option value="3500">3500</option>
              <option value="4000">4000</option>
              <option value="4500">4500</option>
              <option value="5000">5000</option>
              <option value="6000">6000</option>
              <option value="7000">7000</option>
              <option value="8000">8000</option>
              <option value="9000">9000</option>
              <option value="10000">10000</option>
              <option value="12500">12500</option>
              <option value="15000">15000</option>
              <option value="17500">17500</option>
              <option value="20000">20000</option>
              <option value="25000">25000</option>
              <option value="30000">30000</option>
              <option value="45000">45000</option>
              <option value="60000">60000</option>
              <option value="70000">70000</option>
              <option value="80000">80000</option>
              <option value="90000">90000</option>
              <option value="100000">100000</option>
            </select>
          </div>
          <h2 class="text-xl font-bold mb-4">Kėbulo tipas</h2>
          <div class="flex flex-wrap justify-center">
            <div class="flex items-center mr-4">
              <input v-model="form.body"
                class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                type="checkbox" id="Sedanas" value="Sedanas"  />
              <label class="pr-4 inline-block  hover:cursor-pointer" for="Sedanas">Sedanas</label>
            </div>
            <div class="flex items-center mr-4">
              <input v-model="form.body"
                class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                type="checkbox" id="Hečbekas" value="Hečbekas" />
              <label class="pr-4 inline-block  hover:cursor-pointer" for="Hečbekas">Hečbekas</label>
            </div>
            <div class="flex items-center mr-4">
              <input v-model="form.body" 
                class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                type="checkbox" id="Universalas" value="Universalas" />
              <label class="pr-4 inline-block  hover:cursor-pointer" for="Universalas" >Universalas</label>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="p-8">
          <h2 class="text-xl font-bold mb-4">Modelis</h2>
          <select class="block w-full py-2 px-3 border border-gray-400 mb-4" v-model="form.modelis" >
            <option value default disabled>Pasirinkite modelį</option>
            <option v-for="model in this.modeliai" :key="model.id" :value="model.id">{{ model.model }}</option>

          </select>
          <h2 class="text-xl font-bold mb-4">Metai</h2>
          <div class="flex mb-4">
            <select class="block w-1/2 py-2 px-3 border border-gray-400 mr-2" v-model="form.minYear" > <!--Nuo-->
              <option value default disabled>Nuo</option>
              <option value="2022">2022</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1980">1980</option>
              <option value="1975">1975</option>
              <option value="1970">1970</option>
              <option value="1965">1965</option>
              <option value="1960">1960</option>
              <option value="1950">1950</option>
              <option value="1940">1940</option>
              <option value="1930">1930</option>
              <option value="1925">1925</option>
            </select>
            <select class="block w-1/2 py-2 px-3 border border-gray-400" v-model="form.maxYear"  > <!--Iki-->
              <option value default disabled>Iki</option>
              <option value="2022">2022</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1980">1980</option>
              <option value="1975">1975</option>
              <option value="1970">1970</option>
              <option value="1965">1965</option>
              <option value="1960">1960</option>
              <option value="1950">1950</option>
              <option value="1940">1940</option>
              <option value="1930">1930</option>
              <option value="1925">1925</option>
            </select>
          </div>
          <h2 class="text-xl font-bold mb-4">Kuro tipas</h2>
          <div class="flex flex-wrap justify-center">
            <div class="flex items-center mb-2 mr-4">
              <input v-model="form.fuelType"
                class="relative  float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                type="checkbox" id="benzinas" value="Benzinas" />
              <label class="pr-4 inline-block  hover:cursor-pointer" for="Benzinas">Benzinas</label>
            </div>
            <div class="flex items-center mb-2 mr-4">
              <input v-model="form.fuelType"
                class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                type="checkbox" id="elektra" value="Elektra"  />
              <label class="pr-4 inline-block  hover:cursor-pointer" for="Elektra">Elektra</label>
            </div>
            <div class="flex items-center mb-2 mr-4">
              <input v-model="form.fuelType"
                class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                type="checkbox" id="dyzelinas" value="Dyzelinas"  />
              <label class="pr-4 inline-block  hover:cursor-pointer" for="Dyzelinas">Dyzelinas</label>
            </div>
          </div>
          <button class="w-2/3 bg-green-500 text-white flex p-3 mt-6 ml-auto" type="submit"><a
              class="mr-auto ml-auto">Ieškoti</a></button>
        </div>

      </div>
    </div>
  </div>
  </form >
</template>

<script>
import { router } from "@inertiajs/vue3";
import Layout from "../Shared/Layout.vue";
import { reactive } from "vue";
import { mapState } from "vuex";

export default {
  layout: Layout,
  props: {
    brands: Array,
    models: Array,
    user: {
     type: Object,
     default: () => ({}),
    }
  },
  methods: {
    getModels(event) {
      this.selected = event.target.value;
      router.visit(`/models/${event.target.value}`, {preserveState:true})
      console.log(event.target.value);
    },
    search() {
      router.post('/listings/search', this.form)
    },
  },
  // watch: {
  //   models: {
  //    handler(newVal, oldVal){
  //     this.$store.commit('setModel', newVal),
  //     console.log('kaušas bet ne kaušas');
  //     },
  //     deep:true,
  //   },
  // },
  computed:{
    modeliai(){
      return this.$page.props.models;
    },
    ...mapState([
      'pageProps'
    ]),
  },
  watch:{
    user:{
      immediate: true,
      handler(newVal){
        if(newVal !== null && newVal !== undefined){
          this.$store.commit('setUser', newVal);
        }
      }
    }
  },
  data() {
    return {
      selected: '',
      form: reactive({
         modelis:'', marke:'', year:'', minYear:'', maxYear:'', minPrice:'', maxPrice:'', engine:'', fuelType:[], color:'', transmition:'', drive:'', numberOfDoors:'', numberOfSeats:'', body:[], price:'', city:'',
         country:'', sellerNumber:'', description:'', photo:'',
       })
    }
  },
  mounted() {
     //if (!this.$page.props.brands){
      //    router.visit('/', {preserveState:true})
     //}
      

    const { props } = this.$page;
      this.$store.commit('setProps', props)
      console.log(props)

  }
};
</script>