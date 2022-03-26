<template>
  <div class="flex text-white space-x-1 items-center">
    <span class="w-3 text-center">{{ rate }}</span>
    <StarIcon class="w-4 mx-auto" />
    <div v-if="percentage" class="w-full flex justify-between items-center space-x-2">
      <div
        class="h-1.5 rounded-md bg-[#FFC107]"
        :style="`width: ${percentage}`"
      ></div>
      <p>{{ percentage }}</p>
    </div>
  </div>
</template>

<script>
import StarIcon from "./StarIcon.vue";

export default {
  name: "RatingItem",
  props: {
    rate: {
      type: Number,
      required: true,
    },
    percentage: {
      type: String,
    },
  },
  components: {
    StarIcon,
  },
};
</script>

<style>
</style>