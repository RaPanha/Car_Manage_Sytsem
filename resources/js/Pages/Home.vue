<script setup>
import Header from "../Components/Header.vue";
import Body from "../Components/Body.vue";

// import components
import ItemProducts from "../Components/ItemProducts.vue";

const dataProducts = [
    {
        id: 1,
        name: "sndgfan",
        branch: "Nike", // Object one
        price: 10,
    },
    {
        id: 2,
        name: "fasjdgbi",
        branch: "Nike", // Object two
        price: 10,
    },
    {
        id: 2,
        name: "fasjdgbi",
        branch: "Nike", // Object two
        price: 10,
    },
];
</script>

<template>
    <div>
        <h3>This Home page</h3>
        <Header />
        <Body />
        <ItemProducts :DataLoops="dataProducts" />
        <ItemProducts :DataLoops="dataProducts" />
    </div>
</template>

<style></style>
