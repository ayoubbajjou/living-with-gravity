<template>
  <!-- More products section -->
  <div class="bg-secondary">
    <h1
      class="
        text-white
        border-b-4
        w-max
        border-red-600
        text-2xl
        lg:text-3xl
        uppercase
        font-bold
        italic
        ml-6
        xl:ml-0
      "
    >
      {{ brand  ? `All ${bikes?.[0].make} bikes` : `More ${bikes?.[0].make} bikes`}}
    </h1>

    <div class="overflow-x-auto scrollBar" id="suggestedBikes">
      <div class="w-max flex pt-12 pb-6">
        <div
          v-for="(bike, index) in bikes"
          :key="bike.id"
          :class="index === 0 ? 'bg-gray-100' : 'bg-[#2F2F2F]'"
          class="flex rounded-lg px-6 py-4 items-center space-x-12 mx-8 w-80"
        >
          <a class="flex" :href="`/${bike.make}/${slugify(bike.series)}/${bike.version_name}`">
            <img
              class="w-24 h-16 rounded-lg mr-4"
              :src="bike?.images[0]?.thumb_link"
              alt=""
            />
            <div :class="index === 0 ? 'text-gray-900' : 'text-gray-50'">
              <h3 class="font-bold">
                {{ bike.series }} {{ bike.version_name }}
              </h3>
              <span class="text-xs">Starting from</span>
              <p class="text-light italic">
                <!-- ₹{{ bike?.prices?.[0]?.ex_showroom_price }} -->
                ₹{{ priceFormat(bike?.default_price) }}
              </p>
            </div>
          </a>
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
          pl-pl-4
          text-gray-50
          pt-4
          pb-12
          px-8
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
        <a :href="`/all-bikes/${bikes?.[0].make}`" class="text-red-600 cursor-pointer">{{ `All ${bikes?.[0].make} bikes` }}</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MoreSuggestedBikes",
  props: ["bikes", "title", "brand"],
  data() {
    return {
      scrollVal: 300,
    };
  },
  mounted() {

  },
  methods: {
    priceFormat(price) {
      return new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(price);
    },
    scrollNext() {
      this.validateScroll();
      this.documentScroll("+");
      this.scrollTo();
    },
    scrollBack() {
      this.validateScroll();
      this.documentScroll("-");
      this.scrollTo();
    },
    documentScroll(operator) {
      const scrollWith = 300;
      operator === "+"
        ? (this.scrollVal += scrollWith)
        : (this.scrollVal -= scrollWith);
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
    slugify(text) {
      return  text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
    }
  },
};
</script>

<style scoped>
.scrollBar::-webkit-scrollbar {
    height: 10px;
}
.scrollBar::-webkit-scrollbar-thumb {
    background: #858484;
    border-radius: 10px;
}
.scrollBar::-webkit-scrollbar-track {
    background: linear-gradient(
        90deg,
        #444444,
        #444444 1px,
        #444444 0,
        #444444
    );
}
</style>
