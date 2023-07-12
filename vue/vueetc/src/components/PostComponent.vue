<template>
    <div>
        <h1>포스트</h1>  
        {{ test }}
    </div>
</template>
<script>
export default {
    name:'PostComponent',
    props: {
        test: Number,
    }
}
</script>
<style>
    
</style>