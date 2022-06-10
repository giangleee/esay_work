<template>
  <div class="mb-3">
    <el-select
      v-model="name"
      name="option2"
      :placeholder="placeholder"
      class="w-100"
    >
      <el-option
        v-for="item in constants"
        :key="item.value"
        :label="item.text"
        :value="item.value"
      ></el-option>
    </el-select>
  </div>
</template>

<script>
export default {
  props: {
    placeholder: {
      type: String,
      default: 'Input your value',
    },
    type: String, // CONVENTION: content_heading => this.$store.state['user'].content.heading
    constants: {
      type: Object,
    },
    value: String,
  },
  data() {
    return {
      temp: '',
    }
  },
  computed: {
    name: {
      get() {
        return this.temp
      },
      set(value) {
        console.log(value)

        // const key = this.type.split('_')
        // if (key.length === 1) {
        //   console.log(value)
        // }
      },
    },
  },
}
</script>
