<template>
    <Link :href="'/'">
        <img src="/images/lwg-logo.png" alt="livingwithgravity" class="block h-20 w-auto">
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
