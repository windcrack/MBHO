<template>
  <div class="basket__total basket-total">
      <div class="basket-total__price">{{ total }} ₽</div>
  </div>
</template>

<script>

export default {
  name: "CalcTotal",
  components: {
  },
  data() {
    return {
      order: 0,
      showModal: false
    };
  },
  computed: {
    total: function () {
      let total = 0;
      return total;
    }
  },
  methods: {
    makeOrder() {
    },
    hideModal() {
      this.showModal = false;
    }
  },
  mounted() {
  }
};
</script>

<style scoped>
</style>
