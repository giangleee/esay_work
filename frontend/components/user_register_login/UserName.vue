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
        return this.$store.state.user_register_login.name
      },
      set(value) {
        console.log(this.$store)
        this.$store.dispatch('user/SET_USER_NAME', value)
        this.$v.name.$touch()
      },
    },
  },
}
</script>