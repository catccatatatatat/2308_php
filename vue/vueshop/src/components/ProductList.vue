<template>
    <div>
      <h4 @click="$emit('openModal', data)">{{ data.name }}</h4>
      <p>{{ data.price }}</p>
      <button @click="$emit('plusOne', productKey)" type="button">허위 신고</button>
      <p>신고수 : {{ data.reportCnt }}</p>
      <hr>
    </div>
  </template>
  <script>
  export default {
      name: 'ProductsList',
      props: {
        data: Object,
        productKey: Number,
    },
  }
  </script>
  <style>
  </style>
  
  
  
  
  
  