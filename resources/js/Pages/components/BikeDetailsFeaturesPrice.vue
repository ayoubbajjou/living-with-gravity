<template>
  <div class="lg:w-2/5 bg-secondary">
    <div class="w-full bg-secondary">
      <button
        @click="selectTab(1)"
        class="w-1/2 px-6 lg:px-14 py-6 text-xl uppercase"
        :class="
          activeTab === 1
            ? 'text-red-600 bg-[#2F2F2F] font-bold'
            : 'text-gray-200 bg-secondary font-normal'
        "
      >
        Key Features
      </button>
      <button
        @click="selectTab(2)"
        class="w-1/2 px-6 lg:px-14 py-6 text-xl uppercase"
        :class="
          activeTab === 2
            ? 'text-red-600 bg-[#2F2F2F] font-bold'
            : 'text-gray-200 bg-secondary font-normal'
        "
      >
        Price
      </button>

      <div v-if="activeTab === 1">
        <div class="flex px-14 py-4 h-max">
          <div class="w-1/2 space-y-2">
            <img
              src="/icons/dimension.svg"
              class="w-8 h-8"
              style="filter: invert(1)"
            />
            <h3 class="text-gray-50 text-md w-2/3 font-bold">
              {{ specs?.[0]?.dimension }}
            </h3>
            <p class="text-gray-50">Dimensions (L x W x H)</p>
          </div>
          <div class="w-1/2 space-y-2">
            <img
              src="/icons/engine.svg"
              class="w-8 h-8"
              style="filter: invert(1)"
            />
            <h3 class="text-gray-50 text-md w-2/3 font-bold">
              {{ specs?.[0]?.engine }}
            </h3>
            <p class="text-gray-50">Engine</p>
          </div>
        </div>
        <div class="flex px-14 py-4">
          <div class="w-1/2 space-y-2">
            <img
              src="/icons/fuel-tank.svg"
              class="w-8 h-8"
              style="filter: invert(1)"
            />
            <h3 class="text-gray-50 text-md w-2/3 font-bold">
              {{ specs?.[0]?.fuel }}
            </h3>
            <p class="text-gray-50">Fuel Tank</p>
          </div>
          <div class="w-1/2 space-y-2">
            <img
              src="/icons/mileage.svg"
              class="w-8 h-8"
              style="filter: invert(1)"
            />
            <h3 class="text-gray-50 text-md w-2/3 font-bold">
              {{ specs?.[0]?.mileage }}
            </h3>
            <p class="text-gray-50">Mileage</p>
          </div>
        </div>
        <div class="flex px-14 py-4">
          <div class="w-1/2 space-y-2">
            <img
              src="/icons/power.svg"
              class="w-8 h-8"
              style="filter: invert(1)"
            />
            <h3 class="text-gray-50 text-md w-2/3 font-bold">
              {{ specs?.[0]?.power }}
            </h3>
            <p class="text-gray-50">Power</p>
          </div>
          <div class="w-1/2 space-y-2">
            <img
              src="/icons/speed.svg"
              class="w-8 h-8"
              style="filter: invert(1)"
            />
            <h3 class="text-gray-50 text-md w-2/3 font-bold">
              {{ specs?.[0]?.speed }}
            </h3>
            <p class="text-gray-50">Speed</p>
          </div>
        </div>
        <div class="flex justify-center lg:justify-start px-14 py-10">
          <button
            @click="scrollDown('specs')"
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
          <button class="bg-icon-button text-white px-6 py-3 rounded-r">
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
      <div class="px-14 py-14 flex-col items-center justify-center" v-else>
        <div class="py-2 space-y-6">
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">
              Ex-showroom ({{ cityName }}):
            </p>
            <h1 class="text-white text-1xl font-bold" v-if="!loading">
              {{ priceFormat(bikePriceList?.ex_showroom_price) }}
            </h1>
            <svg
              v-if="loading"
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
          </div>
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">RTO:</p>
            <h1 class="text-white text-1xl font-bold" v-if="!loading">
              {{ priceFormat(bikePriceList?.rto_price) }}
            </h1>
            <svg
              v-if="loading"
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
          </div>
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">
              Insurance (Comprehensive):
            </p>
            <h1 class="text-white text-1xl font-bold" v-if="!loading">
              {{ priceFormat(bikePriceList?.insurance_price) }}
            </h1>
            <svg
              v-if="loading"
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
          </div>
          <hr />
          <div class="flex items-center space-x-14 justify-between">
            <p class="text-white text-md leading-4">
              On-road price in {{ cityName }}:
            </p>
            <h1 class="text-white text-3xl font-bold" v-if="!loading">
              {{ priceFormat(bikePriceList?.onroad_price) }}
            </h1>
            <svg
              v-if="loading"
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
          </div>
          <div>
            <li
              @click="selectCity = !selectCity"
              class="
                flex
                border-l-4
                items-center
                h-12
                px-6
                font-medium
                uppercase
                tracking-wide
                text-white
                transition
                duration-200
                bg-deep-purple-accent-400
                hover:bg-deep-purple-accent-700
                focus:shadow-outline focus:outline-none
                cursor-pointer
              "
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

              <span
                class="
                  flex
                  items-center
                  justify-center
                  h-12
                  px-6
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
                >{{ cityName }}</span
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
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </li>
          </div>
        </div>
        <div class="flex justify-center lg:justify-start py-10">
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
            @click="scrollDown('dealers')"
          >
            View Dealers
          </button>
          <button @click="scrollDown('dealers')" class="bg-icon-button text-white px-6 py-3 rounded-r">
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
    <city-modal v-if="selectCity" @city-selected="citySelected()"></city-modal>
  </div>
</template>

<script>
import CityModal from "./CityModal.vue";

export default {
  name: "BikeDetailsFeaturesPrice",
  props: ["bikePrice", "specs", "bikeId"],
  components: {
    CityModal,
  },
  data() {
    return {
      activeTab: 1,
      selectCity: false,
      cityName: localStorage.getItem("citySelectedName"),
      keys: null,
      bikePriceList: null,
      loading: true,
    };
  },
  mounted() {
    var emitter = require("tiny-emitter/instance");

    emitter.on("city-selected", (val) => {
      this.cityName = val.city_name;
      this.getPrice();
    });

    setTimeout(() => {
      if (!this.bikePrice) {
        this.getPrice();
      } else {
        this.bikePriceList = this.bikePrice;
        this.loading = false;
      }
    }, 5);
  },
  methods: {
    priceFormat(price) {
      return price ? '₹ '+ new Intl.NumberFormat("en-IN", {
        maximumSignificantDigits: 3,
      }).format(price) : `N/A`;
    },
    selectTab(val) {
      this.activeTab = val;
    },
    scrollDown(val) {
      if (val === "specs") {
        window.scroll({
          top: 700,
          behavior: "smooth",
        });
      } else if (val === "dealers") {
        window.scroll({
          top: 2450,
          behavior: "smooth",
        });
      }
    },
    citySelected() {
      this.cityName = localStorage.getItem("citySelectedName");
    },
    async getPrice() {
      this.loading = true;
      const city_id = localStorage.getItem("citySelectedId");
      await axios
        .get(
          `https://sleeplikecat.com/bikewale/index.php/api/getprice?bike_id=${this.bikeId}&city_id=${city_id}`
        )
        .then((res) => {

          var onRoadPrice = parseInt(res.data.data?.price?.[0]?.amount) + parseInt(res.data.data?.price?.[2]?.amount) + parseInt(res.data.data?.price?.[1]?.amount)
          this.bikePriceList = {
            bike_id: this.bikeId,
            city_id: city_id,
            ex_showroom_price: res.data.data?.price?.[0]?.amount,
            insurance_price: res.data.data?.price?.[2]?.amount,
            onroad_price: onRoadPrice,
            rto_price: res.data.data?.price?.[1]?.amount,
          };
          this.loading = false;
          console.log(this.bikePriceList);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style>
</style>