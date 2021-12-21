<template>
  <!-- Susbcribe section -->
  <div
    class="
      lg:w-full lg:flex
      justify-around
      items-center
      py-6
      space-y-4
      lg:space-y-0
      bg-gradient-to-r
      from-[#f84270]
      to-[#fe803b]
    "
  >
    <jet-application-logo class="block h-20 mx-auto md:mx-0 w-auto" />
    <div class="flex items-center mx-4">
      <input
        class="
          w-full
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
      <button class="text-white uppercase bg-secondary rounded-r px-4 lg:px-12 py-4">
        Subscribe
      </button>
    </div>
  </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default {
  name: "Subscribe",
  components: {
    JetApplicationLogo,
  },
};
</script>

<style>
</style>