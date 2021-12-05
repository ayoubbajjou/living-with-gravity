<template>
  <div class="relative">
    <img
    class="w-full h-144"
      style="object-fit: none"
      src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1770&q=80"
      alt=""
    />

    <div class="absolute inset-x-0 -bottom-20 mx-auto w-full lg:w-2/3 h-40">
      <div
        class="
          lg:px-40
          bg-opacity-60 bg-gray-100
          h-36
          rounded-lg
          mx-auto
          flex
          justify-center
          items-center
          lg:w-full
          w-11/12
          space-x-6
        "
      >
        <div class="flex flex-col">
          <input
            class="
              relative
              max-h-16
              lg:w-120
              py-4
              rounded-lg
              border-none
              outline-none
              focus:outline-none
              active:outline-none
            "
            @keyup="search()"
            v-model="query"
            type="text"
            placeholder="Search by brand, Body, Model..."
          />
          <span v-if="errorMessage" class="text-red-500 text-sm">
            {{ errorMessage }}
          </span>
          <div
            v-if="!errorMessage && bikes.length"
            class="
              absolute
              h-80
              w-120
              top-24
              bg-white
              mt-2
              border-2 border-gray-400
              rounded-md
              overflow-y-scroll
            "
          >
            <div
              v-for="(bike) in bikes"
              :key="bike.id"
              class="flex py-4 px-8 items-center"
              @mouseover="isHovered(bike.id)"
              :class="{'bg-gray-400' : bikeHovered === bike.id}"
            >
              <a class="flex" :href="`/bike/${bike.id}`">
                <img
                  class="w-24 h-16 rounded-lg mr-4"
                  :src="bike?.images[0]?.thumb_link"
                  alt=""
                />
                <div :class="bikeHovered === bike.id ? 'text-white' : 'text-gray-900'">
                  <h3 class="font-bold">
                    {{ bike.series }} {{ bike.version_name }}
                  </h3>
                  <span class="text-xs">Starting from</span>
                  <p class="text-light italic">
                    ₹{{ bike?.prices?.[0]?.ex_showroom_price }}
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- <select
            name="brand"
            class="max-h-16 w-80 py-4 rounded-lg border-none"
            id="brand"
          >
            <option value="Brand" selected disabled>Brand</option>
          </select>
          <select
            name="body"
            class="max-h-16 w-80 py-4 rounded-lg border-none"
            id="body"
          >
            <option value="Body" selected disabled>Body</option>
          </select>
          <select
            name="year"
            class="max-h-16 w-80 py-4 rounded-lg border-none"
            id="year"
          >
            <option value="Year" selected disabled>Year</option>
          </select> -->
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
</template>

<script>
export default {
  name: "Hero",
  data() {
    return {
      query: null,
      errorMessage: null,
      bikes: [],
      bikeHovered: null
    };
  },
  methods: {
    search() {
      if (this.query.length >= 3) {
        this.errorMessage = null;
        axios
          .post("/search", {
            query: this.query,
          })
          .then((res) => {
            this.bikes = res.data
          })
          .catch((err) => {
            console.log(err);
          });
      } else {
        this.errorMessage = "please type more than 4 letters for search";
      }
    },
    isHovered(id) {
      this.bikeHovered = id
    }
  },
};
</script>

<style>
</style>