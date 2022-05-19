<template>
  <Head title="Welcome" />
  <Navigation />
  <div class="bg-secondary">
    <div class="w-full mx-8 md:mx-auto max-w-screen-xl">
      <div class="py-8 items-center">
        <div>
          <h3
            class="
              text-white
              border-b-4
              w-max
              border-red-600
              text-3xl
              uppercase
              font-bold
              italic
              ml-6
              xl:ml-0
              mt-12
            "
          >
            {{review?.title}}
          </h3>
          <div class="pt-12 pb-6 mx-8 grid grid-cols-1 gap-6">
            <div
              class="bg-[#2F2F2F] rounded-lg px-6 py-4"
            >
              <div class="text-gray-50 space-y-2">
                <div class="flex items-center space-x-4">
                  <div>
                    <img
                      class="w-12 h-12 rounded-full"
                      v-if="review?.user?.profile_photo_path"
                      :src="review?.user?.profile_photo_path"
                      :alt="review?.user?.name"
                    />
                    <div v-else class="w-12 h-12 bg-red-200 rounded-full"></div>
                  </div>
                  <div>
                    <h1 class="font-bold">{{ review?.user?.name }}</h1>
                    <div class="flex items-center space-x-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-yellow-400"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                        />
                      </svg>
                      <p>{{ review?.avg }}</p>
                    </div>
                      <p>{{datePosted(review?.create_at)}}</p>
                  </div>
                </div>
                <h3 class="text-xl font-bold">
                  {{ review?.title }}
                </h3>
                <p class="text-light italic">
                  {{ review?.description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog section -->
      <Blogs />
    </div>
    <!--
    <Dealers
      :dealers="brand?.dealers"
      :cities="cities"
      :brands="brands"
      :brandId="brand?.id"
      :brandTitle="brand?.brand_name"
    /> -->

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
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import Navigation from "../components/Navigation.vue";
import Blogs from "../components/Blogs.vue";
import Footer from "../components/Footer.vue";
import Subscribe from "../components/Subscribe.vue";
import Dealers from "../components/Dealers.vue";
import moment from "moment";

export default {
  components: {
    Head,
    Link,
    JetApplicationLogo,
    Navigation,
    Blogs,
    Footer,
    Subscribe,
    Dealers,
  },
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  data() {
    return {
      dealers: null,
      cities: null,
      brands: null,
      currentImg: 0,
      versions: [],
      versionSelected: null,
      brand: null,
      review: null,
    };
  },
  mounted() {
    this.review = this.$inertia.page.props.review;
  },
  methods: {
    reviewIsChanged() {
      window.location.replace(`/review/${this.versionSelected}`);
    },
    slugify(text) {
      return text
        .toLowerCase()
        .replace(/ /g, "-")
        .replace(/[^\w-]+/g, "");
    },
    datePosted(date) {
      return moment(date).format("ll");
    },
  },
};
</script>
