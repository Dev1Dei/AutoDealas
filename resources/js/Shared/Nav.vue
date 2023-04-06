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
                <li v-if="!user"><Link href="/prisijungti" class="block px-4 py-2 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Prisijungti'}">Prisijungti</Link></li>
                <li v-else> <span class="block px-4 py-2 text-black text-xl">{{ user.name }}</span></li>
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
            <div class="li-container relative">
              <li v-if="!user">
                <Link href="/prisijungti" class="pl-4 md:pl-0 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Prisijungti'}">Prisijungti</Link>
              </li>
              <li v-else>
                <span class="pl-4 md:pl-0 text-black text-xl">{{ user.name }}</span>
                <div class="dropdown">
                  <Link :href="`/aboutme/${user.id}`" class="block px-4 py-2 text-black text-xl hover:text-gray-700">About Me</Link>
                  <a href="#" @click.prevent="logout">Log Out</a>
                </div>
              </li>
            </div>
          </div>
          <div class="border-solid border-gray-500 md:border-l border-t md:border-t-0 p-2">
            <li v-if="!user"></li>
            
            <li v-else><Link href="/newlisting" class="pl-4 md:pl-0 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'NewListing'}">Pridėti skelbimą</Link></li>
          </div>
        </ul>
      </div>
    </nav>
  </template>
  
  <script>
  import { router } from "@inertiajs/vue3";
  import { mapState } from 'vuex';
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
      logout() {
        router.post('/logout').then(() => {
        this.$store.commit('setUser', null);
        this.$inertia.visit('/');
        });
      },
    },
    computed: {
      ...mapState(['user']),
    }
  };
  </script>

<style>
.dropdown {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  padding: 12px 16px;
  border-radius: 4px;
}

.dropdown a {
  padding: 12px 16px;
  display: block;
  text-decoration: none;
  color: black;
}

.dropdown a:hover {
  background-color: #f1f1f1;
}

.li-container:hover .dropdown {
  display: block;
}

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