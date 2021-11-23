<template>
  <div class="w-2/5 bg-gray-800">
    <div class="w-full bg-gray-800">
      <button
        @click="selectTab(1)"
        class="px-14 py-6 text-2xl uppercase"
        :class="
          activeTab === 1
            ? 'text-red-600 bg-gray-600 font-bold'
            : 'text-gray-200 bg-gray-800 font-normal'
        "
      >
        Key Features
      </button>
      <button
        @click="selectTab(2)"
        class="px-14 py-6 text-2xl uppercase"
        :class="
          activeTab === 2
            ? 'text-red-600 bg-gray-600 font-bold'
            : 'text-gray-200 bg-gray-800 font-normal'
        "
      >
        Price
      </button>

      <div v-if="activeTab === 1">
        <div class="flex px-14 py-4 h-max">
          <div>
            <div class="w-8 h-8 bg-gray-50"></div>
            <h3 class="text-gray-50 text-lg font-bold">0 x 935 X 1502</h3>
            <p class="text-gray-50">Dimensions (L x W x H)</p>
          </div>
          <div>
            <div class="w-8 h-8 bg-gray-50"></div>
            <h3 class="text-gray-50 text-lg font-bold">6-Speed</h3>
            <p class="text-gray-50">Transmission</p>
          </div>
        </div>
        <div class="flex px-14 py-4">
          <div>
            <div class="w-8 h-8 bg-gray-50"></div>
            <h3 class="text-gray-50 text-lg font-bold">0 x 935 X 1502</h3>
            <p class="text-gray-50">Dimensions (L x W x H)</p>
          </div>
          <div>
            <div class="w-8 h-8 bg-gray-50"></div>
            <h3 class="text-gray-50 text-lg font-bold">6-Speed</h3>
            <p class="text-gray-50">Transmission</p>
          </div>
        </div>
        <div class="flex px-14 py-4">
          <div>
            <div class="w-8 h-8 bg-gray-50"></div>
            <h3 class="text-gray-50 text-lg font-bold">0 x 935 X 1502</h3>
            <p class="text-gray-50">Dimensions (L x W x H)</p>
          </div>
          <div>
            <div class="w-8 h-8 bg-gray-50"></div>
            <h3 class="text-gray-50 text-lg font-bold">6-Speed</h3>
            <p class="text-gray-50">Transmission</p>
          </div>
        </div>
        <div class="flex justify-start px-14 py-10">
          <button
            @click="scrollDown()"
            class="
              text-white
              py-4
              px-12
              uppercase
              shadow-md
              font-bold
              text-base
              bg-gray-900
              rounded-l
            "
          >
            Full Specs
          </button>
          <button class="bg-red-600 text-white px-6 py-3 rounded-r">
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
      <div class="px-14 py-28 flex-col items-center justify-center" v-else>
        <div class="py-16 space-y-6">
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">Ex-showroom (Bangalore):</p>
            <h1 class="text-white text-1xl font-bold">₹ {{ bikePrice.ex_showroom_price }}</h1>
          </div>
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">RTO:</p>
            <h1 class="text-white text-1xl font-bold">₹ {{ bikePrice.rto_price }}</h1>
          </div>
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">Insurance (Comprehensive):</p>
            <h1 class="text-white text-1xl font-bold">₹ {{ bikePrice.insurance_price }}</h1>
          </div>
          <hr>
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">On-road price in Bangalore:</p>
            <h1 class="text-white text-4xl font-bold">₹ {{ bikePrice.onroad_price }}</h1>
          </div>
          <div>
            <a
              href="/"
              class="
                inline-flex
                items-center
                justify-center
                h-12
                font-medium
                uppercase
                tracking-wide
                text-white
                transition
                duration-200
                bg-deep-purple-accent-400
                hover:bg-deep-purple-accent-700
                focus:shadow-outline focus:outline-none
              "
              aria-label="City"
              title="City"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-red-500 mr-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                />
              </svg>

              <span>Bangalore</span>
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
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </a>
          </div>
        </div>
        <div class="flex justify-start py-10">
          <button
            class="
              text-white
              py-4
              px-12
              uppercase
              shadow-md
              font-bold
              text-base
              bg-gray-900
              rounded-l
            "
          >
            Contact Dealer
          </button>
          <button class="bg-red-600 text-white px-6 py-3 rounded-r">
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
  </div>
</template>

<script>
export default {
  name: "BikeDetailsFeaturesPrice",
  props: [
    'bikePrice'
  ],
  data() {
    return {
      activeTab: 1,
    };
  },

  methods: {
    selectTab(val) {
      this.activeTab = val;
    },
    scrollDown() {
      console.log("sadas");
      window.scroll({
        top: 700,
        behavior: "smooth",
      });
    },
  },
};
</script>

<style>
</style>