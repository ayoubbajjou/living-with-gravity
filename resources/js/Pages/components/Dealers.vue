<template>
  <!-- Dealers in your city section -->
  <div class="bg-gray-800 pb-32">
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
      Dealers in your city
    </h1>

    <div class="flex w-full justify-between px-36 py-12">
      <div class="relative flex w-1/2 items-center justify-between pr-8">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="absolute inset-x-0 left-28 h-6 w-6 text-white"
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
          type="text"
          placeholder="Search your city"
          class="
            w-2/3
            ml-28
            bg-transparent
            border-b-2 border-t-0 border-l-0 border-r-0
            focus:outline-none
            border-gray-100
            py-3
            px-12
            outline-none
          "
        />
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 absolute inset-x-0 left-120 w-6 text-white"
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
      <div class="flex relative w-1/2 items-center justify-between pr-8">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 absolute inset-x-0 left-28 text-white"
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
          type="text"
          placeholder="Search your keyword brand"
          class="
            w-2/3
            ml-28
            bg-transparent
            border-b-2 border-t-0 border-l-0 border-r-0
            focus:outline-none
            border-gray-100
            py-3
            px-12
            outline-none
          "
        />
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 absolute inset-x-0 left-120 w-6 text-white"
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
    </div>
    <h3 class="text-gray-50 font-bold font-xl pl-64 pt-4">
      Triumph Dealers in Bangalore
    </h3>
    <div class="pl-64 pt-2 pb-8">
      <table class="text-gray-50 text-start">
        <thead class="bg-gray-600">
          <td class="px-6 py-4">Dealer</td>
          <td class="px-6 py-4">Phone No.</td>
          <td class="px-6 py-4">Address</td>
          <td class="px-6 py-4">Mail</td>
        </thead>
        <tbody class="border-b py-4 pl-8 border-gray-50">
          <td class="px-6 py-4">Keerthi Triumph</td>
          <td class="px-6 py-4">9535677228</td>
          <td class="px-6 py-4 max-w-md">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 560025
          </td>
          <td class="px-6 py-4">smrtriumph@keerthi.co.in</td>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "Dealers",
};
</script>

<style>
</style>