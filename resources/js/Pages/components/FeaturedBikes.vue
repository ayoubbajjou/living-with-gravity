<template>
  <div class="bg-secondary">
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
        ml-6
        xl:ml-0
      "
    >
      Featured Bikes
    </h1>
    <div class="flex lg:space-x-12 mt-12 justify-center items-center">
      <div>
        <button type="button" @click="scrollBack()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-white cursor-pointer transform rotate-180"
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
      <div class="md:h-64 md:w-72 lg:h-72 lg:w-96 hidden lg:block">
        <img
          class="md:h-64 md:w-72 lg:h-72 lg:w-96"
          :src="`/images/featured/bike-${featuredImages[start][1]}.svg`"
          width="576"
          height="480"
          alt=""
        />
      </div>
      <div>
        <div
          class="w-64 h-full md:h-72 md:w-96 lg:h-96 lg:w-120 xl:w-168 xl:h-120"
        >
          <img
            class="
              w-64
              h-full
              md:h-72 md:w-96
              lg:h-96 lg:w-120
              xl:w-168 xl:h-120
            "
            :src="`/images/featured/bike-${featuredImages[start][0]}.svg`"
            width="791"
            height="494"
            alt=""
          />
        </div>
      </div>
      <div class="d:h-64 md:w-72 lg:h-72 lg:w-96 hidden lg:block">
        <img
          class="d:h-64 md:w-72 lg:h-72 lg:w-96"
          :src="`/images/featured/bike-${featuredImages[start][2]}.svg`"
          width="576"
          height="480"
          alt=""
        />
      </div>
      <div>
        <button type="button" @click="scrollNext()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-white cursor-pointer"
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
    <div
      class="flex items-center justify-center space-y-3 flex-col"
    >
      <p class="text-5xl text-white uppercase font-bold italic">
        {{ bikesDetails[start].title }}
      </p>
      <p class="text-red-600 text-3xl">
        {{ bikesDetails[start].price }}
      </p>
      <a
        :href="bikesDetails[start].url"
        class="bg-icon-button text-white px-6 py-3 rounded-r"
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
            d="M17 8l4 4m0 0l-4 4m4-4H3"
          />
        </svg>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "FeaturedBikes",
  data() {
    return {
      start: 0,
      featuredImages: [
        [1, 2, 3, 4, 5],
        [2, 3, 4, 5, 1],
        [3, 4, 5, 2, 1],
        [4, 5, 1, 2, 3],
        [5, 4, 3, 2, 1],
      ],
      bikesDetails: [
        {
          id: 314,
          title: "BMW M1000RR",
          price: null,
          url: "https://bike.livingwithgravity.com/BMW/bmw-m-1000-rr/Competition",
        },
        {
          id: 336,
          title: "DUCATI PANIGALE V4",
          price: null,
          url: "https://bike.livingwithgravity.com/Ducati/ducati-panigale-v4/Standar",
        },
        {
          id: 398,
          title: "Kawasaki Ninja H2R",
          price: null,
          url: "https://bike.livingwithgravity.com/Kawasaki/ninja/Standard",
        },
        {
          id: 292,
          title: "Aprilia RSV4 1100 Factory",
          price: null,
          url: "https://bike.livingwithgravity.com/Aprilia/aprilia-rsv4-1100-factory/Standard",
        },
        {
          id: 328,
          title: "BMW F900XR",
          price: null,
          url: "https://bike.livingwithgravity.com/BMW/bmw-f900xr/Pro",
        },
      ],
    };
  },
  mounted() {
    this.bikesDetails.map((bike) => {
      const city_id = localStorage.getItem("citySelectedId");
      axios
        .get(
          `https://sleeplikecat.com/bikewale/index.php/api/getprice?bike_id=${bike.id}&city_id=${city_id}`
        )
        .then((res) => {
          var price = res.data.data?.price?.[0]?.amount
          bike.price = price === undefined ? res.data.message :  "₹ " + this.priceFormat(price)

        })
        .catch((err) => {
          console.log(err);
        });
    });
  },
  methods: {
    priceFormat(price) {
      return new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(price);
    },
    scrollNext() {
      if (this.start === 4) {
        this.start = 0;
      } else {
        this.start++;
      }
    },
    scrollBack() {
      if (this.start === 0) {
        this.start = 4;
      } else {
        this.start--;
      }
    },
  },
};
</script>

<style>
</style>