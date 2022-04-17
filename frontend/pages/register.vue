<template>
  <div class="register-box mx-auto my-5 py-5">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form @submit.prevent="submit">
          <div class="mb-3">
            <div class="input-group">
              <input
                v-model.trim="$v.validate_value.name.$model"
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
            <div v-if="$v.validate_value.name.$anyError">
              <div
                v-show="!$v.validate_value.name.required"
                class="text-danger"
              >
                Please enter a name
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input
                v-model.trim="$v.validate_value.email.$model"
                type="email"
                class="form-control"
                placeholder="Email"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div v-if="$v.validate_value.email.$anyError">
              <div
                v-show="!$v.validate_value.email.required"
                class="text-danger"
              >
                Please enter a email
              </div>
              <div v-show="!$v.validate_value.email.email" class="text-danger">
                Please enter right type of email
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input
                v-model.trim="$v.validate_value.password.$model"
                type="password"
                class="form-control"
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div v-if="$v.validate_value.password.$anyError">
              <div
                v-show="!$v.validate_value.password.required"
                class="text-danger"
              >
                Please enter a password
              </div>
              <div
                v-show="!$v.validate_value.password.minLength"
                class="text-danger"
              >
                Min length of this field is 8
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input
                v-model.trim="$v.validate_value.confirm_password.$model"
                type="password"
                class="form-control"
                placeholder="Retype password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div v-if="$v.validate_value.confirm_password.$anyError">
              <div
                v-show="!$v.validate_value.confirm_password.confirmPassword"
                class="text-danger"
              >
                Please enter the same password
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="icheck-primary text-center">
                <input
                  id="agreeTerms"
                  type="checkbox"
                  name="terms"
                  value="agree"
                />
                <label for="agreeTerms">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">
                Register
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.card -->
  </div>
</template>

<script>
import { required, email, sameAs, minLength } from 'vuelidate/lib/validators'

export default {
  name: 'RegisterPage',
  data() {
    return {
      user: {},
      validate_value: {
        name: '',
        email: '',
        password: '',
        confirm_password: '',
        accept_terms: '',
      },
    }
  },
  validations: {
    validate_value: {
      email: {
        required,
        email,
      },
      name: {
        required,
      },
      password: {
        required,
        minLength: minLength(8),
      },
      confirm_password: {
        confirmPassword: sameAs('validate_value.password'),
      },
    },
  },
  method: {
    submit() {
      this.$v.$touch()
      if (!this.$v.validate_value.$invalid) {
        console.log(this.validate_value)
      }
    },
  },
}
</script>

<style scoped>
</style>