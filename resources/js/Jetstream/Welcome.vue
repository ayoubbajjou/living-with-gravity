<template>
    <div>
        <div class="p-6 sm:px-20 bg-secondary border-b border-gray-600 text-white">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                Welcome to Livingwithgravity Admin Panel
            </div>

            <div class="mt-6 text-white">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, cum ex molestiae ratione, tempore maxime delectus fugiat quibusdam quasi magni incidunt explicabo minima id animi alias iure eum assumenda eveniet?
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

    export default defineComponent({
        components: {
            JetApplicationLogo,
        },
    })
</script>
