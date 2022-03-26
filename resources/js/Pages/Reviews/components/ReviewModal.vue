<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <TransitionRoot as="template" :show="open">
    <Dialog
      as="div"
      class="fixed z-10 inset-0 overflow-y-auto"
      @close="open = false"
    >
      <div
        class="
          flex
          items-end
          justify-center
          min-h-screen
          pt-4
          px-4
          pb-20
          text-center
          sm:block sm:p-0
        "
      >
        <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in duration-200"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
          />
        </TransitionChild>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span
          class="hidden sm:inline-block sm:align-middle sm:h-screen"
          aria-hidden="true"
          >&#8203;</span
        >
        <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          enter-to="opacity-100 translate-y-0 sm:scale-100"
          leave="ease-in duration-200"
          leave-from="opacity-100 translate-y-0 sm:scale-100"
          leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
          <div
            class="
              inline-block
              align-bottom
              bg-secondary
              rounded-2xl
              text-left
              overflow-hidden
              shadow-xl
              transform
              transition-all
              sm:my-8 sm:align-middle
              md:w-4/5
              xl:w-3/5
              2xl:w-2/5
              h-144
            "
          >
            <div class="h-full text-center sm:text-left">
              <div class="flex items-center justify-between">
                <DialogTitle
                  as="h3"
                  class="
                    pt-4
                    pb-2
                    px-12
                    text-lg
                    leading-6
                    font-medium
                    text-white
                  "
                >
                  Write a review for {{ bike?.series }} -
                  {{ bike?.version_name }}
                </DialogTitle>
                <div
                  class="
                    absolute
                    top-0
                    right-0
                    h-12
                    w-12
                    bg-red-500
                    mx-auto
                    cursor-pointer
                  "
                  @click="open = false"
                  ref="cancelButtonRef"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    class="m-3 cursor-pointer"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                  >
                    <image
                      id="Layer_24"
                      data-name="Layer 24"
                      width="22"
                      height="22"
                      xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABHNCSVQICAgIfAhkiAAAAgxJREFUOE+llMtOFEEYRoeFK1DgAVwJCiEGVGDLA7DxAmiAPZGoIfFZXIAKJKBE3oEXAARNvABy0TcwATRIMvGcpIoUTffMOHZy0pepPvP3V39VQ7lcXimVSo3wGDbhf44mXn4BAw2IP3HRBZ9hHD7UaW7mvZcwDL8Vd3PxJsj3OT+CtX+UtzL+FdyHI3iiWMcdeAvX4VuofLVGuZW+hgfwR6mVR7GO/iC/xnk7VF4tFjOdg6FUqiwVZyv/woNR+FhQ+RWez8BD+AVTVhrHZsU+74FFcEJ3gzybuZkqtdJjeAazaQF5Yn+/DUtg5jtgt0S5lZpp/PzJcH/uw4rEDkoz3+LeNvoOMdMTrp0ou+HCUUkcK7dbboD9/gMG4UKmWXM1seNvhiptSY+fYKYLeZXGZ7WILzF4Ge6Gl4zjHlRsxWpim98MnajDUO1Vzl9hDAr3lkridJma6UTI2W7pgD1w+a/nRVIkvsxgW8pOcJma6XQQ9HK2z51QW9FF9D4rzxO7TF1BVmNLPQ336bt93LhxtYdY7PONdEBW3MKPZuqG4oqyT+fzPpVnrtB34CKyz838TJ6Ks5kqdTFUOpTb551wLvModpm61q30NHx+zLSKu2QsZh63XDNfV+xE+fkjUJRpLXIrbwN3xTHFToL/4s7v1mc31HPcCrHYiluKD7gwiucwX48xeUe5hfX8Bbxus81gOnIDAAAAAElFTkSuQmCC"
                    />
                  </svg>
                </div>
              </div>
              <div class="bg-[#2F2F2F] flex justify-between w-full h-full">
                <!-- left side -->
                <div class="w-1/3 h-full">
                  <img
                    :src="bike?.images[0].image_link"
                    :alt="bike?.series"
                    class="w-full h-full object-cover"
                    loading="lazy"
                  />
                </div>

                <!-- right side -->
                <div class="w-2/3 px-8">
                  <div class="py-4 rounded-lg bg-secondary my-4 px-4">
                    <p class="text-lg font-bold text-white uppercase">
                      <span class="text-red-500">*</span>Rate on Basis of
                    </p>

                    <div
                      class="
                        flex
                        items-center
                        justify-between
                        text-white text-center
                        py-6
                      "
                    >
                      <div>
                        <p>Mileage</p>
                        <star-rating
                          :rounded-corners="true"
                          :show-rating="false"
                          inactive-color="#333333"
                          border-color="#EAEDF1"
                          :border-width="1"
                          :star-size="18"
                          v-model:rating="mileageRate"
                        ></star-rating>
                      </div>
                      <div>
                        <p>Safety</p>
                        <star-rating
                          :rounded-corners="true"
                          :show-rating="false"
                          inactive-color="#333333"
                          border-color="#EAEDF1"
                          :border-width="1"
                          :star-size="18"
                          v-model:rating="safetyRate"
                        ></star-rating>
                      </div>
                      <div>
                        <p>Pricing</p>
                        <star-rating
                          :rounded-corners="true"
                          :show-rating="false"
                          inactive-color="#333333"
                          border-color="#EAEDF1"
                          :border-width="1"
                          :star-size="18"
                          v-model:rating="pricingRate"
                        ></star-rating>
                      </div>
                    </div>
                    <div
                      class="flex items-center justify-around px-10 text-white"
                    >
                      <div>
                        <p>Performance</p>
                        <star-rating
                          :rounded-corners="true"
                          :show-rating="false"
                          inactive-color="#333333"
                          border-color="#EAEDF1"
                          :border-width="1"
                          :star-size="18"
                          v-model:rating="performanceRate"
                        ></star-rating>
                      </div>
                      <div>
                        <p>Design & Styling</p>
                        <star-rating
                          :rounded-corners="true"
                          :show-rating="false"
                          inactive-color="#333333"
                          border-color="#EAEDF1"
                          :border-width="1"
                          :star-size="18"
                          v-model:rating="designRate"
                        ></star-rating>
                      </div>
                    </div>
                  </div>
                  <div class="rounded-lg border border-gray-100 p-4 space-y-3">
                    <input
                      type="text"
                      class="
                        focus:outline-none
                        focus:border-b
                        focus:border-gray-100
                        focus:ring-none
                        focus:ring-0
                        ring-0
                        border-t-0 border-r-0 border-l-0
                        w-full
                        bg-transparent
                        outline-none
                        text-white
                      "
                      placeholder="Give a Title to your review *"
                    />
                    <textarea
                      cols="20"
                      rows="4"
                      class="
                        bg-transparent
                        w-full
                        focus:outline-none focus:border-none
                        border-none
                        ring-0
                        focus:ring-none focus:ring-0
                        text-white
                      "
                      placeholder="Write your riview about the product *"
                    ></textarea>
                  </div>
                  <div class="flex justify-end mt-4 mb-8">
                    <button
                      class="
                        text-white
                        px-3
                        py-2
                        uppercase
                        shadow-md
                        font-semibold
                        text-md
                        bg-button
                        rounded-l-lg
                      "
                    >
                      Submit Review
                    </button>
                    <button class="bg-icon-button text-white px-3 rounded-r-lg">
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
            </div>
          </div>
        </TransitionChild>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import {
  Dialog,
  DialogOverlay,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import StarRating from "vue-star-rating";

export default {
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    StarRating,
  },
  props: {
    bike: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      open: true,
      mileageRate: 0,
      safetyRate: 0,
      pricingRate: 0,
      performanceRate: 0,
      designRate: 0,
    };
  },
  mounted() {},
  methods: {},
};
</script>