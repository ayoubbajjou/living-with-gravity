<template>
  <div class="mt-24">
    <h1
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
      "
    >
      Search Bikes By
    </h1>
    <div class="mx-auto lg:px-64 mt-12 bg-gray-800">
      <div class="lg:flex w-full bg-gray-800">
        <div
          class="w-11/12 lg-w-full px-14 cursor-pointer py-6 text-2xl font-bold uppercase"
          :class="
            active === 1
              ? 'text-red-600 bg-gray-600'
              : 'text-gray-200 bg-gray-800'
          "
          @click="activeTab(1)"
        >
          Brands
        </div>
        <div
          class="w-11/12 lg-w-full px-14 cursor-pointer py-6 text-2xl font-bold uppercase"
          :class="active === 2 ? 'text-red-600 bg-gray-600' : 'text-gray-200'"
          @click="activeTab(2)"
        >
          Displacement
        </div>
        <div
          class="w-11/12 lg-w-full px-14 cursor-pointer py-6 text-2xl font-bold uppercase"
          :class="
            active === 3
              ? 'text-red-600 bg-gray-600'
              : 'text-gray-200 bg-gray-800'
          "
          @click="activeTab(3)"
        >
          Budget
        </div>
      </div>
      <search-by-brand v-if="active === 1" :brands="brands"></search-by-brand>
      <search-by-displacement v-if="active === 2" ></search-by-displacement>
      <search-by-budget v-if="active === 3" ></search-by-budget>
      <div class="flex lg:justify-end mt-8 mb-8 lg:mt-16">
        <button
          @click="getMoreBrands()"
          class="
            text-white
            px-12
            py-4
            uppercase
            shadow-md
            font-bold
            text-base
            bg-gray-900
            rounded-l
          "
        >
          {{ !showMore ? "Show more" : "Show less" }}
        </button>
        <button
          @click="getMoreBrands()"
          class="bg-red-600 text-white px-6 py-3 rounded-r"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
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
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import SearchByBrand from './components/SearchByBrand.vue';
import SearchByDisplacement from './components/SearchByDisplacement.vue';
import SearchByBudget from './components/SearchByBudget.vue';
export default {
  components: { SearchByBrand, SearchByDisplacement, SearchByBudget },
  name: "SearchBikeBy",
  data() {
    return {
      active: 1,
      brands: [],
      showMore: false,
    };
  },
  mounted() {
    console.log(this.$inertia.page.props.brands);
    this.brands = this.$inertia.page.props.brands;
  },
  methods: {
    activeTab(val) {
      this.active = val;
    },
    async getMoreBrands() {
      if (this.showMore) {
        axios
          .get("/get-brands-limited")
          .then((res) => {
            this.showMore = false;
            console.log(res);
            this.brands = res.data;
          })
          .catch((err) => {
            console.log(err);
          });
      } else {
        axios
          .get("/get-brands")
          .then((res) => {
            this.showMore = true;
            console.log(res);
            this.brands = res.data;
          })
          .catch((err) => {
            console.log(err);
          });
      }
    },
  },
};
</script>

<style>
</style>