<template>
  <div class="max-w-screen-xl mx-auto">
    <Head title="Welcome" />
    <Navigation />
    <div class="bg-secondary h-screen">
      <Hero />

      <SearchBikeBy />

      <FeaturedBikes />

      <Blogs />

      <Subscribe />

      <Footer />
    </div>
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
import FeaturedBikes from "./components/FeaturedBikes.vue";
import SearchBikeBy from "./components/SearchBikeBy/SearchBikeBy.vue";
import Footer from "./components/Footer.vue";
import Subscribe from "./components/Subscribe.vue";
import Hero from "./components/Hero.vue";
export default defineComponent({
  components: {
    Head,
    Link,
    JetApplicationLogo,
    Navigation,
    Blogs,
    FeaturedBikes,
    SearchBikeBy,
    Footer,
    Subscribe,
    Hero,
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
});
</script>
