<template>
  <div class="basket__items">

    <CalcItem v-for="(item, ind) in []" :key="ind" :item="item"></CalcItem>

  </div>
</template>

<script>
import CalcItem from './CalcItem'

export default {
  name: "CalcItems",
  components: {
    CalcItem,
  },
  data() {
    return {};
  },
  computed: {
  },
  methods: {
  },
  mounted() {
  }
};
</script>

<style scoped>
</style>
