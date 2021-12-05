<template>
  <!-- Dealers in your city section -->
  <div class="bg-gray-800 pb-32">
    <h1
      class="
        text-white
        border-b-4
        w-max
        ml-4
        lg:ml-64
        border-red-600
        text-2xl
        lg:text-4xl
        uppercase
        font-bold
        italic
      "
    >
      Dealers in your city
    </h1>

    <div class="lg:flex w-full pl-4 lg:pl-64 py-12 space-y-6 lg:space-y-0 ">
      <div class="relative flex lg:mr-96 items-center justify-between pr-8">
        <div ref="cities" class="relative">
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="absolute inset-x-0 top-2 h-6 w-6 text-white"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
            <input
              autocomplete="off"
              type="text"
              id="search"
              placeholder="Search your city"
              class="
                w-full
                bg-transparent
                border-b-2 border-t-0 border-l-0 border-r-0 border-gray-100
                py-3
                px-12
                text-white
                outline-none
                focus:outline-none
                focus:ring-2
                focus:ring-transparent
                focus:border-b-2
                focus:border-gray-100
              "
              v-model="city"
              @focus="searchOnCities()"
              @keyup="filterCitiesList()"
            />

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 absolute right-0 top-4 w-6 text-white"
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
          </div>
          <div
            v-if="isCitiesList"
            class="
              absolute
              max-h-120
              w-full
              space-y-4
              bg-white
              rounded-md
              mt-4
              overflow-y-scroll
            "
          >
            <ul class="w-full">
              <li
                class="
                  font-bold
                  text-md text-gray-700
                  hover:bg-gray-400 hover:text-white
                  w-full
                  px-4
                  py-2
                  cursor-pointer
                "
                v-for="city in citiesList"
                :key="city.id"
                @click="selectCity(city.name, city.id)"
              >
                {{ city.name }}
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative flex items-center justify-between pr-8">
        <div ref="brands" class="relative">
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="absolute inset-x-0 top-2 h-6 w-6 text-white"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
            <input
              autocomplete="off"
              type="text"
              id="search"
              placeholder="Search your brand"
              class="
                w-full
                bg-transparent
                border-b-2 border-t-0 border-l-0 border-r-0 border-gray-100
                py-3
                px-12
                text-white
                outline-none
                focus:outline-none
                focus:ring-2
                focus:ring-transparent
                focus:border-b-2
                focus:border-gray-100
              "
              v-model="brand"
              @focus="searchOnBrands()"
              @keyup="filterBrandsList()"
            />

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 absolute right-0 top-4 w-6 text-white"
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
          </div>
          <div
            v-if="isBrandList"
            class="
              absolute
              max-h-120
              w-full
              space-y-4
              bg-white
              rounded-md
              mt-4
              overflow-y-scroll
            "
          >
            <ul class="space-y-2 w-full">
              <li
                v-for="brand in brandsList"
                :key="brand.id"
                class="
                  flex
                  items-center
                  font-bold
                  text-md text-gray-700
                  hover:bg-gray-400 hover:text-white
                  w-full
                  px-4
                  py-2
                  cursor-pointer
                "
                @click="selectBrand(brand.brand_name)"
              >
                <img
                  :src="`/images/brands/${brand.brand_logo}`"
                  class="w-12 h-12 mr-4"
                />
                {{ brand.brand_name }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <h3 class="text-gray-50 font-bold font-xl pl-4 lg:pl-64 pt-4">
      {{ brandTitle }} Dealers in {{ city }}
    </h3>
    <div class="pl-4 lg:pl-64  pt-2 pb-8">
      <table v-if="dealersList.length" class="text-gray-50 text-start">
        <thead class="bg-gray-600">
          <td class="px-6 py-4">Dealer</td>
          <td class="px-6 py-4">Phone No.</td>
          <td class="px-6 py-4">Address</td>
        </thead>
        <tbody class="border-b py-4 pl-8 border-gray-50">
          <tr v-for="dealer in dealersList" :key="dealer.id">
            <td class="px-6 py-4">{{ dealer.name }}</td>
            <td class="px-6 py-4">{{ dealer.phone }}</td>
            <td class="px-6 py-4 max-w-md">
              {{ dealer.address }}
            </td>
          </tr>
        </tbody>
      </table>
       <thead v-else class="bg-gray-600">
          <p class="text-gray-50 text-start px-6 py-4">No dealers found!</p>
        </thead>
      <div class="flex items-center mt-10 space-x-4">
        <button
          v-for="(page, index) in dealersPagination"
          :key="index"
          :class="
            activePage === page
              ? 'bg-white text-red-500 '
              : 'bg-red-500 text-white '
          "
          class="
            py-4
            px-6
            font-bold
            focus:outline-none
            active:outline-none
            rounded-lg
          "
          @click="paginate(page)"
        >
          {{ page }}
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, reactive } from "vue";
import { onClickOutside } from "@vueuse/core";

export default {
  name: "Dealers",
  props: [
    "dealers",
    "cities",
    "brands",
    "brandTitle",
    "dealersCount",
    "brandId"
  ],
  data() {
    return {
      city: localStorage.getItem('citySelectedName'),
      cityId: localStorage.getItem('citySelectedId'),
      brand: null,
      brandsList: [],
      citiesList: [],
      isCitiesList: false,
      isBrandList: false,
      activePage: 1,
      dealersList: [],
      dealersPagination: 0
    };
  },
  setup(props) {
    const state = reactive({
      isCitiesList: false,
      isBrandList: false,
      dealersList: props.dealers,
    });
    const citiesRef = ref("cities");
    const brandsRef = ref("brands");

    return {
      citiesRef,
      brandsRef,
      state,
      props,
    };
  },
  created() {
    onClickOutside(this.$refs.cities, (event) => {
      console.log(event);
    });
  },
  watch: {
    dealers(val) {
      const data = val.filter((brand) => {
        return brand.city_id === 1;
      });
      this.dealersList = data;
    },
    cities(val) {
      this.citiesList = val;
    },
    brands(val) {
      this.brandsList = val;
    }
  },
  mounted() {
    this.citiesList = this.cities;
    this.brandsList = this.brands;
    setTimeout(() => {
      this.paginate()
    }, 100) 

    // this.dealersPagination = Math.ceil(this.dealersCount  / 10);
    // console.log(this.dealersCount)
  },
  methods: {
    filterCitiesList() {
      const data = this.cities.filter((val) => {
        return val.name.toLowerCase().includes(this.city, 0);
      });
      this.citiesList = data;
    },
    filterBrandsList() {
      const data = this.brands.filter((val) => {
        return val.brand_name.toLowerCase().includes(this.brand, 0);
      });
      this.brandsList = data;
    },
    searchOnBrands() {
      this.isBrandList = true;
      this.isCitiesList = false;
    },
    searchOnCities() {
      this.isCitiesList = true;
      this.isBrandList = false;
    },
    selectBrand(name) {
      this.brand = name;
      this.city = null;
      this.isBrandList = false;
      this.isCitiesList = false;
      this.brandsList = this.brands;
    },
    selectCity(name, id) {
      this.city = name;
      this.cityId = id;
      this.brand = null;
      this.isBrandList = false;
      this.isCitiesList = false;
      this.citiesList = this.cities;
      this.paginate()
    },
    collapse() {
      console.log("sfas");
      this.isBrandList = false;
      this.isCitiesList = false;
    },
    paginate(page = 1) {
      axios.post('/get-dealers-pagination', {
        page: page,
        brand_id: this.brandId,
        city_id: this.cityId
      })
      .then(res => {
        this.activePage = page;
        this.dealersList = res.data[0]
        this.dealersPagination = Math.ceil(res.data[1]  / 10);

      })
      .catch(err => {
        console.log(err)
      })
    },
  },
};
</script>

<style scoped>
</style>