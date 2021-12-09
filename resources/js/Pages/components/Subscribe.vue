<template>
  <!-- Susbcribe section -->
  <div
    class="
      lg:w-full
      flex
      justify-around
      items-center
      py-6
      bg-gradient-to-r
      from-[#f84270]
      to-[#fe803b]
    "
  >
    <jet-application-logo class="block h-20 w-auto" />
    <div class="flex items-center">
      <input
        class="
          relative
          rounded-l
          py-4
          px-4
          md:px-12
          bg-white
          opacity-50
          border-none
          placeholder-gray-400
        "
        type="email"
        placeholder="Your email"
      />
      <button class="text-white uppercase bg-secondary rounded-r px-12 py-4">
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