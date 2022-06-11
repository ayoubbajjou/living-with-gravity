<template>
    <div @click="writeReview" class="flex justify-center mt-8 mb-8">
        <button
            class="text-white px-3 py-4 mt-4 uppercase shadow-md font-bold text-md bg-button rounded-l-lg"
        >
            Write a review
        </button>
        <button class="bg-icon-button text-white px-3 mt-4 rounded-r-lg">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                />
            </svg>
        </button>
    </div>
    <SlideLogin v-if="isModalOpened" section="review" @review-close="isModalOpened = false" />
</template>

<script>
import SlideLogin from "../../Auth/LoginSlide.vue";
export default {
    components: {
        SlideLogin,
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
        writeReview() {
            this.$emit("remove-nav");
            this.$emit("slide-login");

          if (this.$page.props.user && this.$page.props.user?.is_admin !== true) {
            window.location.href = "/review" + document.location.pathname;
          } else {
            this.isModalOpened = true;
          }
        },
    },
};
</script>

<style></style>
