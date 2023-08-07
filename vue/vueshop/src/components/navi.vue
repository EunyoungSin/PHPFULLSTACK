<template>
    <!-- 네비 -->
    <div class="nav">
        <a v-for="item in navList" :key="item">{{ item }}</a>
    </div>
</template>

<script>
export default {
    name: 'navi',
    props: {
        product1: String,
        navList: Array,
    }
}
</script>

<style>
    
</style>