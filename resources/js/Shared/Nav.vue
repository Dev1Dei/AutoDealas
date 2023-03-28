<template>
    <nav class="ml-auto">
      <div class="md:hidden w-full">
        <Link href="/"><h1 class="italic text-4xl mt-auto text-white font-bold pl-4 md:text-left text-center">AutoDealas.lt</h1></Link>
        <button @click="toggleMenu" class="flex justify-center items-center border border-gray-400 rounded px-2 py-0.5 mt-2 focus:outline-none w-full">
          <span class="dropdown-indicator text-xl">&#9776;</span>
        </button>
        <transition name="slide-fade">
          <div v-if="menuVisible" class="absolute left-0 right-0 mt-2 mx-2 rounded-md shadow-lg z-10">
            <div class="rounded-md bg-white shadow-xs">
              <ul class="flex flex-col list-none space-y-2 list-inside">
                <li><Link href="/listings" class="block px-4 py-2 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Listings'}">Skelbimai</Link></li>
                <li><Link href="/prisijungti" class="block px-4 py-2 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Prisijungti'}">Prisijungti</Link></li>
                <li><Link href="/newlisting" class="block px-4 py-2 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'NewListing'}">Pridėti skelbimą</Link></li>
              </ul>
            </div>
          </div>
        </transition>
      </div>
      <div class="hidden md:flex items-center">
        <Link href="/"><h1 class="italic text-4xl text-white font-bold pl-4">AutoDealas.lt</h1></Link>
        <ul class="md:flex md:list-none md:space-x-4 list-inside ml-8">
          <div class="border-solid border-gray-500 md:border-l border-t md:border-t-0 p-2">
            <li><Link href="/listings" class="pl-4 md:pl-0 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Listings'}">Skelbimai</Link></li>
          </div>
          <div class="border-solid border-gray-500 md:border-l border-t md:border-t-0 p-2">
            <li><Link href="/prisijungti" class="pl-4 md:pl-0 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Prisijungti'}">Prisijungti</Link></li>
          </div>
          <div class="border-solid border-gray-500 md:border-l border-t md:border-t-0 p-2">
            <li><Link href="/newlisting" class="pl-4 md:pl-0 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'NewListing'}">Pridėti skelbimą</Link></li>
          </div>
        </ul>
      </div>
    </nav>
  </template>
  
  <script>
  export default {
    components: {},
    data() {
      return {
        menuVisible: false,
      };
    },
    methods: {
      toggleMenu() {
        this.menuVisible = !this.menuVisible;
      },
    },
  };
  </script>

<style>
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .3s ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
.dropdown-indicator {
    font-weight: bold;
  }
</style>