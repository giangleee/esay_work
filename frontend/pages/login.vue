<template>
  <div class="login-box mx-auto my-5 py-5">
    <div class="card card-outline card-primary my-5">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form @submit.prevent="submit">
          <div class="d-flex mb-3 flex-direction-column">
            <div class="input-group">
              <input
                v-model.trim="$v.user.email.$model"
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
          </div>
          <div v-if="$v.user.email.$anyError">
            <div v-show="!$v.user.email.required" class="text-danger">
              Please enter a email
            </div>
            <div v-show="!$v.user.email.email" class="text-danger">
              Please enter right type of email
            </div>
          </div>
          <div class="d-flex mb-3 flex-direction-column">
            <div class="input-group">
              <input
                v-model.trim="$v.user.password.$model"
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
          </div>
          <div v-if="$v.user.password.$anyError">
            <div v-show="!$v.user.password.required" class="text-danger">
              Please enter a password
            </div>
          </div>
          <div v-show="errors" class="text-danger">
            {{ errors }}
          </div>
          <div class="row justify-content-center">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Sign In
              </button>
            </div>
          </div>
        </form>

        <p class="mb-1 mt-3 text-center">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import { required, email } from 'vuelidate/lib/validators'

export default {
  auth: 'guest',
  data() {
    return {
      errors: '',
      user: {
        email: '',
        password: '',
      },
    }
  },
  validations: {
    user: {
      email: {
        required,
        email,
      },
      password: {
        required,
      },
    },
  },
  methods: {
    async submit() {
      this.$v.$touch()
      if (!this.$v.user.$invalid) {
        await this.$auth
          .loginWith('laravelJWT', {
            data: this.user,
          })
          .then((response) => {
            this.notifycation()
          })
          .catch((e) => {
            const errorResponse = this.$handleResponse(e).errors
            if (errorResponse.unauthenticate) {
              this.errors = errorResponse.unauthenticate
            }
          })
      }
    },
    notifycation() {
      this.$notify.success({
        title: 'Success',
        message: 'Login success',
        showClose: false,
      })
    },
  },
}
</script>