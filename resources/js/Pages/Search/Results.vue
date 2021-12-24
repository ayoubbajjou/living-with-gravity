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
            Search Results
          </h3>
          <div class="pt-12 pb-6 mx-8 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
              v-for="bike in bikes"
              :key="bike.id"
              class="
                bg-[#2F2F2F]
                flex
                rounded-lg
                px-6
                py-4
                items-center
                space-x-12
                mx-8
              "
            >
              <a class="w-full flex" :href="`/bike/${bike.id}`">
                <img
                  class="w-24 h-16 rounded-lg mr-4"
                  :src="bike?.images[0]?.thumb_link"
                  alt=""
                />
                <div class="text-gray-50">
                  <h3 class="font-bold">
                    {{ bike.series }} {{ bike.version_name }}
                  </h3>
                  <span class="text-xs">Starting from</span>
                  <p class="text-light italic">
                    ₹{{ priceFormat(bike?.default_price) }}
                  </p>
                </div>
              </a>
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
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import Navigation from "../components/Navigation.vue";
import Blogs from "../components/Blogs.vue";
import Footer from "../components/Footer.vue";
import Subscribe from "../components/Subscribe.vue";
import Dealers from "../components/Dealers.vue";

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
      cities: null,
      brands: null,
      currentImg: 0,
      versions: [],
      versionSelected: null,
      brand: null,
      bikes: [],
    };
  },
  mounted() {
    this.bike = this.$inertia.page.props.bike;
    this.dealers = this.$inertia.page.props.dealers;
    this.cities = this.$inertia.page.props.cities;
    this.brands = this.$inertia.page.props.brands;
    this.brand = this.$inertia.page.props.brand;
    this.bikes = this.$inertia.page.props.bikes;
    axios
      .get(`/bike-versions/${this.bike?.model_id}`)
      .then((res) => {
        this.versions = res.data;
        this.versionSelected = this.bike?.id;
      })
      .catch((err) => {
        console.log(err);
      });
  },
  methods: {
    priceFormat(price) {
      return new Intl.NumberFormat("en-IN", {
        maximumSignificantDigits: 3,
      }).format(price);
    },
    bikeIsChanged() {
      window.location.replace(`/bike/${this.versionSelected}`);
    },
  },
});
</script>
