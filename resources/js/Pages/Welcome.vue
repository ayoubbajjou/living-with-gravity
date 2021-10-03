<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-800 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-lg text-white">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-lg text-white">
                    Log in
                </Link>

                <!-- <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-white underline">
                    Register
                </Link> -->
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <jet-application-logo class="block h-auto w-auto" />
            </div>
        </div>
    </div>
</template>

<style scoped>
    /*  */
</style>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

    export default defineComponent({
        components: {
            Head,
            Link,
            JetApplicationLogo
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>
