<template>
<section class="p-4 bg-gradient-to-r from-green-600 via-green-500 to-green-300 shadow-xl">
<header class="flex">
    <Link href="/"><h1 class="italic text-5xl mt-auto text-white font-bold pl-24">AutoDealas.lt</h1></Link>
    <Nav class="ml-auto mt-auto mb-auto" />
</header> 


</section>
<section  class="p-4">
    <slot />
</section>
    

</template>

<script>
import Nav from "./Nav.vue";

export default {
    components: { Nav },

};
</script>