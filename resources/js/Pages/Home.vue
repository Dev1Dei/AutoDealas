<template>
   
        

        <div class="flex h-full">
            <div class="w-1/2 border-r border-gray-400">
              <div class="p-8">
                <h2 class="text-xl font-bold mb-4">Markės</h2>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" v-model="selection">
                  <option>Select an option</option>
                  <option v-for="brand in carBrands" :key="brand.id" :value="brand.id">{{ brand.title }}</option>
                </select>
                <h2 class="text-xl font-bold mb-4">Kaina</h2>
                <div class="flex mb-4">
                  <select class="block w-1/2 py-2 px-3 border border-gray-400 mr-2">
                    <option value default>Nuo</option>
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
                  <select class="block w-1/2 py-2 px-3 border border-gray-400">
                    <option value default>Iki</option>
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
                <select class="block w-full py-2 px-3 border border-gray-400">
                  <option>Select an option</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                </select>
              </div>
            </div>
            <div class="w-1/2">
              <div class="p-8">
                <h2 class="text-xl font-bold mb-4">Modelis</h2>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4">
                  <option>Select an option</option>
                  <option v-for="model in models" :key="model.id">{{ model.model }}</option>
                  
                </select>
                <h2 class="text-xl font-bold mb-4">Metai</h2>
                <div class="flex mb-4">
                  <select class="block w-1/2 py-2 px-3 border border-gray-400 mr-2"> <!--Nuo-->
                    <option value default>Nuo</option>
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
                  <select class="block w-1/2 py-2 px-3 border border-gray-400">  <!--Iki-->
                    <option value default>Iki</option>
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
                <select class="block w-full py-2 px-3 border border-gray-400">
                  <option>Select an option</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  </select>
                <button class="w-2/3 bg-green-500 text-white flex p-3 mt-6 ml-auto"><a class="mr-auto ml-auto">Ieškoti</a></button>
                  </div>
                    
                  </div>
                  </div>
                  
                    
        
            

        

</template>

<script>
import { router } from "@inertiajs/vue3";
import Layout from "../Shared/Layout.vue";
export default {
    layout: Layout,    
    props: {
        brands: String,
        models: Array,
    },
    watch: {
      models:{
        handler(newVal,oldVal){
          this.carBrands = newVal;
        }
      },
      selection:{
        handler(newVal, oldVal){
          router.get(`/models/${newVal}`)
        }
      }
    },
    data(){
      return{
        carBrands: [],
        selection: '',
        carModels: [],
      
      }
    },
    created(){
      this.carBrands = this.brands;
    },
};
</script>