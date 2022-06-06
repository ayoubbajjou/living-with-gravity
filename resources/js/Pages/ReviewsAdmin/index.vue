<template>
    <app-layout title="Reviews">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reviews
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
                <div class="bg-white shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div
                                class="py-2 align-middle inline-block sm:px-6 lg:px-8"
                            >
                                <div
                                    class="shadow border-b border-gray-200 sm:rounded-lg"
                                >
                                    <table
                                        class="divide-y divide-gray-200 w-full table-fixed"
                                    >
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                >
                                                    ID
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                >
                                                    Bike
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                >
                                                    Name
                                                </th>
                                                <th
                                                   colspan="2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                >
                                                    Title
                                                </th>
                                                <th
                                                   colspan="4" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                >
                                                    Description
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                >
                                                    Rating
                                                </th>
                                                <th class="px-6 py-3">
                                                    <span class="sr-only"
                                                        >Answer</span
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-gray-200"
                                        >
                                            <tr
                                                v-for="review in reviews.data"
                                                :key="review.id"
                                            >
                                                <td class="px-6 py-4">
                                                    <div
                                                        class="text-sm text-gray-900"
                                                    >
                                                        {{ review?.id }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div class="ml-4">
                                                            <div
                                                                class="text-sm font-medium text-gray-900"
                                                            >
                                                                {{
                                                                    review
                                                                        .bike
                                                                        ?.series
                                                                }}
                                                                {{
                                                                    review
                                                                        .bike
                                                                        ?.version_name
                                                                }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div
                                                        class="text-sm text-gray-900"
                                                    >
                                                        {{ review?.user?.name }}
                                                    </div>
                                                </td>
                                                <td colspan="2" class="px-6 py-4">
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div class="ml-4">
                                                            <div
                                                                class="text-sm font-medium text-gray-900"
                                                            >
                                                                {{
                                                                    review.title
                                                                }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="4" class="px-6 py-4">
                                                    <p
                                                        class="text-sm text-gray-900"
                                                    >
                                                        {{ review.description }}
                                                    </p>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div
                                                        class="text-sm text-gray-900"
                                                    >
                                                        <div
                                                            class="flex items-center justify-between w-full"
                                                        >
                                                            <p class="">
                                                                Mileage:
                                                            </p>
                                                            <span>{{
                                                                review.mileage_rate
                                                            }}</span>
                                                        </div>
                                                        <br />
                                                        <div
                                                            class="flex items-center justify-between w-full"
                                                        >
                                                            <p class="">
                                                                Safety:
                                                            </p>
                                                            <span>{{
                                                                review.safety_rate
                                                            }}</span>
                                                        </div>
                                                        <br />
                                                        <div
                                                            class="flex items-center justify-between w-full"
                                                        >
                                                            <p class="">
                                                                Pricing:
                                                            </p>
                                                            <span>{{
                                                                review.pricing_rate
                                                            }}</span>
                                                        </div>
                                                        <br />
                                                        <div
                                                            class="flex items-center justify-between w-full"
                                                        >
                                                            <p class="">
                                                                Performance:
                                                            </p>
                                                            <span>{{
                                                                review.performance_rate
                                                            }}</span>
                                                        </div>
                                                        <br />
                                                        <div
                                                            class="flex items-center justify-between w-full"
                                                        >
                                                            <p class="">
                                                                Design &
                                                                Styling:
                                                            </p>
                                                            <span>{{
                                                                review.design_rate
                                                            }}</span>
                                                        </div>
                                                        <br />
                                                    </div>
                                                </td>
                                                <!-- <td class="px-6 py-4">
                          {{ question.created_at }}
                        </td> -->
                                                <td colspan="3"
                                                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                                >
                                                    <jet-button
                                                        v-if="!review.approved"
                                                        class="bg-green-500 hover:bg-green-600 mr-4"
                                                        @click="
                                                            approveReview(
                                                                review.id
                                                            )
                                                        "
                                                    >
                                                        Approve
                                                    </jet-button>
                                                    <a
                                                        href="#"
                                                        class="text-red-600 hover:text-red-900"
                                                        >Delete</a
                                                    >
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="flex items-center justify-end">
                                        <template
                                            v-for="(
                                                link, index
                                            ) in reviews.links"
                                        >
                                            <div
                                                v-if="link.url === null"
                                                :key="index"
                                                class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded"
                                                v-html="link.label"
                                            />
                                            <inertia-link
                                                v-else
                                                class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                                                :key="link.id"
                                                :class="{
                                                    'bg-white': link.active,
                                                }"
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
import JetButton from "@/Jetstream/Button.vue";

export default {
    components: {
        AppLayout,
        InertiaLink,
        JetButton,
    },
    data() {
        return {
            reviews: [],
        };
    },
    mounted() {
        this.reviews = this.$page.props.reviews;
    },
    methods: {
        approveReview(id) {
            axios
                .post(`/approve-review`, {
                    review_id: id,
                })
                .then((res) => {
                    console.log(res);
                    window.location.reload()
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
