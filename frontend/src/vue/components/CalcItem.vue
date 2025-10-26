<template>
  <div class="basket-item">
  </div>
</template>

<script>

export default {
  name: 'CalcItem',
  data() {
    return {};
  },
  props: {
    item: Object
  },
  computed: {
    total() {
      return this.item.quantity * this.item.price;
    },
  },
  methods: {
    removeItem() {
    },
    inc() {
      this.item.quantity++;
    },
    dec() {
      if (this.item.quantity > 1) this.item.quantity--;
    }
  },
  mounted() {
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
