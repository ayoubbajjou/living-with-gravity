<template>
  <app-layout title="Questions">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Questions
      </h2>
    </template>

    <div class="py-12">
      <!-- <div class="flex justify-end mr-24">
        <a
          href="/add-question"
          class="text-white bg-gray-600 rounded-md px-4 py-2 mb-3"
          >Add Bike</a
        >
      </div> -->
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div
                class="
                  py-2
                  align-middle
                  inline-block
                  min-w-full
                  sm:px-6
                  lg:px-8
                "
              >
                <div
                  class="
                    shadow
                    overflow-hidden
                    border-b border-gray-200
                    sm:rounded-lg
                  "
                >
                  <table class="w-full table-fixed divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th
                          scope="col"
                          class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          "
                        >
                          Question
                        </th>
                        <th
                          scope="col"
                          class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          "
                        >
                          Answer
                        </th>
                        <!-- <th
                          scope="col"
                          class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          "
                        >
                          Created date
                        </th> -->
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Answer</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="question in questions.data" :key="question.id">
                        <td class="px-6 py-4">
                          <div class="flex items-center">
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                {{ question.question }}
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            {{ question.answer }}
                          </div>
                        </td>
                        <!-- <td class="px-6 py-4 ">
                          {{ question.created_at }}
                        </td> -->
                        <td class="px-6 py-4 text-right text-sm font-medium">
                          <a
                            :href="`/questions/answer/${question.id}`"
                            class="text-indigo-600 hover:text-indigo-900 mr-2"
                            >Answer</a
                          >
                          <a href="#" class="text-red-600 hover:text-red-900"
                            >Delete</a
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="flex items-center justify-end">
                    <template v-for="(link, index) in questions.links">
                      <div
                        v-if="link.url === null"
                        :key="index"
                        class="
                          mr-1
                          mb-1
                          px-4
                          py-3
                          text-sm
                          leading-4
                          text-gray-400
                          border
                          rounded
                        "
                        v-html="link.label"
                      />
                      <inertia-link
                        v-else
                        class="
                          mr-1
                          mb-1
                          px-4
                          py-3
                          text-sm
                          leading-4
                          border
                          rounded
                          hover:bg-white
                          focus:border-indigo-500 focus:text-indigo-500
                        "
                        :key="link.id"
                        :class="{ 'bg-white': link.active }"
                        :href="link.url"
                        v-html="link.label"
                      />
                    </template>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { InertiaLink } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    InertiaLink,
  },
  data() {
    return {
      questions: [],
    };
  },
  mounted() {
    this.questions = this.$page.props.questions;
  },
  methods: {},
};
</script>
