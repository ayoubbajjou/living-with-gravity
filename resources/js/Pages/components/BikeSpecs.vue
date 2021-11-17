<template>
  <div class="flex pl-64 bg-gray-800 py-12">
    <div class="bg-gray-700 px-12 py-8 flex-col items-start flex space-y-12">
      <button
        class="uppercase"
        :class="activeTab === 1 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 1" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>
        Engine And Transmission
      </button>
      <button
        class="uppercase"
        :class="activeTab === 2 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 2" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>

        Features And Safety
      </button>
      <button
        class="uppercase"
        :class="activeTab === 3 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 3" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>

        Charging
      </button>
      <button
        class="uppercase"
        :class="activeTab === 4 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 4" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>

        Chassis and Suspension
      </button>
      <button
        class="uppercase"
        :class="activeTab === 5 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 5" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>

        Dimensions and Capacity
      </button>
      <button
        class="uppercase"
        :class="activeTab === 6 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 6" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>

        Electricals
      </button>
      <button
        class="uppercase"
        :class="activeTab === 7 ? 'text-red-500 font-bold' : 'text-white ml-6 font-semibold'"
      >
        <span v-if="activeTab === 7" class="mr-4 border-l-[6px] leading-4 border-red-500"></span>

        Tyres And Brakes
      </button>
    </div>
    <div class="flex max-h-120 items-center overflow-y-auto">
      <ul class="text-white px-12 py-8 space-y-8">
        <li class="text-bold">Engine Type</li>
        <li class="text-bold">Displacement</li>
        <li class="text-bold">Max Power</li>
        <li class="text-bold">Max Troque</li>
        <li class="text-bold">No. of cylinders</li>
        <li class="text-bold">Cooling System</li>
        <li class="text-bold">Valve Per Cylinder</li>
        <li class="text-bold">Drive Type</li>
        <li class="text-bold">Starting</li>
        <li class="text-bold">Fuel Suply</li>
        <li class="text-bold">Displacement</li>
        <li class="text-bold">Max Power</li>
        <li class="text-bold">Max Troque</li>
        <li class="text-bold">No. of cylinders</li>
        <li class="text-bold">Cooling System</li>
        <li class="text-bold">Valve Per Cylinder</li>
        <li class="text-bold">Drive Type</li>
        <li class="text-bold">Starting</li>
        <li class="text-bold">Fuel Suply</li>
      </ul>
      <ul class="text-white px-12 py-8 space-y-8">
        <li>Liquid-cooled, 12 valve, DHOC, in-line 3 cylinder</li>
        <li>888 cc</li>
        <li>95.2 PS @ 8750rpm</li>
        <li>87 Nm @ 7250 rpm</li>
        <li>3</li>
        <li>Liquid Cooled</li>
        <li>4</li>
        <li>Chain Drive</li>
        <li>Self Start Only</li>
        <li>Fuel Injection</li>
        <li>888 cc</li>
        <li>95.2 PS @ 8750rpm</li>
        <li>87 Nm @ 7250 rpm</li>
        <li>3</li>
        <li>Liquid Cooled</li>
        <li>4</li>
        <li>Chain Drive</li>
        <li>Self Start Only</li>
        <li>Fuel Injection</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "BikeSpecs",
  data() {
    return {
      activeTab: 1,
    };
  },
};
</script>

<style>
</style>