<template>
  <div class="bg-secondary mb-6">
    <h1
      class="
        text-white
        border-b-4
        w-max
        border-red-600
        text-2xl
        lg:text-3xl
        uppercase
        font-bold
        italic
        ml-6
        xl:ml-0
      "
    >
      Q&A
    </h1>

    <div id="questions" class="w-full my-8">
      <h1 class="text-center text-4xl font-semilight text-white">
        Questions? Ask here.
      </h1>
      <div>
        <div
          v-if="$page.props.user && !$page.props?.user?.is_admin"
          class="px-24 py-4"
          :class="{ 'flex items-center ': $page.props.user && !$page.props?.user?.is_admin }"
        >
          <input
            v-model="question"
            required="true"
            type="text"
            placeholder="Ask anything & get answer in 48 hours"
            class="
              text-center
              relative
              w-full
              text-gray-100
              bg-transparent
              border-b-2 border-t-0 border-l-0 border-r-0 border-gray-100
              outline-none
              focus:outline-none
              active:outline-none
              focus:ring-0
              active:ring-0
            "
            :class="{'border-red-500': questionInputError}"
          />
          <button
            @click="askQuestion"
            class="
              absolute
              right-[16%]
              mb-6
              bg-icon-button
              text-white
              px-3
              py-3
              rounded-lg
            "
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
          </button>
        </div>
        <div v-if="questionSent" class="w-full">
            <p class="flex items-center justify-center italic mx-auto w-full text-green-500">We will notify once your question is answered.</p>
        </div>
        <div @click="writeQuestion" class="flex items-start justify-center mt-3" v-if="!$page.props.user && !$page.props?.user?.is_admin">
          <button
            class="
              text-white
              px-3 py-2
              uppercase
              shadow-md
              font-semibold
              text-md
              bg-button
              rounded-l-lg
            "
          >
            Ask Question?
          </button>
          <button class="bg-icon-button text-white px-3 py-2 rounded-r-lg">
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
        <div class="bg-[#2F2F2F] px-8 pb-4 mt-4">
          <div class="flex items-center pb-8 text-center">
            <div class="w-24 py-4 px-2 font-bold bg-secondary rounded-br-lg">
              <p class="text-red-600 font-bold">LATEST</p>
            </div>
          </div>

          <div>
            <template v-for="(question, index) in questions" :key="index">
              <QaItem :question="question" />
            </template>
          </div>

          <a class="flex justify-center mt-8 mb-8" :href="`${url}/questions`">
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
              View all
              <i>{{ bike?.series }} - {{ bike?.version_name }}</i> Q&A's
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
          </a>
        </div>
      </div>
    </div>
    <Login v-if="isModalOpened" section="question" @close="isModalOpened = false"/>
  </div>
</template>

<script>
import QaItem from "./components/QaItem.vue";
import Login from "../../Auth/LoginSlide.vue";

export default {
  name: "Qa",
  components: {
    QaItem,
    Login
  },
  props: {
    bike: {
      type: Object,
      required: true,
    },
    url: {
        type: String,
        required: true
    }
  },
  data() {
    return {
      qaData: 4,
      question: null,
      questions: [],
      isModalOpened: false,
      questionSent: false,
      questionInputError: false
    };
  },
  mounted() {
    this.getQuestions();

    let params = new URLSearchParams(document.location.search);
    const section = params.get("section");
    if(section === 'questions') {
        var scrollDiv = document.getElementById(section).offsetTop;
        window.scrollTo({ top: scrollDiv + 900, behavior: 'smooth'});
    }
  },
  methods: {
    async getQuestions() {
      await axios
        .get(`/get-questions/${1}`)
        .then((res) => {
          this.questions = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
    writeQuestion() {
        this.$emit("remove-nav");
        this.isModalOpened = true;
    },
    async askQuestion() {
        if(this.question === null || this.question === "") {
            this.questionInputError = true
            return;
        }
      await axios
        .post("/ask-question", {
          bike_id: this.bike.id,
          question: this.question,
        })
        .then((res) => {
          this.question = null;
          this.questionSent = true;
            this.questionInputError = false
          this.getQuestions();
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style>
</style>
