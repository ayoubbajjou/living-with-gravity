<template>
  <div class="w-full bg-[#333333] text-white px-8 rounded-lg py-8">
    <p class="font-semibold">{{review.title}}.</p>
    <p class="font-light">
      {{review.description}}
    </p>
    <div class="border-b-2 border-gray-200 py-4"></div>
    <div class="w-full py-4 text-sm">
        <p>{{review.user.name}} | {{datePosted(review.created_at)}} | 1807 Views</p>
    </div>
    <a :href="`${url}/reviews/${review.slug}`" class="text-red-600">Read more</a>
  </div>
</template>

<script>
import moment from "moment";

export default {
  props: {
    review: {
      type: Object,
      required: true
    },
    url: {
        type: String,
        required: true
    }
  },
  methods: {
    datePosted(date) {
      return moment(date).format("ll");
    },
  }
};
</script>

<style>
</style>
