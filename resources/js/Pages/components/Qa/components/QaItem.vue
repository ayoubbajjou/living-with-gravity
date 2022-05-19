<template>
  <div class="space-y-3 py-3 cursor-pointer" @click="collapse">
    <div class="flex items-center justify-between">
      <p class="font-medium text-white">
        {{ question.question }}
      </p>
      <svg
        v-if="toggled"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="15"
        height="8"
        viewBox="0 0 15 8"
      >
        <image
          width="15"
          height="8"
          xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAICAYAAAAm06XyAAAABHNCSVQICAgIfAhkiAAAAJpJREFUGFdj/P//PwMOkAsUdwPiYiC+hU0NIw7NfkDFc4FYBIjXAnEKEH9ANwCb5iCgollALIykeDOQnQzEr5ENQNccDtXIh8WZO4BiCUD8EiaHrDkOKDgFiHlxBQJQfDfUgGcgNTDNiUD2ZCDmxqMRJnUIyABZ9BCkOQfImADEzERohCk5AWS0gzQ/BDLkgPgfkZoZQS4G4qMA1h8uA09JpywAAAAASUVORK5CYII="
        />
      </svg>
      <svg
        v-else
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="15"
        height="8"
        viewBox="0 0 15 8"
      >
        <image
          id="Layer_13_copy_5"
          data-name="Layer 13 copy 5"
          width="15"
          height="8"
          xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAICAYAAAAm06XyAAAABHNCSVQICAgIfAhkiAAAAJ9JREFUGFdj/P///xEGBgZrIP4PxUCKIGACqnjECNTsB2RUArEFQS0IBX+BzAKQZpCQPBAvAmI7Igz4ClSTC8TzYZpBeqSAeAEQu+Ix4DNQLgdqEQOyZpAecagBHlgM+AQUSwPilTA5dM0gcVEgngvEvkgGvIVqXIdsKDbNIHkBIJ4DxMFA/AaIk4F4E7prcGkGqVMD4l4g3gXEk7GFAwB7uC8+aAyd5QAAAABJRU5ErkJggg=="
        />
      </svg>
    </div>
    <p v-show="toggled" class="font-light text-sm text-white">
      {{ question.answer }}
    </p>
    <div class="border-b border-gray-200 py-3"></div>
  </div>
</template>

<script>
export default {
  props: {
    question: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      toggled: false,
    };
  },
  methods: {
    collapse() {
      this.toggled = !this.toggled;
    },
  },
};
</script>

<style>
</style>
