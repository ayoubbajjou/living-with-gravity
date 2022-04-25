<template>
  <user-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard User
      </h2>
    </template>

    <div class="py-12">
      <div
        class="
          max-w-7xl
          mx-auto
          sm:px-6
          lg:px-8
          flex
          items-center
          justify-between
        "
      >
        <div class="flex space-x-4 items-center">
          <div class="w-20 h-20 bg-gray-300 rounded-full">
            <img
              :src="$page.props.user.profile_photo_path"
              :alt="$page.props.user.name"
              class="rounded-full"
            />
          </div>
          <div class="text-white">
            <h3 class="text-2xl font-semibold">
              Welcome {{ $page.props.user.name }}
            </h3>
            <p>{{ $page.props.user.email }}</p>
            <p>{{ $page.props.user?.phone }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        User Activities
      </h1>
      <div class="bg-[#2F2F2F] px-8 pb-4 mt-4">
        <div class="flex items-center pb-8 text-center">
          <div
            class="
              w-32
              text-gray-200
              py-4
              font-bold
              rounded-br-lg
              cursor-pointer
            "
            :class="{ 'bg-secondary': activeTab === 'reviews' }"
            @click="toggleTab('reviews')"
          >
            <p
              class="text-2xl px-2 font-bold"
              :class="{ 'text-red-600': activeTab === 'reviews' }"
            >
              Reviews
            </p>
          </div>
          <div
            class="
              w-32
              text-gray-200
              py-4
              font-bold
              rounded-br-lg
              cursor-pointer
            "
            :class="{ 'bg-secondary': activeTab === 'questions' }"
            @click="toggleTab('questions')"
          >
            <p
              class="text-2xl px-2 font-bold"
              :class="{ 'text-red-600': activeTab === 'questions' }"
            >
              Q&A
            </p>
          </div>
        </div>

        <!-- reviews tab content -->
        <div
          v-if="activeTab === 'reviews'"
          class="space-y-3"
        >
          <template
            v-for="(review, index) in reviews"
            :key="index"
            :class="{ 'border-b border-white': reviews.length > 1 }"
          >
            <div class="bg-secondary px-4 rounded-md shadow-xl">
              <div class="text-white border-b border-gray-300 py-3">
                <h3 class="text-xl font-semibold">
                  {{ review.bike.series }} {{ review.bike.version_name }}
                </h3>
                <p>On: {{ datePosted(review.created_at) }}</p>
              </div>
              <div class="text-white py-6">
                <h3 class="text-lg font-semibold">
                  {{ review.title }}
                </h3>
                <p>{{ review.description }}</p>
              </div>
            </div>
          </template>
        </div>

        <!-- Questions tab content -->
        <div
          v-if="activeTab === 'questions'"
          class="space-y-3"
        >
          <template
            v-for="(question, index) in questions"
            :key="index"
            :class="{ 'border-b border-white': questions.length > 1 }"
          >
            <div class="bg-secondary px-4 rounded-md shadow-xl">
              <div class="text-white border-b border-gray-300 py-3">
                <h3 class="text-xl font-semibold">
                  {{ question.bike.series }} {{ question.bike.version_name }}
                </h3>
                <p>On: {{ datePosted(question.created_at) }}</p>
              </div>
              <div class="text-white py-6">
                <h3 class="text-xl font-semibold">
                  {{ question.question }}
                </h3>
                <p>Answer: {{ question.answer ?? 'N/A' }}</p>
              </div>
            </div>
          </template>
        </div>


      </div>
    </div>
  </user-layout>
</template>

<script>
import moment from "moment";
import { defineComponent } from "vue";
import UserLayout from "@/Layouts/UserLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";

export default defineComponent({
  components: {
    UserLayout,
    Welcome,
  },
  data() {
    return {
      activeTab: "reviews",
      reviews: [],
      questions: [],
    };
  },
  mounted() {
    this.reviews = this.$inertia.page.props.reviews;
    this.questions = this.$inertia.page.props.questions;
  },
  methods: {
    datePosted(date) {
      return moment(date).format("ll");
    },
    toggleTab(tab) {
      this.activeTab = tab;
    },
  },
});
</script>
