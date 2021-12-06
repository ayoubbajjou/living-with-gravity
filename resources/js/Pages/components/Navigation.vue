<template>
  <div class="bg-secondary px-8 py-5 mx-auto sm:max-w-xl md:max-w-full md:px-24">
    <div
      class="
        w-full
        relative
        max-w-screen-xl
        mx-auto
        grid
        items-center
        grid-cols-2
        lg:grid-cols-3
      "
    >
      <ul class="flex items-center space-x-8 lg:flex">
        <div class="flex items-center mt-4 space-x-4 sm:mt-0">
          <a
            href="/"
            class="
              text-gray-500
              transition-colors
              duration-300
              hover:text-teal-accent-400
            "
          >
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
              <path
                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
              ></path>
            </svg>
          </a>
          <a
            href="/"
            class="
              text-gray-500
              transition-colors
              duration-300
              hover:text-teal-accent-400
            "
          >
            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
              <circle cx="15" cy="15" r="4"></circle>
              <path
                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
              ></path>
            </svg>
          </a>
          <a
            href="/"
            class="
              text-gray-500
              transition-colors
              duration-300
              hover:text-teal-accent-400
            "
          >
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
              <path
                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
              ></path>
            </svg>
          </a>
        </div>
      </ul>
      <a
        href="/"
        aria-label="Company"
        title="Company"
        class="inline-flex items-center lg:mx-auto"
      >
        <jet-application-logo class="block h-20 w-auto" />
      </a>
      <div class="flex items-center justify-between">
        <input
          type="text"
          placeholder="Search Keyword"
          class="
            w-full
            lg:w-2/3 lg:ml-28
            bg-transparent
            border-b-2 border-t-0 border-l-0 border-r-0
            focus:outline-none
            border-gray-100
            py-3
            px-2
            outline-none
          "
        />
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 text-white"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg>
      </div>
    </div>
  </div>

  <div
    class="
      w-full
      bg-gradient-to-r
      from-[#f84270]
      to-[#fe803b]
      px-4
      py-5
      lg:mx-auto
      sm:max-w-xl
      md:max-w-full md:px-24
    "
  >
    <div class="relative flex items-center justify-between">
      <div class="flex items-center">
        <ul class="flex items-center hidden space-x-14 lg:flex">
          <li>
            <a
              href="/"
              aria-label="Bikes"
              title="Bikes"
              class="
                font-bold
                uppercase
                space-x-4
                tracking-wide
                flex
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
              >Bikes
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
                  d="M19 9l-7 7-7-7"
                /></svg
            ></a>
          </li>
          <li>
            <a
              href="/"
              aria-label="Bikes Finance"
              title="Bikes Finance"
              class="
                font-bold
                uppercase
                space-x-4
                tracking-wide
                flex
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
              >Bikes Finance

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
                  d="M19 9l-7 7-7-7"
                /></svg
            ></a>
          </li>
          <li>
            <a
              href="/"
              aria-label="Compare"
              title="Compare"
              class="
                font-bold
                uppercase
                space-x-4
                flex
                tracking-wide
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
              >Compare
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
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </a>
          </li>
          <li>
            <a
              href="/"
              aria-label="News & Reviews"
              title="News & Reviews"
              class="
                font-bold
                uppercase
                space-x-4
                tracking-wide
                flex
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
              >News & Reviews
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
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </a>
          </li>
          <li>
            <a
              href="/"
              aria-label="More"
              title="More"
              class="
                font-bold
                uppercase
                space-x-4
                tracking-wide
                flex
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
            >
              More
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
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </a>
          </li>
          <li>
            <a
              href="/"
              aria-label="contact us"
              title="contact us"
              class="
                font-bold
                uppercase
                space-x-4
                tracking-wide
                flex
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
            >
              Contact
            </a>
          </li>
          <li>
            <a
              href="/"
              aria-label="About us"
              title="About us"
              class="
                font-bold
                uppercase
                space-x-4
                tracking-wide
                flex
                text-gray-100
                transition-colors
                duration-200
                hover:text-deep-purple-accent-400
              "
            >
              About
            </a>
          </li>
        </ul>
      </div>
      <ul class="items-center hidden space-x-8 lg:flex">
        <li
          @click="selectCity = !selectCity"
          class="
            flex
            border-l-4
            items-center
            justify-center
            h-12
            px-6
            font-bold
            uppercase
            tracking-wide
            text-white
            transition
            duration-200
            bg-deep-purple-accent-400
            hover:bg-deep-purple-accent-700
            focus:shadow-outline focus:outline-none
            cursor-pointer
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-red-500 mr-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
            />
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
            />
          </svg>

          <span
            class="
              flex
              items-center
              justify-center
              h-12
              px-6
              font-medium
              uppercase
              tracking-wide
              text-white
              transition
              duration-200
              bg-deep-purple-accent-400
              hover:bg-deep-purple-accent-700
              focus:shadow-outline focus:outline-none
            "
            >{{ cityName }}</span
          >
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
              d="M19 9l-7 7-7-7"
            />
          </svg>
        </li>
      </ul>
      <div class="lg:hidden">
        <button
          aria-label="Open Menu"
          title="Open Menu"
          class="
            p-2
            -mr-1
            transition
            duration-200
            rounded
            focus:outline-none focus:shadow-outline
            hover:bg-deep-purple-50
            focus:bg-deep-purple-50
          "
          @click="isMenuOpen = true"
        >
          <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
            <path
              fill="currentColor"
              d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"
            ></path>
            <path
              fill="currentColor"
              d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"
            ></path>
            <path
              fill="currentColor"
              d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"
            ></path>
          </svg>
        </button>
        <div v-if="isMenuOpen" class="absolute top-0 left-0 w-full">
          <div class="relative z-50 p-5 bg-secondary border rounded shadow-sm">
            <div class="text-xl text-white font-bold flex justify-end" @click="isMenuOpen = !isMenuOpen">x</div>
            <nav>
              <ul class="space-y-4">
                <li>
                  <a
                    href="/"
                    aria-label="Bikes"
                    title="Bikes"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      tracking-wide
                      flex
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >Bikes
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
                        d="M19 9l-7 7-7-7"
                      /></svg
                  ></a>
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="Bikes Finance"
                    title="Bikes Finance"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      tracking-wide
                      flex
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >Bikes Finance

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
                        d="M19 9l-7 7-7-7"
                      /></svg
                  ></a>
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="Compare"
                    title="Compare"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      flex
                      tracking-wide
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >Compare
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
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="News & Reviews"
                    title="News & Reviews"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      tracking-wide
                      flex
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >News & Reviews
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
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="More"
                    title="More"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      tracking-wide
                      flex
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                  >
                    More
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
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="contact us"
                    title="contact us"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      tracking-wide
                      flex
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                  >
                    Contact
                  </a>
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="About us"
                    title="About us"
                    class="
                      font-medium
                      uppercase
                      space-x-4
                      tracking-wide
                      flex
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                  >
                    About
                  </a>
                </li>
              </ul>
              <!-- <ul class="space-y-4">
                <li>
                  <a
                    href="/"
                    aria-label="Our product"
                    title="Our product"
                    class="
                      font-medium
                      uppercase
                      tracking-wide
                      flex
                      w-full
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >Bikes</a
                  >
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="Our product"
                    title="Our product"
                    class="
                      font-medium
                      uppercase
                      tracking-wide
                      flex
                      w-full
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >Features</a
                  >
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="Product pricing"
                    title="Product pricing"
                    class="
                      font-medium
                      uppercase
                      tracking-wide
                      flex
                      w-full
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >Pricing</a
                  >
                </li>
                <li>
                  <a
                    href="/"
                    aria-label="About us"
                    title="About us"
                    class="
                      font-medium
                      uppercase
                      tracking-wide
                      flex
                      w-full
                      text-gray-100
                      transition-colors
                      duration-200
                      hover:text-deep-purple-accent-400
                    "
                    >About us</a
                  >
                </li>
              </ul> -->
            </nav>
          </div>
        </div>
      </div>
    </div>
    <city-modal v-if="selectCity" @city-selected="citySelected()"></city-modal>
  </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import CityModal from "./CityModal.vue";

export default {
  components: {
    JetApplicationLogo,
    CityModal,
  },
  data() {
    return {
      isMenuOpen: false,
      selectCity: false,
      cityName: localStorage.getItem("citySelectedName"),
    };
  },
  mounted() {
    const citySelectedName = localStorage.getItem("citySelectedName");
    const citySelectedId = localStorage.getItem("citySelectedId");

    if (!citySelectedName) {
      localStorage.setItem("citySelectedName", "Bangalore");
    }
    if (!citySelectedId) {
      localStorage.setItem("citySelectedId", 1);
    }
  },
  methods: {
    citySelected() {
      this.cityName = localStorage.getItem("citySelectedName");
    },
  },
};
</script>