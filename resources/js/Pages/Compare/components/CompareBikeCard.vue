<template>
  <div
    class="
      text-white
      shadow-2xl
      w-full
      bg-secondary
      rounded-md
      p-4
      relative
    "
  >
  <div class="absolute w-44 -right-16">
      <img src="/icons/bike_icon.svg" alt="">
  </div>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-8 w-8"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      stroke-width="2"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
      />
    </svg>
    <div class="-space-y-8 mt-2 text-lg font-semibold">
      <p>Add Bike</p>
      <br />
      <p>to compare</p>
    </div>
    <div class="flex flex-col w-[70%] my-4 space-y-4">
      <slot name="select"></slot>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  mounted() {},
};
</script>


<style scoped>
>>> {
  --vs-controls-color: white;
  --vs-border-color: white;
  --vs-border-width: 1px;
  --vs-border-style: solid;

  --vs-dropdown-bg: #282c34;
  --vs-dropdown-color: white;
  --vs-dropdown-option-color: white;

  --vs-selected-bg: white;
  --vs-selected-color: white;

  --vs-search-input-color: white;

  --vs-dropdown-option--active-bg: white;
  --vs-dropdown-option--active-color: black;
}
</style>
