<template>
  <!-- Susbcribe section -->
  <div
    class="
      flex
      justify-around
      items-center
      py-6
      bg-gradient-to-r
      from-red-300
      to-yellow-600
    "
  >
    <jet-application-logo class="block h-20 w-auto" />
    <div class="flex items-center">
      <input
        class="
          relative
          rounded-l
          py-4
          px-12
          bg-white
          opacity-50
          border-none
          placeholder-gray-400
        "
        type="email"
        placeholder="Your email"
      />
      <button class="text-white uppercase bg-gray-800 rounded-r px-12 py-4">
        Subscribe
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Subscribe",
};
</script>

<style>
</style>