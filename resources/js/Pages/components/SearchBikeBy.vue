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
      <div
        v-if="active === 1"
        class="
          w-11/12
          lg:w-full
          bg-gray-600
          grid grid-cols-3
          lg:grid-cols-5
          gap-4
          py-8
          px-4
        "
      >
        <div v-for="brand in brands" :key="brand.id" class="w-full">
          <a :href="`/brand/${brand.brand_name}`">
            <div class="h-32 w-46 rounded bg-gray-50">
              <img
                class="h-32 w-46 mx-auto"
                :src="`/images/brands/${brand.brand_logo}`"
                :alt="brand.brand_name"
              />
            </div>
            <p class="text-white text-center mt-2">{{ brand.brand_name }}</p>
          </a>
        </div>
      </div>
      <div>
        <div
          v-if="active === 2"
          class="w-11/12
          lg:w-full bg-gray-600 grid grid-cols-3 lg:grid-cols-5 gap-4 py-8 px-4"
        >
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Upto 100cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              100cc - 110cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              110cc - 125cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              125cc - 150cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              150cc - 200cc
            </p>
          </div>
        </div>
        <div
          v-if="active === 2"
          class="w-11/12
          lg:w-full bg-gray-600 grid grid-cols-3 lg:grid-cols-5 gap-4 py-8 px-4"
        >
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              200cc - 250cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              250cc - 500cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              500cc - 750cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              750cc - 1000cc
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Above 1000cc
            </p>
          </div>
        </div>
      </div>
      <div>
        <div
          v-if="active === 3"
          class="w-11/12
          lg:w-full bg-gray-600 grid grid-cols-3 lg:grid-cols-5 gap-4 py-8 px-4"
        >
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹50,000
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹60,000
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹70,000
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹80,000
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹1 lakh
            </p>
          </div>
        </div>
        <div
          v-if="active === 3"
          class="w-11/12
          lg:w-full bg-gray-600 grid grid-cols-3 lg:grid-cols-5 gap-4 py-8 px-4"
        >
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹1.5 lakh
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹2 lakh
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹2.5 lakh
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Under ₹3 lakh
            </p>
          </div>
          <div
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Above ₹3 lakh
            </p>
          </div>
        </div>
      </div>
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
export default {
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