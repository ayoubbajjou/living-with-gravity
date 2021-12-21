<template>
  <Head title="Welcome" />
  <Navigation />
  <div class="bg-secondary h-screen">
    <div class="max-w-screen-xl mx-auto">
      <div class="">
        <img
          class="mx-auto"
          :src="`/images/brands/${brand?.brand_logo}`"
          :alt="brand?.brand_name"
        />
      </div>
      <div class="py-8 shadow-xl lg:flex justify-around items-center">
        <div class="w-full">
          <img
            class="w-full lg:rounded-l-lg"
            :src="suggestedBikes?.[0]?.images[0]?.image_link"
            alt=""
          />
        </div>
        <div class="w-full h-[360px] overflow-y-auto scrollBar">
          <div class="py-4 bg-[#2F2F2F] lg:rounded-r-lg">
            <p
              class="text-white lg:rounded-r-lg bg-[#2F2F2F] shadow-xl px-8"
              v-html="brand?.about_brand"
            ></p>
          </div>
        </div>
      </div>
      <MoreSuggestedBikes
        :title="bike?.brand.brand_name"
        :brand="true"
        :bikes="suggestedBikes"
      />

      <!-- Blog section -->
      <Blogs />

      <Dealers
        :dealers="brand?.dealers"
        :cities="cities"
        :brands="brands"
        :brandId="brand?.id"
        :brandTitle="brand?.brand_name"
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
import Navigation from "./components/Navigation.vue";
import Blogs from "./components/Blogs.vue";
import Footer from "./components/Footer.vue";
import Subscribe from "./components/Subscribe.vue";
import Dealers from "./components/Dealers.vue";
import MoreSuggestedBikes from "./components/MoreSuggestedBikes.vue";

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
      brand: null,
    };
  },
  mounted() {
    this.bike = this.$inertia.page.props.bike;
    this.dealers = this.$inertia.page.props.dealers;
    this.suggestedBikes = this.$inertia.page.props.moreBikes;
    this.cities = this.$inertia.page.props.cities;
    this.brands = this.$inertia.page.props.brands;
    this.brand = this.$inertia.page.props.brand;
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
    nextImg() {
      const lastImg = this.bike.images.length;
      if (this.currentImg >= lastImg) {
        return;
      } else {
        this.currentImg;

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
<style scoped>
.scrollBar::-webkit-scrollbar {
  display: none;
}
</style>