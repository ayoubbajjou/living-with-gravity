<template>
  <Head title="Welcome" />
  <Navigation />
  <div class="bg-secondary h-screen">
    <div class="lg:flex w-full mb-10">
      <div class="lg:w-3/5">
        <div class="relative w-full">
          <img
            class="min-w-full"
            :src="bike?.images[currentImg].image_link"
            alt=""
          />
          <div
            class="
              absolute
              w-full
              inset-x-0
              bottom-0
              pl-4
              lg:pl-64 lg:py-8
              h-40
              bg-opacity-60 bg-gray-600
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
                class="bg-transparent border-0"
                id="variant"
                @change="bikeIsChanged()"
                v-model="versionSelected"
              >
                <option
                  v-for="version in versions"
                  :key="version.id"
                  :value="version.id"
                >
                  {{ version.version_name }}
                </option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <BikeDetailsFeaturesPrice :bike-id="bike?.id" :bike-price="bike?.prices[0]" :specs="specs" />
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
    </div>
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
      brands: null,
      currentImg: 0,
      versions: [],
      versionSelected: null,
      dealersCount: null,
      specs: [],
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
        this.versionSelected = this.bike?.id;
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
      window.location.replace(`/bike/${this.versionSelected}`);
    },
  },
});
</script>
