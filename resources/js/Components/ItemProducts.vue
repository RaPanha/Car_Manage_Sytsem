<script setup>
// DefineProps
import { defineProps } from "vue";
const props = defineProps({
    DataLoops: Array, // Data type Array
});

console.log(props.DataLoops);
</script>

<template>
    <div v-for="(item, index) in DataLoops" :key="index">
        <p>Product name: {{ item.name }}</p>
        <p>Branch {{ item.branch }}</p>
        <p>Price: {{ item.price }}</p>
    </div>
</template>

<style></style>
