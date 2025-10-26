<template>
    <div class="container links-filter typo" id="links-filter">
      <input type="text" class="links-filter__search" placeholder="Поиск" v-model="currFilter.name">
      <div class="calc-links">
        <a :href="'/calc/?calc_id=' + link.ID" class="calc-link" v-for="link in filterItems">{{ link.NAME }}</a>
      </div>
      <button class="calc-btn links-filter__btn" @click="showMore" v-if="currHeight < maxHeight">Показать еще</button>
    </div>
</template>

<script>

export default {
  name: "CalcLinks",
  components: {
  },
  data() {
    return {
      size: 0,
      currFilter: {
        name: ""
      },
      items: arLinks,
      maxHeight: 0,
      currHeight: 0
    };
  },
  methods: {
    filter: function (item) {
      let trigger = false;
      if (item.NAME.toUpperCase().indexOf(this.currFilter.name.toUpperCase()) >= 0) {
        trigger = true
      }
      return trigger;
    },
    showMore: function () {
      if (this.currHeight < this.maxHeight) {
        // this.currHeight += 170;
        // $(".calc-links").css("max-height", this.currHeight);
        $(".calc-links").css("max-height", "unset");
        this.currHeight = this.maxHeight;
      }
    }
  },
  computed: {
    filterItems: function () {
      return this.items.filter(this.filter);
    }
  },
  mounted: function () {
    this.maxHeight = $(".calc-links").height();
    // this.showMore();
    this.size = parseInt(window.arLinks.size)
  }
};
</script>

<style scoped>
</style>
