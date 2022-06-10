<template>
  <div class="input-group">
    <input
      v-model="name"
      :value="value"
      :type="type"
      class="form-control"
      :placeholder="placeholder"
      name="name"
    />
    <div class="input-group-append">
      <div class="input-group-text">
        <span :class="iconClass"></span>
      </div>
    </div>
  </div>
</template>

<script>
// import { required } from 'vuelidate/lib/validators'

export default {
  props: {
    placeholder: {
      type: String,
      default: 'Input your value',
    },
    type: String, // CONVENTION: content_heading => this.$store.state['user'].content.heading
    iconClass: String,
    value: String,
  },
  computed: {
    name: {
      get() {
        return this.value
      },
      set(value) {
        const key = this.type.split('_')
        if (key.length === 1) {
          if (this.$store.state.user[key[0]] !== undefined) {
            this.$store.commit('user/SET_STATE', [key[0], value])
          }
        } else if (this.$store.state.user[key[0]][key[1]] !== undefined) {
          this.$store.commit('user/SET_STATE', [key[0], key[1], value])
        }
      },
    },
  },
}
</script>
