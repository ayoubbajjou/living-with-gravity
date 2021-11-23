<template>
  <!-- More products section -->
  <div class="bg-gray-800">
    <h1 class="text-white w-max ml-64 text-4xl uppercase font-bold italic">
      More triumph bikes
    </h1>

    <div class="overflow-x-auto" id="suggestedBikes">
      <div class="w-max flex px-64 pt-12 pb-6">
        
        <div v-for="(bike, index) in bikes" :key="bike.id"
        :class="index === 0 ? 'bg-gray-100': 'bg-gray-700'"
          class="
            flex
            rounded-lg
            px-6
            py-4
            items-center
            space-x-12
            mx-8
          "
        >
          <img
            class="w-24 h-16 rounded-lg mr-4"
            src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1770&q=80"
            alt=""
          />
          <div :class="index === 0 ? 'text-gray-900': 'text-gray-50'">
            <h3 class="font-bold">{{bike.series}} {{ bike.version_name }}</h3>
            <span class="text-xs">Starting from</span>
            <p class="text-light italic">Rs. 6.95 Lakh</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div
        class="
          flex
          justify-between
          items-center
          text-center
          pl-64
          text-gray-50
          pt-4
          pb-12
          pr-72
        "
      >
        <div class="flex space-x-6">
          <button type="button" @click="scrollBack()">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 cursor-pointer transform rotate-180"
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

          <button type="button" @click="scrollNext()">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 cursor-pointer"
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
        <a href="#" class="text-red-600">View all</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MoreSuggestedBikes",
  props: [ 'bikes' ],
  data() {
    return {
      scrollVal: 300,
    };
  },
  methods: {
    scrollNext() {
      this.validateScroll();
      this.documentScroll('+')
      this.scrollTo();
    },
    scrollBack() {
      this.validateScroll();
      this.documentScroll('-')
      this.scrollTo();
    },
    documentScroll(operator) {
      const scrollWith = 300;
      operator === '+' ? this.scrollVal += scrollWith : this.scrollVal -= scrollWith ;
    },
    scrollTo() {
      const el = document.getElementById("suggestedBikes");
      el.scrollTo({
        left: this.scrollVal,
        behavior: "smooth",
      });
    },
    validateScroll() {
      if (this.scrollVal <= 0) {
        this.scrollVal = 300;
      }
      if (this.scrollVal >= 2400) {
        this.scrollVal = 2400;
      }
    },
  },
};
</script>

<style>
</style>