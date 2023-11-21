<template>
  <div class="bg_black">
    <div class="bg_white">
      <h4>{{ data.name }}</h4>
      <p>{{ data.content }}</p>
      <img :src="data.img" alt="이미지 없음">
      <p>가격 : {{ data.price }}</p>
      <input type="text" v-model="productCnt">
      <p>총액 : {{ productCnt * data.price }}원</p>
      <p>신고수 : {{ data.reportCnt }}</p>
      <button @click="$emit('closeModal')">닫기</button>
    </div>
  </div>
</template>
<script>
export default {
  name: 'Modal',
  data() {
    return {
      productCnt: 0,
    }
  },
  // watch : data를 감시하는 함수를 정의하는 영역
  watch: {
    // 함수명은 감시하고 싶은 데이터바인딩명과 동일해야한다
      productCnt(input){
      if(input > 10 ) {
          alert('안돼!');
          this.productCnt = 10;
      } else if(input < 0) {
        this.productCnt = 0;
      }
    }
  },
  props: {
    data: Object,
  },
}
</script>
<style>
</style>