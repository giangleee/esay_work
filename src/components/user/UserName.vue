<template>
  <div class="mb-3">
    <div class="input-group">
      <input
        v-model="value"
        type="text"
        class="form-control"
        placeholder="Full name"
      />
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
    </div>
    <div v-if="$v.name">
      <div v-show="!$v.name.required" class="text-danger">
        Please enter a name
      </div>
    </div>
  </div>
</template>

<script>
import { required } from 'vuelidate/lib/validators'

export default {
  validations: {
    name: {
      required,
    },
  },
  computed: {
    value: {
      get() {
        console.log(this.$store.state['user'])
        return this.$store.state.user.name
      },
      set(value) {
        this.$store.commit('user/SET_USER_NAME', value)
        this.$v.name.$touch()
      },
    },
  },
}
</script>