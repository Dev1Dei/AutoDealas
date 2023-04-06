<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">

        <Head title="Naujas Skelbimas" />
        <h1 class="text-4xl font-bold">Naujas Skelbimas</h1>

        <form enctype="multipart/form-data" @submit.prevent="create" >

            <label class="text-xl mb-3 mt-6" for="title">Skelbimo pavadinimas:</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" for="title" name="title" id="title" required v-model="form.title">
         
            <div class="mb-6 mt-6">
                <h3 class="text-xl mb-4">Pasirinkite markę</h3>

                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="brand_id" id="brand_id" name="brand_id" @change="getModels" v-model="form.brand_id">
                    <option default value disabled>-------</option>
                    <option v-for="brand in  this.$store.getters.getBrand" :key="brand.id"
                        :selected="brand.id == this.selected" :value="brand.id">{{ brand.title }}</option>
                </select>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite modelį</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="model" id="model" name="model" v-model="form.model">
                    <option default value disabled>-------</option>
                    <option v-for="model in this.modeliai" :key="model.id">{{ model.model }}</option>
                </select>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite metus</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-6" for="Year" id="Year" name="Year" v-model="form.year">
                    <option default value disabled>-------</option>
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

                <label class="text-xl mb-3 mt-6" for="engine">Įrašykite varilio tūrį</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" placeholder="Pvz: 1.8l" name="engine" id="engine" required v-model="form.engine">
                
                <label class="text-xl mb-3 mt-6" for="kW">Įrašykite varilio galią, kW</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="number" placeholder="-------" name="kW" id="kW" required v-model="form.kW">
                <label class="text-xl mb-3 mt-6" for="kW">Įrašykite varilio galią, HP</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="number" placeholder="-------" name="Horses" id="Horses" required v-model="form.Horses">
                
                <label class="text-xl mb-3 mt-6" for="kW">Įrašykite ridą</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="number" placeholder="-------" name="Horses" id="Horses" required v-model="form.miles">
                <h3 class="text-xl mb-3">Pasirinkite kuro tipą</h3>
                <div class="flex">
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input v-model="form.fuelType"
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                            type="radio" id="benzinas" name="fuelType" value="Benzinas" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="benzinas">Benzinas</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input v-model="form.fuelType"
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                            type="radio" id="elektra" name="fuelType" value="Elektra" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="elektra">Elektra</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input v-model="form.fuelType"
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                            type="radio" id="dyzelinas" name="fuelType" value="Dyzelinas" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="dyzelinas">Dyzelinas</label>
                    </div>
                </div>

                <h3 class="text-xl mb-3 mt-3">Pasirinkite kėbulo tipą</h3>
                <div class="flex">
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input v-model="form.body"
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                            type="radio" id="sedanas" name="body" value="Sedanas" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="sedanas">Sedanas</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input v-model="form.body"
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                            type="radio" id="hečbekas" name="body" value="Hečbkeas" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="hečbekas">Hečbekas</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input v-model="form.body"
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                            type="radio" id="universalas" name="body" value="Universalas" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="universalas">Universalas</label>
                    </div>
                </div>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite spalvą</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="color" id="color" name="color" v-model="form.color">
                    <option value default disabled>-------</option>
                    <option value="Raudona">Raudona</option>
                    <option value="Geltona">Geltona</option>
                    <option value="Žalia">Žalia</option>
                    <option value="Mėlyna">Mėlyna</option>
                    <option value="Juoda">Juoda</option>
                    <option value="Balta">Balta</option>
                    <option value="Oranžinė">Oranžinė</option>
                    <option value="Violetinė">Violetinė</option>
                    <option value="Rožinė">Rožinė</option>
                    <option value="Tamsiai mėlyna">Tamsiai mėlyna</option>
                    <option value="Šviesiai mėlyna">Šviesiai mėlyna</option>
                    <option value="Šviesiai žalia">Šviesiai žalia</option>
                    <option value="Tamsiai žalia">Tamsiai žalia</option>
                    <option value="Ruda">Ruda</option>
                </select>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite greičio dėžės tipą</h3>
                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input v-model="form.transmition"
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                        type="radio" id="mechaninė" name="transmition" value="Mechaninė" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="mechaninė">Mechaninė</label>
                </div>

                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]" >
                    <input v-model="form.transmition"
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                        type="radio" id="automatinė" name="transmition" value="Automatinė" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="automatinė">Automatinė</label>
                </div>

                <h3 class="text-xl mb-3 mt-6">Varantieji ratai</h3>
                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input v-model="form.wheelDrive"
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                        type="radio" id="fwd" name="wheelDrive" value="Priekiu varomas" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="fwd">Priekiu varomieji</label>
                </div>

                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input v-model="form.wheelDrive"
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                        type="radio" id="rwd" name="wheelDrive" value="Galu varomas" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="rwd">Galu varomieji</label>
                </div>

                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input v-model="form.wheelDrive"
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                        type="radio" id="awd" name="wheelDrive" value="Visi varomieji" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="awd">Visi varomieji</label>
                </div>
            </div>

             <h3 class="text-xl mb-3 mt-6">Pasirinkite kurioje pusėje vairas</h3>
                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input v-model="form.wheelLocation"
                    class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"


                        type="radio" id="LHD" name="WL" value="Kairėje" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="LHD">Kairėje</label>
                </div>
                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input v-model="form.wheelLocation"
                    class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-full border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-full focus:after:content-['']"
                        type="radio" id="RHD" name="WL" value="Dešinėje" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="RHD">Dešinėje</label>
                </div>
            
            <h3 class="text-xl mb-3 mt-6">Durų skaičius <a class="text-xs text-gray-500"> (Atsinaujina automatiškai)</a></h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="numberOfDoors" id="numberOfDoors" v-model="form.numberOfDoors">
                    <option value default disabled>-------</option>
                    <option value="2/3">2/3</option>
                    <option value="4/5">4/5</option>
                    <option value="6/7">6/7</option>
                </select>
                
                <label class="text-xl mb-6 mt-6" for="price">Įrašykite kainą €</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="number" placeholder="Pvz: 2000" name="price" id="price" for="price" required v-model="form.price">
                
                <label class="text-xl mb-3 mt-6" for="description">Aprašymas</label>
                <textarea class="border border-gray-400 mb-4 w-full py-2 px-3 h-64" type="LongText" for="descsription" name="description" id="description" v-model="form.description"> </textarea>

                <hr><br>
                <label class="text-xl mb-3 mt-6">Nuotraukos</label><br><br>
                <input type="file" accept="image/jpeg" name="photo" id="photo">
                <hr><br>
                
                <label class="text-xl mb-3 mt-6">Kontaktiniai duomenys</label><br><br>

                <label class="text-xl mb-6" for="price">Vardas</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="name" id="name"  required v-model="form.name" >

                <label class="text-xl mb-6 mt-6" for="city">Šalis</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="country" id="country" required  v-model="form.country">

                <label class="text-xl mb-6 mt-6" for="city">Miestas</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="city" id="city" required v-model="form.city">

                <label class="text-xl mb-6 mt-6" for="phone">Telefono numeris</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="phone" id="phone" required  v-model="form.sellerNumber">

                <label class="text-xl mb-6 mt-6" for="email">El. paštas</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="email" id="email" required v-model="form.email">


            <button class="w-2/3 bg-green-500 text-white flex p-3 mt-6 ml-auto" type="submit" ><a
                    class="mr-auto ml-auto">Pateikti</a></button>
        </form>

    </div>
</template>

<script>
import { router } from "@inertiajs/vue3";
import { reactive, ref } from "vue";
import Layout from "../Shared/Layout.vue";

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
  mounted() {
    this.form.country = this.user.country;
    this.form.city = this.user.city;
    this.form.sellerNumber = this.user.phone;
    this.form.email = this.user.email;
   
  },
  methods: {
    getModels(event) {
      this.selected = event.target.value;
      router.visit(`/newlisting/models/${event.target.value}`, {preserveState:true})
      console.log(event.target.value);
    },
    create() {
    const formData = new FormData();
    Object.entries(this.form).forEach(([key, value]) => {
      if (key === 'photo') {
        const fileInput = document.getElementById('photo');
        if (fileInput.files.length > 0) {
          formData.append(key, fileInput.files[0]);
        }
      } else {
        formData.append(key, value);
      }
    });

    router.post('/listings', formData);
  },
    search() {

    },
    
  },
  // watch: {
  //   models: {
  //    handler(newVal, oldVal){
  //     this.$store.commit('setModel' newVal),
  //     },
  //     deep:true,
  //   },
  // },
  computed:{
    modeliai(){
      return this.$page.props.models;
    },
    
  },
    watch:{
        'form.kW'(val){
            if(!this.updatingKw && val > 0){
                this.updatingHorses = true;
                this.form.Horses = Math.round(val*1.341);
                this.updatingHorses = false;
            }
            if(val == 0 ){
                this.form.Horses = 0;
            }
            if(val < 0 ){
                val = 0;
                this.form.Horses = 0;
            }
            if(val == '-------'){
                this.form.Horses = '-------';
            }
        },
        'form.Horses'(val){
            
            if (!this.updatingHorses && val > 0){
                this.updatingKw = true;
                this.form.kW = Math.round(val / 1.341);
                this.updatingKw = false; 
            }
            if(val == 0 ){
                this.form.kW = 0;
            }
            if(val < 0 ){
                val = 0;
                this.form.kW = 0;
            }
        },
        'form.numberOfDoors'(val) {
      if (val === '2/3') {
        this.form.numberOfSeats = '3';
      }
      if (val === '4/5') {
        this.form.numberOfSeats = '5';
      }
      if (val === '6/7') {
        this.form.numberOfSeats = '7';
      }
      
    },
    },
  data() {
    return {
      selected: '',
      form: reactive({
        model:'', make:'', title:'', year:'', engine:'', fuelType:[], color:'', transmition:[], wheelDrive:[], numberOfDoors:'', numberOfSeats:'', body:[], price:'',  city: this.user.city || '', wheelLocation:[],
        country: this.user.country || '', brand_id:'', car_model_id:'', sellerNumber: this.user.phone || '',name: this.user.name || '', email: this.user.email || '', description:'', photo:'', kW:'', Horses:'',
      }),
      updatingKw:false,
      updatingHorses:false,
    }
  },
};
</script>