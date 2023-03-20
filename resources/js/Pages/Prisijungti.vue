<template>
    <div class="max-w-4xl mx-auto bg-white p-6 border-2 border-green-400">
      <h1 class="text-4xl font-bold mb-4">Prisijungti</h1>
      <form method="POST" action="{{ route('login') }}">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">El. paštas:</label>
          <input type="email" id="email" name="email" class="w-full p-2 border border-gray-400" required autofocus>
        </div>
        <div class="mb-6">
          <label for="password" class="block text-gray-700 font-bold mb-2">Slaptažodis:</label>
          <input type="password" id="password" name="password" class="w-full p-2 border border-gray-400" required>
        </div>
        <div class="flex items-center justify-between mb-6">
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Prisijungti
          </button>
          <a class="inline-block align-baseline font-bold text-sm text-green-500 hover:text-green-800" href="{{ route('password.request') }}">
            Pamiršote slaptažodį?
          </a>
        </div>
      </form>
      <div class="text-center">
        <p class="text-gray-700">Neturite paskyros?</p>
        <a class="text-green-500 hover:text-green-800 font-bold" href="/register">Registruotis</a>
      </div>
    </div>
  </template>
  
  

<script>
import Layout from "../Shared/Layout.vue";
export default {
    layout: Layout,
};
</script>