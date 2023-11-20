<template>
  <div>
    <img alt="Vue logo" src="./assets/logo.png">

    <!-- 헤더 -->
    <div class="nav">
      <a v-for="item in navList" :key="item">{{ item }}</a>
    </div>

    <!-- 모달 -->
    <Transition name="modalAni">
    
    <div class="bg_black" v-if="modalFlg" @click="closeModal" name="modalAni">
      <div class="bg_white" @click.stop>
        <img :src="selectedProduct.img" alt="이미지">
        <h4>{{ selectedProduct.name }}</h4>
        <p>{{ selectedProduct.content }}</p>
        <p>가격 {{ selectedProduct.price }}원</p>
        <p>신고수 : {{ selectedProduct.reportCnt }}</p>
        <button @click="closeModal">닫기</button>
      </div>
    </div>
  </Transition>

    <!-- 상품 리스트 -->
    <div>
      <div v-for="(item, i) in products" :key="i">
        <h4 @click="openModal(item)">{{ item.name }}</h4>
        <p>{{ item.price }}원</p>
        <button @click="plusOne(i)">허위 매물 신고</button>
        <span>신고수 : {{ item.reportCnt }}</span>
      </div>
    </div>
  </div>
</template>

<script>

import data from './assets/js/data.js';

export default {
  name: 'App',
  data() {
    return {
      navList: ['홈', '상품', '기타', '문의'],
      // products: [
      //   { 'name': '양말', content: '매우 아름다운 양말입니다.', 'price': '1,600', reportCnt : 0, img: require ('@/assets/img/socks.jpg')},
      //   { 'name': '티셔츠', content:'매우 아름다운 티셔츠입니다.', 'price': '2,000', reportCnt : 0, img: require('@/assets/img/t-shirts.jpg')},
      //   { 'name': '바지', content:'매우 아름다운 바지입니다.', 'price': '3,000', reportCnt: 0, img: require('@/assets/img/pants.jpg')}
      // ],
      products: data,
      modalFlg: false,
      selectedProduct: null,
    }
  },
  methods: {
    plusOne(i) {
      this.products[i].reportCnt++;
    },
    openModal(product) {
      this.selectedProduct = product;
      this.modalFlg = true;
    },
    closeModal() {
      this.modalFlg = false;
    }
  }
};
</script>

<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>


<!-- /* 
.nav {
  background-color: rgb(33, 146, 99);
  padding: 15px;
  border-radius: 10px;
}

.nav a {
  color: rgb(34, 48, 95);
  padding: 10px;
  text-decoration: none;
}
</style> */ -->
