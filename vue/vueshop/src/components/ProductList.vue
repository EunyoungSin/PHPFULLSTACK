<template>
    <img :src="product.imgSrc">
    <h4 @click="$emit('openModal');">{{ product.name }}</h4>
    <p>가격: {{ product.price }} 원</p>
    <p>{{ product.count }} 개</p>
    <p>합계: {{ product.price * product.count }} 원</p>
</template>

<script>
    export default {
        name: 'ProductList',
        props: {
            product: Object,
            productNum: Number,
        }
    }
</script>

<style>
    
</style>