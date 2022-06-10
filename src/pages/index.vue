<template>
    <div>
        <h1>Welcome to this page</h1>
        <button class="btn btn-pimary" @click="logout">Logout</button>
    </div>
</template>

<script>
export default {
    methods: {
        async logout() {
            await this.$auth.logout().then(() => {
                this.$router.push('/login')
            })
        }
    }
}
</script>