<template>
  <Head title="Welcome" />
  <Navigation />
  <div class="bg-gray-800 h-screen">
    <div class="flex w-full mb-10">
      <div class="relative w-3/5">
        <img
          class=""
          src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1770&q=80"
          alt=""
        />
      </div>
      <div
        class="
          absolute
          w-3/5
          inset-x-0
          bottom-14
          pl-64
          py-8
          h-40
          bg-opacity-60 bg-gray-600
        "
      >
        <div class="text-white flex space-x-14">
          <h2 class="text-bolder text-4xl py-4 italic uppercase">
            Triumph tiger 900
          </h2>
          <div class="flex space-x-6">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-10 w-10 cursor-pointer transform rotate-180"
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
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-10 w-10 cursor-pointer"
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
          </div>
        </div>
        <div class="flex items-center">
          <p class="text-white">Select variant:</p>
          <select
            name="variant"
            class="bg-transparent border-0 text-2xl text-white"
            id="variant"
          >
            <option value="RALLY">RALLY</option>
          </select>
        </div>
      </div>

      <BikeDetailsFeaturesPrice :bike-price="bike?.prices[0]" />
    </div>
    <BikeSpecs :specs="bike?.specifications" />
    <MoreSuggestedBikes :bikes="suggestedBikes" />

    <!-- Blog section -->
    <Blogs />

    <Dealers :dealers="dealers" :cities="cities" :brands="brands" />

    <Subscribe />

    <Footer />
  </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");
* {
  font-family: "Poppins", sans-serif;
}
</style>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import Navigation from "../components/Navigation.vue";
import Blogs from "../components/Blogs.vue";
import Footer from "../components/Footer.vue";
import Subscribe from "../components/Subscribe.vue";
import Dealers from "../components/Dealers.vue";
import MoreSuggestedBikes from "../components/MoreSuggestedBikes.vue";
import BikeDetailsFeaturesPrice from "../components/BikeDetailsFeaturesPrice.vue";
import BikeSpecs from "../components/BikeSpecs.vue";

export default defineComponent({
  components: {
    Head,
    Link,
    JetApplicationLogo,
    Navigation,
    Blogs,
    Footer,
    Subscribe,
    Dealers,
    MoreSuggestedBikes,
    BikeDetailsFeaturesPrice,
    BikeSpecs,
  },
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  data() {
    return {
      bike: null,
      dealers: null,
      suggestedBikes: null,
      cities: null,
      brands: null
    }
  },
  mounted() {
    console.log(this.$inertia.page.props.bike)
    this.bike = this.$inertia.page.props.bike[0]
    this.dealers = this.$inertia.page.props.dealers
    this.suggestedBikes = this.$inertia.page.props.moreBikes
    this.cities = this.$inertia.page.props.cities
    this.brands = this.$inertia.page.props.brands
  }
});
</script>
