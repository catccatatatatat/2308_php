<template>
    <img alt="Vue logo" src="./assets/logo.png">

    <!-- 헤더 -->
      <Header :data="navList"></Header>
      

  <!-- 컴포넌트로 이관 -->
  <Discount></Discount>
    <!-- 할인 배너 -->
    <!-- <div class="discount">
    <p>지금 당장 구매 하시면, 30%할인</p>
  </div> -->


    
    <!-- 모달 -->
  <Transition name="modalAni">
    <Modal
      v-if="modalFlg" 
      :data="selectedProduct"
      @closeModal="closeModal" 
    ></Modal>
    <!-- <div class="bg_black" v-if="modalFlg" @click="closeModal" name="modalAni">
      <div class="bg_white" @click.stop>
        <img :src="selectedProduct.img" alt="이미지">
        <h4>{{ selectedProduct.name }}</h4>
        <p>{{ selectedProduct.content }}</p>
        <p>가격 {{ selectedProduct.price }}원</p>
        <p>신고수 : {{ selectedProduct.reportCnt }}</p>
        <button @click="closeModal">닫기</button>
      </div>
    </div> -->
  </Transition>

    <!-- 상품 리스트 -->
    <div>
      <ProductList
        v-for="(item, i) in products" :key="i"
        :data = "item"
        :productKey = "i"
        @openModal = "openModal"
        @plusOne = "plusOne"
        >
      </ProductList>
    </div>
  
</template>

<script>

import data from './assets/js/data.js';
import Discount from './components/Discount.vue';
import Header from './components/Header.vue';
import Modal from './components/Modal.vue';
import ProductList from './components/ProductList.vue';
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
      selectedProduct: {},
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
  },
  // 컴포넌트를 등록하는 영역
  components: {
    Discount, Header, Modal, ProductList
  },
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
