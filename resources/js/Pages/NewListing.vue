<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">

        <Head title="Naujas Skelbimas" />
        <h1 class="text-4xl font-bold">Naujas Skelbimas</h1>

        <form method="POST" action="/">
            <div class="mb-6 mt-6">
                <h3 class="text-xl mb-4">Pasirinkite markę</h3>

                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="make" @change="getModels">
                    <option>-------</option>
                    <option v-for="brand in  this.$store.getters.getBrand" :key="brand.id"
                        :selected="brand.id == this.selected" :value="brand.id">{{ brand.title }}</option>
                </select>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite modelį</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="model">
                    <option>-------</option>
                    <option v-for="model in this.$store.getters.getModel" :key="model.id">{{ model.model }}</option>
                </select>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite metus</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-6" for="Year">
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

                <label class="text-xl mb-3 mt-6" for="engine">Įrašykite varilio tūrį ( Pvz: 1.8l )</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="engine" id="engine" required>

                <h3 class="text-xl mb-3">Pasirinkite kuro tipą</h3>
                <div class="flex">
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                            type="checkbox" id="benzinas" name="benzinas" value="option" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="benzinas">Benzinas</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                            type="checkbox" id="elektra" name="elektra" value="option2" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="elektra">Elektra</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                            type="checkbox" id="dyzelinas" name="dyzelinas" value="option3" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="dyzelinas">Dyzelinas</label>
                    </div>
                </div>

                <h3 class="text-xl mb-3 mt-3">Pasirinkite kėbulo tipą</h3>
                <div class="flex">
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                            type="checkbox" id="sedanas" name="sedanas" value="option" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="sedanas">Sedanas</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                            type="checkbox" id="hečbekas" name="hečbekas" value="option2" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="elektra">Hečbekas</label>
                    </div>
                    <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                        <input
                            class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                            type="checkbox" id="universalas" name="universalas" value="option3" />
                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="universalas">Universalas</label>
                    </div>
                </div>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite spalvą</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="color">
                    <option default>-------</option>
                    <option value="raudona">Raudona</option>
                    <option value="geltona">Geltona</option>
                    <option value="žalia">Žalia</option>
                    <option value="mėlyna">Mėlyna</option>
                    <option value="juoda">Juoda</option>
                    <option value="balta">Balta</option>
                    <option value="oranžinė">Oranžinė</option>
                    <option value="violetinė">Violetinė</option>
                    <option value="rožinė">Rožinė</option>
                    <option value="tamsiai-mėlyna">Tamsiai mėlyna</option>
                    <option value="šviesiai-mėlyna">Šviesiai mėlyna</option>
                    <option value="šviesiai-žalia">Šviesiai žalia</option>
                    <option value="tamsiai-žalia">Tamsiai žalia</option>
                    <option value="ruda">Ruda</option>
                </select>

                <h3 class="text-xl mb-3 mt-6">Pasirinkite greičio dėžės tipą</h3>
                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                        type="checkbox" id="mechaninė" name="mechaninė" value="option3" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="mechaninė">Mechaninė</label>
                </div>

                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                        type="checkbox" id="automatinė" name="automatinė" value="option3" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="automatinė">Automatinė</label>
                </div>

                <h3 class="text-xl mb-3 mt-6">Varantieji ratai</h3>
                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                        type="checkbox" id="fwd" name="fwd" value="option3" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="fwd">Priekiu varomieji</label>
                </div>

                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                        type="checkbox" id="rwd" name="rwd" value="option3" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="rwd">Galu varomieji</label>
                </div>

                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-green-700 dark:checked:border-green-700 checked:bg-green-500 dark:checked:bg-green-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                        type="checkbox" id="awd" name="awd" value="option3" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="awd">Visi varomieji</label>
                </div>
            </div>

            <h3 class="text-xl mb-3 mt-6">Durų skaičius</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-4" for="numberOfDoors">
                    <option default>-------</option>
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                </select>
            
                <h3 class="text-xl mb-3 mt-6">Sėdimų vietų skaičius</h3>
                <select class="block w-full py-2 px-3 border border-gray-400 mb-6" for="numberOfSeats">
                    <option default>-------</option>
                    <option>3</option>
                    <option>5</option>
                    <option>7</option>
                </select>
                
                <label class="text-xl mb-6 mt-6" for="price">Įrašykite kainą € ( Pvz: 2500 )</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="number" name="price" id="price" required>
                
                <label class="text-xl mb-3 mt-6" for="description">Aprašymas</label>
                <textarea class="border border-gray-400 mb-4 w-full py-2 px-3 h-64" type="LongText" name="description" id="description"> </textarea>

                <hr><br>
                <label class="text-xl mb-3 mt-6">Nuotraukos</label><br><br>
                <input type="file" accept="image/jpeg" @change=uploadImage>
                <hr><br>
                
                <label class="text-xl mb-3 mt-6">Kontaktiniai duomenys</label><br><br>

                <label class="text-xl mb-6" for="price">Vardas</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="name" id="price" required>

                <label class="text-xl mb-6 mt-6" for="city">Šalis</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="city" id="country" required>

                <label class="text-xl mb-6 mt-6" for="city">Miestas</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="city" id="city" required>

                <label class="text-xl mb-6 mt-6" for="phone">Telefono numeris</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="phone" id="phone" required>

                <label class="text-xl mb-6 mt-6" for="email">El. paštas</label>
                <input class="border border-gray-400 mb-4 w-full py-2 px-3" type="text" name="email" id="email" required>


            <button class="w-2/3 bg-green-500 text-white flex p-3 mt-6 ml-auto" type="submit"><a
                    class="mr-auto ml-auto">Pateikti</a></button>
        </form>

    </div>
</template>

<script>
import { router } from "@inertiajs/vue3";
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout,
    props: {
        brands: Array,
        models: Array,
    },
    methods: {
        getModels(event) {
            this.selected = event.target.value;
            router.get(`newlisting/models/${event.target.value}`)
            console.log(event.target.value);
        },
    },
    watch: {
        models: {
            // handler(newVal, oldVal){
            // this.$store.commit('setModel', this.models),
            // console.log('kaušas bet ne kaušas');
            // }
        },
    },
    created() {
        this.$store.commit('setModel', this.models),
            console.log('setModel');
    },
    data() {
        return {
            selected: '',
        }
    },
};

</script>