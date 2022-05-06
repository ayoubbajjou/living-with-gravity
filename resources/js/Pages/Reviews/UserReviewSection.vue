<template>
  <div class="bg-secondary mb-24">
    <h1
      class="
        text-white
        border-b-4
        w-max
        border-red-600
        text-2xl
        lg:text-3xl
        uppercase
        font-bold
        italic
        ml-6
        xl:ml-0
      "
    >
      User Reviews
    </h1>

    <div class="w-full lg:flex justify-between space-x-4 lg:p-0 p-8 shadow-2xl mt-8">
      <div class="bg-[#2F2F2F] rounded-2xl shadow-2xl w-full lg:w-1/4 px-6 py-8">
        <div
          class="flex justify-between border-b-2 border-gray-300 space-y-3 pb-8"
        >
          <div class="w-1/2 pl-4 mx-auto space-y-2">
            <img src="/icons/3.svg" class="w-16 h-16 mx-auto" alt="" />
            <h3 class="text-white font-bold text-5xl uppercase text-center">
              {{bike?.avg.toFixed(1)}}
            </h3>
            <p class="text-white text-center">Great Ride !</p>
          </div>
          <div class="w-full lg:w-1/2 space-y-4">
            <RatingItem :rate="5" percentage="100%" />
            <RatingItem :rate="4" />
            <RatingItem :rate="3" percentage="40%" />
            <RatingItem :rate="2" />
            <RatingItem :rate="1" />
          </div>
        </div>
        <div class="text-white text-center px-8 py-6 space-y-3">
          <h3 class="text-2xl font-bold">Own this Bike?</h3>
          <p class="text-sm">
            Share your experience about {{ bike?.series }} -
            {{ bike?.version_name }}
          </p>
          <a class="flex justify-center mt-8 mb-8" @click="writeReview">
            <button
              class="
                text-white
                px-3
                py-4
                mt-4
                uppercase
                shadow-md
                font-bold
                text-md
                bg-button
                rounded-l-lg
              "
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
          </a>
        </div>
      </div>
      <div class="bg-[#2F2F2F] w-full lg:w-3/4 p-8 space-y-4">
        <h3 class="text-white font-semibold text-2xl">
          {{ bike?.series }} - {{ bike?.version_name }} user Reviews
        </h3>
        <!-- <Tags /> -->
        <div class="grid lg:grid-cols-3 gap-4">
          <Review
            v-for="(review, index) in reviews"
            :key="index"
            :review="review"
          />
        </div>

        <a v-if="reviews.length" class="flex mt-8 mb-8" :href="`${url}/reviews`">
          <button
            class="
              text-white
              px-3
              py-2
              uppercase
              shadow-md
              font-semibold
              text-md
              bg-button
              rounded-l-lg
            "
          >
            View all reviews
          </button>
          <button class="bg-icon-button text-white px-3 rounded-r-lg">
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
        </a>
      </div>
    </div>
    <!-- <review-modal  :bike="bike"></review-modal> -->
    <Login v-if="isModalOpened" @close="isModalOpened = false"/>
  </div>
</template>

<script>
import RatingItem from "./components/RatingItem.vue";
import Tags from "./components/Tags.vue";
import Review from "./components/Review.vue";
import ReviewModal from "./components/ReviewModal.vue";
import Login from "../Auth/LoginSlide.vue";

export default {
  name: "UserReviews",
  components: {
    RatingItem,
    Tags,
    Review,
    ReviewModal,
    Login,
  },
  props: {
    bike: {
      type: Object,
      required: true,
      historyUrl: null,
    },
    reviews: {
      type: Array,
      required: true,
    },
    url: {
        type: String,
        required: true
    }
  },
  data() {
    return {
      isModalOpened: false,
    };
  },
  computed: {},
  mounted() {
    this.historyUrl = document.location.pathname;
  },
  methods: {
    writeReview() {
      this.$emit("remove-nav");
      console.log(this.isModalOpened)

      if (this.$page.props.user && this.$page.props.user?.is_admin !== true) {
        window.location.href = "/review" + document.location.pathname;
      } else {
        this.isModalOpened = true;
      }
      console.log(this.isModalOpened)

    },
  },
};
</script>

<style>
</style>
