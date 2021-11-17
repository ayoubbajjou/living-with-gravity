<template>
  <div class="bg-gray-800">
      <h1
        class="
          text-white
          border-b-4
          w-max
          ml-64
          border-red-600
          text-4xl
          uppercase
          font-bold
          italic
        "
      >
        News/Blogs
      </h1>
      <div class="mx-auto px-64 mt-12 bg-gray-800">
        <div class="flex justify-between space-x-12">
          
          <div v-for="post in posts" :key="post.id" class="relative">
            <a :href="post.link">
                <img
                class="opacity-50"
                style="
                    height: 320px !important;
                    width: 600px !important;
                "
                :src="post.thumb"
                :alt="post.title.rendered"
                />
                <div class="absolute inset-x-0 bottom-0 px-6 py-4">
                <h2 class="text-white font-bold text-xl mb-2">
                    {{ post.title.rendered }}
                </h2>
                <p class="text-white font-bold text-xl">{{datePosted(post.date)}}</p>
                <!-- <p class="text-red-600">Aditiya Chatterjee</p> -->
                <p class="text-white text-sm">
                    Published: {{dateTimePosted(post.date)}} IST
                </p>
                </div>
            </a>
          </div>

          <!-- <div class="relative">
            <img
              class="opacity-50"
              style="
                height: 320px !important;
                width: 600px !important;
                filter: grayscale(100%);
              "
              src="https://images.unsplash.com/photo-1558981285-6f0c94958bb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1770&q=80"
              alt="moto"
            />
            <div class="absolute inset-x-0 bottom-0 px-6 py-4">
              <p class="text-white text-lg mb-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <p class="text-white">February 9, 2021</p>
              <p class="text-red-600">Aditiya Chatterjee</p>
              <p class="text-white font-light text-sm">
                Published: February 9, 2021 12PM IST
              </p>
            </div>
          </div> -->
        </div>

        <div class="flex items-center justify-end mt-8 py-8">
          <a class="flex items-center" href="https://livingwithgravity.com/category/news/" target="_blank">
            <button
              class="
                text-white
                px-12
                py-4
                uppercase
                shadow-md
                font-bold
                text-base
                bg-gray-900
                rounded-l
              "
            >
              Show more
            </button>
            <button class="bg-red-600 text-white px-6 py-4 rounded-r">
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
          </a>
          
        </div>
      </div>
    </div>
</template>

<script>
import moment from 'moment'
export default {
    name: 'Blogs',
    data() {
        return {
            posts: []
        }
    },
    methods: {
      datePosted(date) {
        return moment(date).format('LL')
      },
      dateTimePosted(date) {
        return moment(date).format('LLL')
      }
    },
    mounted() {
        this.posts = this.$page.props.postsData
    }
}
</script>

<style>

</style>