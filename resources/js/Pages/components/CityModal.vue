<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <TransitionRoot as="template" :show="open">
    <Dialog
      as="div"
      class="fixed z-10 inset-0 overflow-y-auto"
      @close="open = false"
    >
      <div
        class="
          flex
          items-end
          justify-center
          min-h-screen
          pt-4
          px-4
          pb-20
          text-center
          sm:block sm:p-0
        "
      >
        <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in duration-200"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
          />
        </TransitionChild>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span
          class="hidden sm:inline-block sm:align-middle sm:h-screen"
          aria-hidden="true"
          >&#8203;</span
        >
        <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          enter-to="opacity-100 translate-y-0 sm:scale-100"
          leave="ease-in duration-200"
          leave-from="opacity-100 translate-y-0 sm:scale-100"
          leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
          <div
            class="
              inline-block
              align-bottom
              bg-white
              rounded-lg
              text-left
              overflow-hidden
              shadow-xl
              transform
              transition-all
              sm:my-8 sm:align-middle sm:max-w-lg sm:w-full
              h-120
            "
          >
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <DialogTitle
                    as="h3"
                    class="text-lg leading-6 font-medium text-gray-900"
                  >
                    Select city
                  </DialogTitle>
                  <div class="mt-2">
                    <div
                      class="
                        relative
                        items-center
                        justify-between
                        pr-8
                        w-full
                      "
                    >
                      <div ref="cities" class="relative">
                        <div class="w-full">
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
                              border-2
                              border-gray-100
                              py-3
                              px-12
                              text-black
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
                            z-50
                            shadow-2xl
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

                        <div class="flex flex-wrap items-center w-full justify-center">
                          <img @click="selectCity('bangalore', 1)" class="cursor-pointer w-24 h-24" src="/icons/bangalore.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('mumbai', 3)" class="cursor-pointer w-24 h-24" src="/icons/mumbai.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('delhi', 4)" class="cursor-pointer w-24 h-24" src="/icons/new-delhi.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('gurugram', city.id)" class="cursor-pointer w-24 h-24" src="/icons/gurugram.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('pune', 2)" class="cursor-pointer w-24 h-24" src="/icons/pune.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('hyderabad', 6)" class="cursor-pointer w-24 h-24" src="/icons/hyderabad.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('jaipur', 584)" class="cursor-pointer w-24 h-24" src="/icons/jaipur.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('ahmedabad', 8)" class="cursor-pointer w-24 h-24" src="/icons/ahmedabad.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('chennai', 5)" class="cursor-pointer w-24 h-24" src="/icons/chennai.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('faridabad', 413)" class="cursor-pointer w-24 h-24" src="/icons/faridabad.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('goa', 452)" class="cursor-pointer w-24 h-24" src="/icons/goa.svg" alt="" style="filter: invert(1);">
                          <img @click="selectCity('kolkata', 7)" class="cursor-pointer w-24 h-24" src="/icons/kolkata.svg" alt="" style="filter: invert(1);">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="absolute bottom-0 w-full bg-gray-50 px-4 py-6 sm:px-6 sm:flex sm:flex-row-reverse"
            >
              <button
                type="button"
                class="
                  w-full
                  inline-flex
                  justify-center
                  rounded-md
                  border border-transparent
                  shadow-sm
                  px-4
                  py-2
                  bg-icon-button
                  text-base
                  font-medium
                  text-white
                  hover:bg-red-700
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-red-500
                  sm:ml-3 sm:w-auto sm:text-sm
                "
                @click="selectCity()"
              >
                Select
              </button>
              <button
                type="button"
                class="
                  mt-3
                  w-full
                  inline-flex
                  justify-center
                  rounded-md
                  border border-gray-300
                  shadow-sm
                  px-4
                  py-2
                  bg-white
                  text-base
                  font-medium
                  text-gray-700
                  hover:bg-gray-50
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-indigo-500
                  sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm
                "
                @click="open = false"
                ref="cancelButtonRef"
              >
                Cancel
              </button>
            </div>
          </div>
        </TransitionChild>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import {
  Dialog,
  DialogOverlay,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";

export default {
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
  },
  data() {
    return {
      open: true,
      isCitiesList: false,
      cities: [],
      citiesList: [],
      city: null,
      cityId: 1
    };
  },
  mounted() {
      axios.get('/get-cities')
        .then(res => {
            this.cities = res.data
        })
        .catch(err => {
            console.log(err)
        })
  },
  methods: {
    searchOnCities() {
      this.isCitiesList = true;
    },
    filterCitiesList() {
      const data = this.cities.filter((val) => {
        return val.name.toLowerCase().includes(this.city, 0);
      });
      this.citiesList = data;
    },
    selectCity(name, id) {
        this.open = false
      this.city = name;
      this.cityId = id;
      this.isCitiesList = false;
      this.citiesList = this.cities;
      localStorage.setItem('citySelectedName', this.city);
      localStorage.setItem('citySelectedId', id);
      this.$emit('city-selected', {
          city_name: this.city,
          city_id: id
      })
    var emitter = require('tiny-emitter/instance');
      emitter.emit('city-selected', {
          city_name: this.city,
          city_id: id
      });
    },
  }
};
</script>