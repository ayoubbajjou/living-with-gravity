<template>
  <div class="bg-secondary">
    <h1
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
      "
    >
      Featured Bikes
    </h1>
    <div class="flex space-x-12 mt-12 justify-center items-center">
      <div>
        <button type="button" @click="scrollBack()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-white cursor-pointer transform rotate-180"
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
      <div class="h-72 w-96 hidden lg:block">
        <img
          class="h-72 w-96"
          :src="`/images/bike-${featuredImages[start][1]}.png`"
          alt=""
        />
      </div>
      <div>
        <div class="w-64 h-full md:h-72 md:w-96 lg:h-96 lg:w-120">
          <img
            class="w-64 h-full md:h-72 md:w-96 lg:h-96 xl:w-120"
            :src="`/images/bike-${featuredImages[start][0]}.png`"
            alt=""
          />
        </div>
      </div>
      <div class="h-72 w-96 hidden lg:block">
        <img
          class="h-72 w-96"
          :src="`/images/bike-${featuredImages[start][2]}.png`"
          alt=""
        />
      </div>
      <div>
        <button type="button" @click="scrollNext()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-white cursor-pointer"
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
    <div
      class="flex items-center justify-center space-y-3 flex-col mt-16 lg:mt-32"
    >
      <p class="text-3xl text-white uppercase font-bold italic">
        {{ bikesDetails[start].title }}
      </p>
      <p class="text-red-600 font-bold text-2xl">
        {{ bikesDetails[start].price }}
      </p>
      <a
        href="/"
        class="bg-icon-button text-white px-6 py-3 rounded-r"
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
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "FeaturedBikes",
  data() {
    return {
      start: 0,
      featuredImages: [
        [
          1, //3  2
          2, //1  3
          3, //2  1
        ],
        [2, 3, 1],
        [3, 1, 2],
      ],
      bikesDetails: [
        {
          title: "YAMAHA ALPHA",
          price: "$11,500",
        },
        {
          title: "DUCATI PANIGALE V4",
          price: "$6,000",
        },
        {
          title: "DOCKER STE",
          price: "$2,500",
        },
      ],
    };
  },
  mounted() {},
  methods: {
    scrollNext() {
      if (this.start === 2) {
        this.start = 0;
      } else {
        this.start++;
      }
    },
    scrollBack() {
      if (this.start === 0) {
        this.start = 2;
      } else {
        this.start--;
      }
    },
  },
};
</script>

<style>
</style>