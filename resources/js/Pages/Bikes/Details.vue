<template>
  <Head>
    <title>
      {{ bike?.series }} {{ bike?.version_name }} price, specs, mileage &
      dealers
    </title>
    <!-- <meta name="description" content="Your page description"> -->
  </Head>
  <Navigation />
  <div class="bg-secondary h-screen">
    <div class="lg:flex w-full">
      <div class="lg:w-3/5">
        <div class="relative w-full">
          <div class=" min-w-full">
            <div class="relative">
              <div class="absolute top-4 right-0 mr-4 h-12 w-12 bg-gray-900 bg-opacity-60 rounded cursor-pointer" @click="displayColors = !displayColors">
                <img v-if="!colorSelected" src="/icons/pick-colors.png" class="mx-auto p-2" alt="">
                <div v-else  class="mx-auto h-full p-2 rounded cursor-pointer" :style="`background-color: ${colorSelected}`"> </div>
              </div>
              <div v-if="displayColors" class="z-50 flex flex-col items-center space-y-2 py-2 absolute top-16 right-0 mr-4 h-auto w-12 bg-white bg-opacity-80 rounded-b-3xl">
                <div v-for="(color, index) in colors" :key="index" class="w-6 h-6 rounded-full cursor-pointer" :style="`background-color: ${color.colorcodes}`" @click="selectColor(color.colorcodes)"></div>
              </div>
            </div>
            <img
              class="min-w-full"
              :src="bike?.images[currentImg].image_link"
              alt=""
            />
          </div>
          <div
            class="
              absolute
              w-full
              inset-x-0
              bottom-0
              pl-4
              lg:pl-64 lg:py-8
              h-40
              bg-opacity-75 bg-[#2F2F2F]
            "
          >
            <div class="text-white flex space-x-14">
              <h2
                class="text-bolder text-xxl lg:text-2xl py-4 italic uppercase"
              >
                {{ bike?.series }} {{ bike?.version_name }}
              </h2>
              <div class="flex space-x-6">
                <svg
                  @click="prevImg()"
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
                  @click="nextImg()"
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
                class="bg-transparent border-0 font-bold"
                id="variant"
                @change="bikeIsChanged()"
                v-model="versionSelected"
              >
                <option
                  v-for="version in versions"
                  :key="version.version_name"
                  :value="version.version_name"
                >
                  {{ version.version_name }}
                </option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <BikeDetailsFeaturesPrice
        :bike-id="bike?.id"
        :bike-price="bike?.prices[0]"
        :specs="specs"
      />
    </div>
    <div class="max-w-screen-xl mx-auto">
      <BikeSpecs :specs="bike?.specifications" />
      <MoreSuggestedBikes
        :title="bike?.brand?.brand_name"
        :bikes="suggestedBikes"
      />

      <!-- Blog section -->
      <Blogs />

      <Dealers
        :dealers="dealers"
        :cities="cities"
        :brands="brands"
        :brandTitle="bike?.brand?.brand_name"
        :brandId="bike?.brand?.id"
        :dealersCount="dealersCount"
      />

      <Qa :bike="bike" />

      <UserReviews :bike="bike" />
    </div>
    <Subscribe />

    <Footer />
  </div>
</template>

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
import UserReviews from "../Reviews/UserReviewSection.vue";
import Qa from "../components/Qa/QaSection.vue";

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
    UserReviews,
    Qa
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
      brands: null,
      currentImg: 1,
      versions: [],
      versionSelected: null,
      dealersCount: null,
      specs: [],
      colors: [],
      displayColors: false,
      colorSelected: null
    };
  },
  mounted() {
    this.bike = this.$inertia.page.props.bike;
    this.dealers = this.$inertia.page.props.dealers;
    this.suggestedBikes = this.$inertia.page.props.moreBikes;
    this.cities = this.$inertia.page.props.cities;
    this.brands = this.$inertia.page.props.brands;
    this.dealersCount = this.$inertia.page.props.dealersCount;
    axios
      .get(`/bike-versions/${this.bike?.model_id}`)
      .then((res) => {
        this.versions = res.data;
        this.versionSelected = this.bike?.version_name;
        this.colors = JSON.parse(this.bike.color_codes)
      })
      .catch((err) => {
        console.log(err);
      });

    var data = [];

    const specLength = this.bike?.specifications.filter((val) => {
      return val.title === "Overall Length";
    });

    const specWidth = this.bike?.specifications.filter((val) => {
      return val.title === "Overall Width";
    });

    const specHeight = this.bike?.specifications.filter((val) => {
      return val.title === "Overall Height";
    });
    const speed = this.bike?.specifications.filter((val) => {
      return val.title === "Top Speed";
    });

    const fuel = this.bike?.specifications.filter((val) => {
      return val.title === "Fuel Tank Capacity";
    });

    const power = this.bike?.specifications.filter((val) => {
      return val.title === "Max Power";
    });

    const mileage = this.bike?.specifications.filter((val) => {
      return val.title === "Mileage - ARAI";
    });

    const engine = this.bike?.specifications.filter((val) => {
      return val.title === "Displacement";
    });

    data.push({
      dimension: `${specLength?.[0]?.description} x ${specWidth?.[0]?.description} x ${specHeight?.[0]?.description}`,
      speed: speed?.[0]?.description,
      fuel: fuel?.[0]?.description,
      power: power?.[0]?.description,
      mileage: mileage?.[0]?.description,
      engine: engine?.[0]?.description,
    });
    this.specs = data;
  },
  methods: {
    nextImg() {
      const lastImg = this.bike.images.length;
      if (this.currentImg >= lastImg) {
        return;
      } else {
        this.currentImg++;
      }
    },
    prevImg() {
      const lastImg = this.bike.images.length;
      if (this.currentImg == 0) {
        return;
      } else {
        this.currentImg--;
      }
    },
    bikeIsChanged() {
      var link = `/${this.bike.make}/${this.slugify(this.bike.series)}/${
        this.versionSelected
      }`;
      console.log(link);
      window.location.replace(link);
    },
    slugify(text) {
      return text
        .toLowerCase()
        .replace(/ /g, "-")
        .replace(/[^\w-]+/g, "");
    },
    selectColor(color) {
      this.colorSelected = color
      this.displayColors = false
    }
  },
});
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");
* {
  font-family: "Poppins", sans-serif;
}

select {
  -moz-appearance: none; /* Firefox */
  -webkit-appearance: none; /* Safari and Chrome */
  appearance: none;
  background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='45' viewBox='0 0 24 24' width='45' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
}
</style>
