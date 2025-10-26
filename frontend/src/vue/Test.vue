<template>
  <div>
    <h1>{{ title }}</h1>
    <p>Count: {{ count }}</p>
    <button @click="increment">Increment</button>
  </div>
</template>

<script>
import { ref, onMounted, computed } from 'vue'

export default {
  name: 'Test',
  props: {
    initialCount: {
      type: Number,
      default: 0
    }
  },
  setup(props) {
    // Реактивное состояние
    const count = ref(props.initialCount)
    const title = ref('My Vue 3 Component')

    // Методы
    const increment = () => {
      count.value++
    }

    // Вычисляемые свойства
    const doubleCount = computed(() => count.value * 2)

    // Хуки жизненного цикла
    onMounted(() => {
      console.log('Component mounted')
    })

    // Возвращаем объект с данными и методами,
    // которые будут доступны в шаблоне
    return {
      count,
      title,
      increment,
      doubleCount
    }
  }
}
</script>

<style scoped>
/* Ваши стили здесь */
h1 {
  color: green;
}
</style>