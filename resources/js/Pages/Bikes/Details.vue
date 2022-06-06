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
          <div class="min-w-full">
            <div class="relative">
              <div
                class="
                  absolute
                  top-4
                  right-0
                  mr-4
                  h-12
                  w-12
                  bg-gray-900 bg-opacity-60
                  rounded
                  cursor-pointer
                "
                @click="displayColors = !displayColors"
              >
                <img
                  v-if="!colorSelected"
                  src="/icons/pick-colors.png"
                  class="mx-auto p-2"
                  alt=""
                />
                <div
                  v-else
                  class="mx-auto h-full p-2 rounded cursor-pointer"
                  :style="`background-color: ${colorSelected}`"
                ></div>
              </div>
              <div
                v-if="displayColors"
                class="
                  z-50
                  flex flex-col
                  items-center
                  space-y-2
                  py-2
                  absolute
                  top-16
                  right-0
                  mr-4
                  h-auto
                  w-12
                  bg-white bg-opacity-80
                  rounded-b-3xl
                "
              >
                <div
                  v-for="(color, index) in colors"
                  :key="index"
                  class="w-6 h-6 rounded-full cursor-pointer"
                  :style="`background-color: ${color.colorcodes}`"
                  @click="selectColor(color.colorcodes)"
                ></div>
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
            <div class="flex items-center space-x-1">
              <svg
              v-for="(bike, index) in bike?.avg"
                :key="index"
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
    <div id="parentDiv" class="max-w-screen-xl mx-auto">
      <div
        id="navbar"
        class="
          overflow-hidden
          flex
          items-center
          justify-evenly
          text-xl text-white
          uppercase
          font-semibold
          shadow-2xl
          bg-secondary
          rounded-md
          z-50
        "
        :class="`w-[${width}px]`"
      >
        <h1
          class="cursor-pointer"
          :class="{
            'text-red-500 border-r-0 border-t-0 border-l-0 border-b-[6px] border-red-500 py-3':
              activeTab === 'bikes',
          }"
          @click="scrollTo('bikes')"
        >
          More Bike
        </h1>
        <h1
          class="cursor-pointer"
          :class="{
            'text-red-500 border-r-0 border-t-0 border-l-0 border-b-[6px] border-red-500 py-3':
              activeTab === 'blogs',
          }"
          @click="scrollTo('blogs')"
        >
          News/Blog
        </h1>
        <h1
          class="cursor-pointer"
          :class="{
            'text-red-500 border-r-0 border-t-0 border-l-0 border-b-[6px] border-red-500 py-3':
              activeTab === 'dealers',
          }"
          @click="scrollTo('dealers')"
        >
          Dealers List
        </h1>
        <h1
          class="cursor-pointer"
          :class="{
            'text-red-500 border-r-0 border-t-0 border-l-0 border-b-[6px] border-red-500 py-3':
              activeTab === 'questions',
          }"
          @click="scrollTo('questions')"
        >
          Q&A
        </h1>
        <h1
          class="cursor-pointer"
          :class="{
            'text-red-500 border-r-0 border-t-0 border-l-0 border-b-[6px] border-red-500 py-3':
              activeTab === 'reviews',
          }"
          @click="scrollTo('reviews')"
        >
          User Reviews
        </h1>
      </div>
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

      <Qa :bike="bike" @remove-nav="removeNav" :url="`${url}`" />

      <UserReviews :bike="bike" :reviews="reviews" @remove-nav="removeNav" :url="`${url}`" :rates="rates" />
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
    Qa,
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
      reviews: [],
      versionSelected: null,
      dealersCount: null,
      specs: [],
      colors: [],
      displayColors: false,
      colorSelected: null,
      activeTab: "bikes",
      width: 1280,
      rates: []
    };
  },
  computed: {
      url() {
          return location.pathname;
      }
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  mounted() {
    this.width = window.innerWidth
    this.bike = this.$inertia.page.props.bike;
    this.dealers = this.$inertia.page.props.dealers;
    this.suggestedBikes = this.$inertia.page.props.moreBikes;
    this.cities = this.$inertia.page.props.cities;
    this.brands = this.$inertia.page.props.brands;
    this.dealersCount = this.$inertia.page.props.dealersCount;
    this.reviews = this.$inertia.page.props.reviews;
    this.rates = this.$inertia.page.props.rates;
    axios
      .get(`/bike-versions/${this.bike?.model_id}`)
      .then((res) => {
        this.versions = res.data;
        this.versionSelected = this.bike?.version_name;
        this.colors = JSON.parse(this.bike.color_codes);
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
      window.location.replace(link);
    },
    slugify(text) {
      return text
        .toLowerCase()
        .replace(/ /g, "-")
        .replace(/[^\w-]+/g, "");
    },
    selectColor(color) {
      this.colorSelected = color;
      this.displayColors = false;
    },
    handleScroll() {
      var navbar = document.getElementById("navbar");
      var parent = document.getElementById("parentDiv");
      var sticky = navbar.offsetTop;
      var stickyParent = parent.offsetTop;
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
      }
      if (window.pageYOffset < stickyParent) {
        navbar.classList.remove("sticky");
      }
    },
    removeNav() {
      var navbar = document.getElementById("navbar");

      navbar.classList.remove("sticky");
    },
    showNav() {
      var navbar = document.getElementById("navbar");

      navbar.classList.add("sticky");
    },
    scrollTo(val) {
      if (val === "bikes") {
        this.activeTab = "bikes";
        window.scroll({
          top: 1420,
          behavior: "smooth",
        });
      } else if (val === "blogs") {
        this.activeTab = "blogs";
        window.scroll({
          top: 1820,
          behavior: "smooth",
        });
      } else if (val === "dealers") {
        this.activeTab = "dealers";
        window.scroll({
          top: 2450,
          behavior: "smooth",
        });
      } else if (val === "questions") {
        this.activeTab = "questions";
        window.scroll({
          top: 3750,
          behavior: "smooth",
        });
      } else if (val === "reviews") {
        this.activeTab = "reviews";
        window.scroll({
          top: 4280,
          behavior: "smooth",
        });
      }
    },
  },
});
</script>

<style scoped>
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

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  top: 0;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
</style>
