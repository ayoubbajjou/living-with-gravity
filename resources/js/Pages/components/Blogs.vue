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
        mt-12
        ml-6
        lg:ml-0
      "
    >
      News/Blogs
    </h1>
    <div class="mt-12 bg-secondary">
      <div v-if="posts.length" class="lg:flex justify-between space-y-4 lg:space-y-0 px-4 lg:ml-0 lg:space-x-12">
        <div v-for="post in posts" :key="post.id" class="relative">
          <a :href="post.link">
            <img
              class="opacity-50"
              style="height: 360px !important; width: 600px !important"
              :src="post.thumb"
              :alt="post.title.rendered"
            />
            <div class="absolute inset-x-0 max-w-xl bottom-0 px-6 py-4">
              <h2 class="text-white font-bold text-xl mb-2">
                {{ post.title.rendered }}
              </h2>
              <!-- <p class="text-red-600">Aditiya Chatterjee</p> -->
              <p class="text-white text-sm">
                Published: {{ this.datePosted(post.date) }}
              </p>
            </div>
          </a>
        </div>
      </div>

      <div v-else class="lg:flex justify-between space-y-4 lg:space-y-0 lg:space-x-12">
        <div class="flex justify-center items-center bg-[#2F2F2F]" style="height: 360px !important; width: 600px !important">
          <svg
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
        </div>
        <div class="flex justify-center items-center bg-[#2F2F2F]" style="height: 360px !important; width: 600px !important">
          <svg
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
        </div>
      </div>

        <a
          class="flex justify-center lg:justify-end mt-8 mb-8 lg:mt-16"
          href="https://livingwithgravity.com/category/news/"
          target="_blank"
        >
          <button
            class="
              text-white
              px-12
              py-4
              uppercase
              shadow-md
              font-bold
              text-xl
              bg-button
              rounded-l
            "
          >
            Show more
          </button>
          <button class="bg-icon-button text-white px-6 py-3 rounded-r">
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
</template>

<script>
import moment from "moment";
export default {
  name: "Blogs",
  data() {
    return {
      posts: [],
    };
  },
  mounted() {
    //check if past expiration date
    var date = localStorage.getItem('fetchedDate')
    if(localStorage.getItem("posts")) {
      if (date < new Date()) {
          localStorage.removeItem('posts');
          localStorage.removeItem('fetchedDate');
      }else {
        this.posts = JSON.parse(localStorage.getItem("posts"))
      }
    }else {
      this.getWpPosts()
    }
  },
  methods: {
    datePosted(date) {
      return moment(date).format("ll");
    },
    async getWpPosts() {
      await axios.get('/get-wp-posts')
        .then(res => {
          this.posts = res.data
          localStorage.setItem('posts', JSON.stringify(res.data));

          var fourHours = new Date();
          fourHours.setHours(fourHours.getHours() + 4); //4 Hours from now
          localStorage.setItem('fetchedDate', fourHours);
        })
        .catch(err => {
          console.log(err)
        })
    }
  }
};
</script>

<style>
</style>