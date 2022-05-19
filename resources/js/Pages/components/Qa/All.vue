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
            All {{ questions?.[0]?.make }} questions
          </h3>
          <div class="pt-12 pb-6 mx-8 grid grid-cols-1 gap-6">
            <div
              v-for="question in questions"
              :key="question.id"
              class="bg-[#2F2F2F] rounded-lg px-6 py-4"
            >
              <div class="text-gray-50 space-y-2">
                <div class="flex items-center space-x-4">
                  <div>
                    <img
                      class="w-12 h-12 rounded-full"
                      v-if="question.user?.profile_photo_path"
                      :src="question.user?.profile_photo_path"
                      :alt="question.user?.name"
                    />
                    <div v-else class="w-12 h-12 bg-red-200 rounded-full"></div>
                  </div>
                  <div>
                    <h1 class="font-bold">{{ question.user?.name }}</h1>
                      <p>{{datePosted(question.create_at)}}</p>
                  </div>
                </div>
                <h3 class="text-xl font-bold">
                  {{ question?.question }}
                </h3>
                <p class="text-light italic">
                  {{ question?.answer }}
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
import Navigation from "../Navigation.vue";
import Blogs from "../Blogs.vue";
import Footer from "../Footer.vue";
import Subscribe from "../Subscribe.vue";
import Dealers from "./../Dealers.vue";
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
      questions: [],
    };
  },
  mounted() {
    this.dealers = this.$inertia.page.props.dealers;
    this.cities = this.$inertia.page.props.cities;
    this.brands = this.$inertia.page.props.brands;
    this.brand = this.$inertia.page.props.brand;
    this.questions = this.$inertia.page.props.questions;
    // axios
    //   .get(`/question-versions/${this.question?.model_id}`)
    //   .then((res) => {
    //     this.versions = res.data;
    //     this.versionSelected = this.question?.id;
    //   })
    //   .catch((err) => {
    //     console.log(err);
    //   });
  },
  methods: {
    questionIsChanged() {
      window.location.replace(`/question/${this.versionSelected}`);
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
