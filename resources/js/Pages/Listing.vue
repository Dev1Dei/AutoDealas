<template>

    <div class="container mx-auto py-12 px-4">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden lg:flex border-green-400 border-2 border-solid">
            <div class="w-full  lg:w-1/2 p-6">
                <img :src="'/storage/' + listing.photo" alt="Car Image" class="h-full w-full object-cover lg:h-auto lg:w-full">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/5 mb-4 lg:ml-6 p-6" >
                <h2 class="text-3xl font-bold mb-4">{{ listing.make }} {{ listing.model }}</h2>
                <ul class="list-none text-lg">
                    <li class="mb-2"><span class="font-bold text-gray-700">Markė: </span> {{ listing.make }}</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Modelis: </span> {{ listing.model }}</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Metai: </span> {{ listing.year }}</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Variklis: </span> {{ listing.engine }}</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Kuro tipas: </span> {{ listing.fuelType }}</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Rida: </span> {{ listing.miles }} km</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Spalva: </span> {{ listing.color }}</li>
                    <li class="mb-2"><span class="font-bold text-gray-700">Kaina: </span> {{ listing.price }} €</li>
                </ul>
                <div class="mt-4 mb-8">
                    <h3 class="text-lg font-bold mb-2 text-gray-700">Aprašymas</h3>
                    <p style="overflow-wrap: break-word; word-wrap: break-word ">{{ listing.description }}</p>
                  </div>
                <div class="mt-8">
                    <h3 class="text-lg font-bold mb-2 text-gray-700">Pardavėjas</h3>
                    <p class="text-lg"><span class="font-bold text-gray-700">Name: </span>{{ listing.name }}</p>
                    <p class="text-lg"><span class="font-bold text-gray-700">Email: </span>{{ listing.email }}</p>
                    <p class="text-lg"><span class="font-bold text-gray-700">Phone: </span>{{ listing.sellerNumber }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default{
    layout: Layout,
    props: {
        listing: Object,
    },
}
</script>