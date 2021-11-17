<template>
  <div class="relative">
    <img
      style="height: 650px !important; width: 100% !important; object-fit: none"
      src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1770&q=80"
      alt=""
    />

    <div class="absolute inset-x-0 -bottom-20 mx-auto w-2/3 h-40">
      <div
        class="
          px-40
          bg-opacity-60 bg-gray-100
          h-36
          rounded-lg
          mx-auto
          flex
          justify-center
          items-center
          w-full
          space-x-6
        "
      >
        <input
          class="
            max-h-16
            w-120
            py-4
            rounded-lg
            border-none
            outline-none
            focus:outline-none
            active:outline-none
          "
          type="text"
          placeholder="Search by brand, Body, Model..."
        />
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
};
</script>

<style>
</style>