<template>
  <div class="mt-24">
    <h1
      class="
        text-white
        border-b-4
        w-max
        ml-64
        border-red-600
        text-4xl
        uppercase
        font-bold
        italic
      "
    >
      Search Bikes By
    </h1>
    <div class="mx-auto px-64 mt-12 bg-gray-800">
      <div class="flex w-full bg-gray-800">
        <div
          class="px-14 cursor-pointer py-6 text-2xl font-bold uppercase"
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
          class="px-14 cursor-pointer py-6 text-2xl font-bold uppercase"
          :class="active === 2 ? 'text-red-600 bg-gray-600' : 'text-gray-200'"
          @click="activeTab(2)"
        >
          Displacement
        </div>
        <div
          class="px-14 cursor-pointer py-6 text-2xl font-bold uppercase"
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
        class="bg-gray-600 grid grid-cols-5 gap-4 py-8 px-4"
      >
        <div v-for="brand in brands" :key="brand.id" class="w-full">
          <div class="h-32 w-46 rounded bg-gray-300"></div>
          <p class="text-white text-center mt-2">{{ brand.brand_name }}</p>
        </div>
      </div>
      <div>
        <div
          v-if="active === 2"
          class="bg-gray-600 grid grid-cols-5 gap-4 py-8 px-4"
        >
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              250-500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              500-1000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              1000-1500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              1500-2000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              2000+
            </p>
          </div>
        </div>
        <div
          v-if="active === 2"
          class="bg-gray-600 grid grid-cols-5 gap-4 py-8 px-4"
        >
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              250-500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              500-1000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              1000-1500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              1500-2000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              2000+
            </p>
          </div>
        </div>
      </div>
      <div>
        <div
          v-if="active === 3"
          class="bg-gray-600 grid grid-cols-5 gap-4 py-8 px-4"
        >
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $250-$500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $500-$1000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $1000-$1500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $1500-$2000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $2000+
            </p>
          </div>
        </div>
        <div
          v-if="active === 3"
          class="bg-gray-600 grid grid-cols-5 gap-4 py-8 px-4"
        >
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $250-$500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $500-$1000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $1000-$1500
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $1500-$2000
            </p>
          </div>
          <div class="items-center flex justify-center cursor-pointer hover:bg-white border-2 border-red-500">
            <p class="text-white font-bold text-xl py-4 px-8 text-center hover:text-red-500">
              $2000+
            </p>
          </div>
        </div>
      </div>
      <div class="flex justify-end mt-16">
        <button
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
          Show more
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
</template>

<script>
export default {
  name: "SearchBikeBy",
  data() {
    return {
      active: 1,
      brands: [],
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
  },
};
</script>

<style>
</style>