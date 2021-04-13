<template>
    <div>
        <header-component></header-component>
        <router-view></router-view>
    </div>
</template>

<script>
import ExampleComponent from '../components/ExampleComponent.vue'
export default {
  components: { ExampleComponent },

}
</script>

<style>

</style>