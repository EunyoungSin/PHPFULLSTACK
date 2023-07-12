<template>
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent></PostComponent>
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1">
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div class="filter-box">
            <div class="filter" @click="$store.commit('changeFilter', item)" :class="item" v-for="item in filterList" :key="item" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}">
                <span>{{ item }}</span>
            </div>
            <!-- <div class="filter"></div>
            <div class="filter"></div>
            <div class="filter"></div>
            <div class="filter"></div> -->
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabFlg == 2">
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div>
            <textarea class="write-box" name="content" id="content" placeholder="글을 작성해주세요."></textarea>
        </div>
    </div>

</template>
<script>
import PostComponent from './PostComponent.vue';

export default {
    name: "ConteinerComponent",
    data() {
        return {
            filterList:	[ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", 
            "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", 
            "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"],
        }
    },
    components: { 
        PostComponent,
    }
}
</script>
<style>
    
</style>