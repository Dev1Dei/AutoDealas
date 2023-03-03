<template>
<section class="p-5 bg-green-600">
<header class="flex">

    <h1 class="italic text-4xl font-bold text-xl">Autodealas.lt</h1>

</header> 

<div class="flex" style="background-color: seagreen;">
    <Nav />
</div>
</section>

<section  class="p-6"><slot /></section>
    

</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },

};
</script>