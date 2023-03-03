<template>
    <Layout>
        <h1 class="text-4xl font-bold">Hello</h1>
        <ul>
            <li v-for="brand of brands" v-text="brand"></li>
        </ul>
            

        
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
    components: { Layout },
    props: {
        brands: String,
    },
};
</script>