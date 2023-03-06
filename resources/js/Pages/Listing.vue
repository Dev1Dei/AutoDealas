<template>

<h1>Double Yeet {{ listing.id }}</h1>
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