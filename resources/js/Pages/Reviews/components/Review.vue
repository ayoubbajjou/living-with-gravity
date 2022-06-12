<template>
    <div class="w-full bg-[#333333] text-white px-8 rounded-lg py-8">
        <p class="font-semibold">{{ review.title }}.</p>
        <p class="font-light">
            {{ review.description.substring(0, 100) }}
            <span v-if="review.description.length > 100">...</span>
        </p>
        <div class="border-b-2 border-gray-200 py-4"></div>
        <div class="w-full py-4 text-sm">
            <p>
                {{ review?.user?.name }} <span v-if="review.user">|</span> {{ datePosted(review.created_at) }} |
                1807 Views
            </p>
        </div>
        <a :href="`${url}/reviews/${review.slug}`" class="text-red-600"
            >Read more</a
        >
    </div>
</template>

<script>
import moment from "moment";
import SlideLogin from '../../Auth/LoginSlide.vue'
export default {
    props: {
        review: {
            type: Object,
            required: true,
        },
        url: {
            type: String,
            required: true,
        },
    },
    components: {
        SlideLogin
    },
    data() {
        return {
            isModalOpened: false,
        };
    },
    methods: {
        datePosted(date) {
            return moment(date).format("ll");
        },
        // writeReview() {
        //     this.$emit("remove-nav");
        //     this.$emit("slide-login");

        // //   if (this.$page.props.user && this.$page.props.user?.is_admin !== true) {
        // //     window.location.href = "/review" + document.location.pathname;
        // //   } else {
        // //     this.isModalOpened = true;
        // //   }
        // },
        openModalLogin() {
            this.isModalOpened = true;
        },
    },
};
</script>

<style></style>
