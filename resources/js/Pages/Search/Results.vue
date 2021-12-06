<template>
  <Head title="Welcome" />
  <Navigation />
  <div class="bg-secondary">
    <div class="py-8 shadow-xl items-center">
      <div>
        <h3
          class="
            text-white
            border-b-4
            w-max
            lg:ml-64
            ml-6
            border-red-600
            text-4xl
            uppercase
            font-bold
            italic
            mt-12
          "
        >
          Search Results
        </h3>
        <div class="lg:px-64 space-y-12 pt-12 pb-6">
          <div
            v-for="(bike) in bikes"
            :key="bike.id"
            class=" bg-gray-700 flex rounded-lg px-6 py-4 items-center space-x-12 mx-8"
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
                  ₹{{ bike?.prices?.[0]?.ex_showroom_price }}
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Blog section -->
    <Blogs />
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
        console.log(res.data);
        this.versions = res.data;
        this.versionSelected = this.bike?.id;
      })
      .catch((err) => {
        console.log(err);
      });
  },
  methods: {
    bikeIsChanged() {
      console.log("changed");
      window.location.replace(`/bike/${this.versionSelected}`);
    },
  },
});
</script>
