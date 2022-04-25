<template>
  <TransitionRoot as="template" :show="open">
    <Dialog
      as="div"
      class="fixed inset-0 overflow-hidden"
      @close="open = false"
    >
      <div class="absolute inset-0 overflow-hidden">
        <TransitionChild
          as="template"
          enter="ease-in-out duration-500"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in-out duration-500"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay
            class="
              absolute
              inset-0
              bg-gray-500 bg-opacity-75
              transition-opacity
            "
          />
        </TransitionChild>
        <div
          class="
            pointer-events-none
            fixed
            inset-y-0
            right-0
            flex
            max-w-full
            pl-10
          "
        >
          <TransitionChild
            as="template"
            enter="transform transition ease-in-out duration-500 sm:duration-700"
            enter-from="translate-x-full"
            enter-to="translate-x-0"
            leave="transform transition ease-in-out duration-500 sm:duration-700"
            leave-from="translate-x-0"
            leave-to="translate-x-full"
          >
            <div class="pointer-events-auto relative w-screen max-w-md">
              <TransitionChild
                as="template"
                enter="ease-in-out duration-500"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="ease-in-out duration-500"
                leave-from="opacity-100"
                leave-to="opacity-0"
              >
                <div
                  class="
                    absolute
                    top-0
                    right-0
                    mr-3
                    flex
                    pt-4
                    pr-2
                    sm:-ml-10 sm:pr-4
                  "
                >
                  <button
                    type="button"
                    class="
                      rounded-md
                      text-gray-300
                      hover:text-white
                      focus:outline-none focus:ring-0 focus:ring-white
                    "
                    @click="close"
                  >
                    <span class="sr-only">Close panel</span>
                    <XIcon class="h-8 w-8" aria-hidden="true" />
                  </button>
                </div>
              </TransitionChild>
              <div
                class="
                  flex
                  h-full
                  flex-col
                  overflow-y-scroll
                  bg-secondary
                  py-6
                  shadow-xl
                "
              >
                <div class="px-4 sm:px-6">
                  <DialogTitle>
                    <h1
                      class="
                        text-white
                        border-b-4
                        w-max
                        border-red-600
                        text-3xl
                        uppercase
                        font-bold
                        italic
                        mt-12
                        ml-6
                        lg:ml-0
                      "
                    >
                      Login
                    </h1>
                  </DialogTitle>
                </div>
                <div class="relative mt-6 flex-1 px-4 sm:px-6">
                  <!-- Replace with your content -->
                  <div class="absolute inset-0 px-4 sm:px-6">
                    <p class="text-md text-gray-200">Login with</p>
                    <div
                      class="
                        w-full
                        flex
                        items-center
                        justify-start
                        space-x-8
                        py-6
                        mx-auto
                      "
                    >
                      <a :href="`/auth/facebook?section=${section}`">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 48 48"
                          width="75px"
                          height="75px"
                        >
                          <path
                            fill="#039be5"
                            d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"
                          />
                          <path
                            fill="#fff"
                            d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"
                          />
                        </svg>
                      </a>
                      <h1 class="text-3xl text-gray-100 font-bold">OR</h1>
                      <a :href="`/auth/google?section=${section}`">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 48 48"
                          width="75px"
                          height="75px"
                        >
                          <path
                            fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"
                          />
                          <path
                            fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"
                          />
                          <path
                            fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"
                          />
                          <path
                            fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"
                          />
                        </svg>
                      </a>
                    </div>
                    <p class="text-xs text-gray-50 font-light w-3/4">
                        <input type="checkbox" :checked="true" class="checked:bg-green-500 rounded-md checked:border-transparent mr-1" :disabled="true">
                      By logging in you're agree to the term of use and privacy
                      policy.
                    </p>
                  </div>
                  <!-- /End replace -->
                </div>
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import { defineComponent } from "vue";
import {
  Dialog,
  DialogOverlay,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import { XIcon } from "@heroicons/vue/outline";

export default defineComponent({
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    XIcon,
  },
  props: {
      section: {
          type: String,
          default: 'review'
      }
  },
  data() {
    return {
      open: true
    }
  },
  methods: {
    close() {
      this.$emit('close')
      this.open = false
    }
  }
});
</script>
