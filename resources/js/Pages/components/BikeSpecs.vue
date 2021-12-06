<template>
  <div class="flex pl-4 lg:pl-64 bg-secondary py-12">
    <div class="bg-gray-700 lg:px-12 py-8 flex-col items-start lg:flex space-y-12">
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 1
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 1"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>
        Engine And Transmission
      </button>
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 2
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 2"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>

        Features And Safety
      </button>
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 3
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 3"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>

        Charging
      </button>
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 4
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 4"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>

        Chassis and Suspension
      </button>
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 5
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 5"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>

        Dimensions and Capacity
      </button>
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 6
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 6"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>

        Electricals
      </button>
      <button
        class="uppercase text-xs lg:text-base"
        :class="
          activeTab === 7
            ? 'text-red-500 font-bold'
            : 'text-white ml-6 font-semibold'
        "
      >
        <span
          v-if="activeTab === 7"
          class="mr-4 border-l-[6px] leading-4 border-red-500"
        ></span>

        Tyres And Brakes
      </button>
    </div>
    <div class="flex lg:w-1/2 max-h-120 items-center overflow-y-auto">
      <ul>
        <li v-for="spec in specs" :key="spec.id" class="text-bold">
          <div class="flex items-center justify-between text-white px-12 space-y-4">
            <p>{{ spec.title }}</p>
            <p class="px-4">{{ spec.description }}</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "BikeSpecs",
  props: ["specs"],
  data() {
    return {
      activeTab: 1,
    };
  },
};
</script>

<style>
</style>