<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
      <h1 class="text-4xl font-bold mb-4">Registruotis</h1>
      <form method="POST" action="{{ route('register') }}">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-bold mb-2">Vardas:</label>
          <input type="text" id="name" name="name" class="w-full p-2 border border-gray-400" required autofocus>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">El. paštas:</label>
          <input type="email" id="email" name="email" class="w-full p-2 border border-gray-400" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 font-bold mb-2">Slaptažodis:</label>
          <input type="password" id="password" name="password" class="w-full p-2 border border-gray-400" required>
        </div>
        <div class="mb-6">
          <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Pakartokite slaptažodį:</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-2 border border-gray-400" required>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Registruotis
          </button>
          <a class="inline-block align-baseline font-bold text-sm text-green-500 hover:text-green-800" >
            Jau turite paskyrą?
          </a>
        </div>
      </form>
    </div>
  </template>
  
  

<script>
import Layout from "../Shared/Layout.vue";
export default {
    layout: Layout,
};
</script>