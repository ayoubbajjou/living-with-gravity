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
                  <div>
                    <jet-form-section @submitted="answer">
                      <template #description>
                        <div class="px-5 py-6">
                            {{ question?.question }}
                        </div>
                      </template>

                      <template #form>
                        <!-- Name -->
                        <div class="col-span-8">
                          <jet-label for="answer" value="Answer" />
                          <textarea
                            id="answer"
                            type="text"
                            rows="5"
                            class="
                              mt-1
                              block
                              w-full
                              rounded-md
                              border-1 border-gray-300
                            "
                            v-model="form.answer"
                            autocomplete="answer"
                          />
                          <jet-input-error
                            :message="form.errors.answer"
                            class="mt-2"
                          />
                        </div>
                      </template>

                      <template #actions>
                        <jet-action-message
                          :on="form.recentlySuccessful"
                          class="mr-3"
                        >
                          Saved.
                        </jet-action-message>

                        <jet-button
                          :class="{ 'opacity-25': form.processing }"
                          :disabled="form.processing"
                        >
                          Save
                        </jet-button>
                      </template>
                    </jet-form-section>
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
import { defineComponent } from "vue";
import JetButton from "@/Jetstream/Button.vue";
import JetFormSection from "@/Jetstream/FormSection.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetActionMessage from "@/Jetstream/ActionMessage.vue";
import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue";

export default {
  components: {
    AppLayout,
    JetActionMessage,
    JetButton,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
    JetSecondaryButton,
  },
  data() {
    return {
      question: null,
      form: this.$inertia.form({
        _method: "POST",
        answer: this.question?.answer,
      }),
    };
  },
  mounted() {
    this.question = this.$page.props.question;
  },
  methods: {
    answer() {
      axios.post(`/store-answer/${this.question.id}`, {
          form: this.form
      }).then(res => {
          this.form.answer = null
          if(res.status === 200) {
              window.location.href = '/questions'
          }
      }).catch(err => {
          console.log(err)
      })
    },
  },
};
</script>
