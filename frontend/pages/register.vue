<template>
  <div class="register-box mx-auto my-5 py-5">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div v-loading="isLoading" class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form @submit.prevent="submit">
          <UserName id="step1" ref="userNameTarget"  />
          <div class="mb-3">
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
            <div v-if="$v.user.email.$anyError && !message">
              <div v-show="!$v.user.email.required" class="text-danger">
                Please enter a email
              </div>
              <div v-show="!$v.user.email.email" class="text-danger">
                Please enter right type of email
              </div>
            </div>
            <div v-show="email_error && !message" class="text-danger">
              {{ email_error }}
            </div>
          </div>
          <div class="mb-3">
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
            <div v-if="$v.user.password.$anyError && !message">
              <div v-show="!$v.user.password.required" class="text-danger">
                Please enter a password
              </div>
              <div v-show="!$v.user.password.minLength" class="text-danger">
                Min length of this field is 8
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input
                v-model.trim="$v.user.confirm_password.$model"
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
            <div v-if="$v.user.confirm_password.$anyError && !message">
              <div
                v-show="!$v.user.confirm_password.confirmPassword"
                class="text-danger"
              >
                Please enter the same password
              </div>
            </div>
          </div>
          <div class="mb-3">
            <el-select
              v-model.trim="$v.user.role_id.$model"
              placeholder="Select"
              class="w-100"
            >
              <el-option
                v-for="item in constants"
                :key="item.value"
                :label="item.text"
                :value="item.value"
              >
              </el-option>
            </el-select>
          </div>

          <div class="mb-3">
            <el-select
              v-model.trim="$v.user.room_id.$model"
              placeholder="Select"
              class="w-100"
            >
              <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value"
              >
              </el-option>
            </el-select>
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
            <div class="col-12">
              <button plain class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { required, email, sameAs, minLength } from 'vuelidate/lib/validators'
import { constants } from '~/constants/constants.js'
import UserName from '~/components/user_register_login/UserName'

export default {
  name: 'RegisterPage',
  auth: false,
  components: {
    UserName,
  },
  data: () => ({
    email_error: '',
    message: '',
    user: {
      name: '',
      email: '',
      password: '',
      confirm_password: '',
      accept_terms: '',
      role_id: '',
      room_id: '',
      profile_id: 1,
    },
    options: [
      {
        value: '1',
        label: 'Option1',
      },
      {
        value: '2',
        label: 'Option2',
      },
      {
        value: '3',
        label: 'Option3',
      },
      {
        value: '4',
        label: 'Option4',
      },
      {
        value: '5',
        label: 'Option5',
      },
    ],
    constants: '',
    isLoading: false,
  }),
  validations: {
    user: {
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
        confirmPassword: sameAs('password'),
      },
      role_id: {
        required,
      },
      room_id: {
        required,
      },
    },
  },
  mounted() {
    this.setData()
  },
  methods: {
    async submit() {
      this.$v.user.$touch()
      if (!this.$v.user.$invalid) {
        this.isLoading = true
        await this.$axios
          .$post('/auth/register', this.user)
          .then((response) => {
            this.isLoading = false
            this.message = response
            this.resetData()
            this.notifycation()
          })
          .catch((error) => {
            const errorHandle = this.$handleResponse(error)
            this.email_error = errorHandle.errors.email[0]
            this.isLoading = false
          })
      }
    },
    resetData() {
      Object.assign(this.$data, this.$options.data.call(this))
    },
    notifycation() {
      this.$notify.success({
        title: 'Success',
        message: 'Register success, please enter a login page',
        showClose: false,
      })
    },
    setData() {
      this.constants = constants
    },
  },
}
</script>

<style scoped>
</style>