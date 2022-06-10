<template>
  <div class="register-box mx-auto my-5 py-5">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div v-loading="isLoading" class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form @submit.prevent="submit">
          <!-- <UserName id="step1" ref="userNameTarget" /> -->
          <div class="mb-3">
            <UserInput
              id="step1"
              ref="userInputTarget"
              :value="user.name"
              icon-class="fas fa-envelope"
              placeholder="Enter name"
              type="name"
            />
          </div>
          <div class="mb-3">
            <UserInput
              id="step1"
              ref="userInputTarget"
              :value="user.email"
              icon-class="fas fa-envelope"
              placeholder="Enter email"
              type="email"
            />
          </div>
          <div class="mb-3">
            <UserInput
              id="step1"
              ref="userInputTarget"
              :value="user.password"
              icon-class="fas fa-lock"
              placeholder="Enter password"
              type="password"
            />
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
            <UserOption 
            placeholder="Select"
            type="roleId"
            :constants="constants"
            :value="user.roleId"/>
          </div>

          <div class="mb-3">
            <el-select
              v-model="$v.user.room_id.$model"
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
import { constants } from '~/constants/constants'
import UserInput from '~/components/user/UserInput'
import UserOption from '~/components/user/UserOption'

export default {
  name: 'RegisterPage',
  auth: false,
  components: {
    UserInput,
    UserOption,
  },
  data: () => ({
    email_error: '',
    message: '',
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
  computed: {
    user() {
      return this.$store.state.user
    },
  },
  mounted() {
    console.log(typeof constants)
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

<style scoped></style>
