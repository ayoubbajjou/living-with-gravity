<template>
    <user-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard User
            </h2>
        </template>

        <div class="bg-center bg-cover bg-hero-user py-[7rem]">
            <div
                class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-between"
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
                        <h3 class="text-4xl font-semibold border-b-3 py-3 mb-2">
                            Welcome {{ $page.props.user.name }}
                        </h3>
                        <p>{{ $page.props.user.email }}</p>
                        <p>{{ $page.props.user?.phone }}</p>
                    </div>
                </div>
                <!-- If we don't have a bike -->
                <div
                    v-if="!bike"
                    class="text-white pr-32 space-y-4 cursor-pointer"
                    @click="showAddBikeModal"
                >
                    <div class="w-full mx-auto">
                        <img
                            src="/icons/add_icon.svg"
                            class="w-8 h-8 mx-auto"
                            style="filter: invert(100%)"
                        />
                    </div>
                    <p>Add bike you own</p>
                </div>
                <!-- if we have a bike stored -->
                <div v-else class="text-white pr-12 space-y-4 cursor-pointer">
                    <div class="w-full mx-auto">
                        <a
                            :href="`/${bike.make}/${slugify(bike.series)}/${
                                bike.version_name
                            }`"
                        >
                            <img
                                :src="bike.images[0].thumb_link"
                                :alt="bike.images[0].caption"
                                class="w-20 h-20 rounded-full mx-auto"
                        /></a>
                    </div>
                    <p>{{ bike.series }} {{ bike.version_name }}</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1
                class="text-white border-b-4 w-max border-red-600 text-3xl uppercase font-bold italic mt-12 ml-6 lg:ml-0"
            >
                User Activities
            </h1>
            <div class="bg-[#2F2F2F] px-8 pb-4 mt-4">
                <div class="flex items-center pb-8 text-center">
                    <div
                        class="w-32 text-gray-200 py-4 font-bold rounded-br-lg cursor-pointer"
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
                        class="w-32 text-gray-200 py-4 font-bold rounded-br-lg cursor-pointer"
                        :class="{ 'bg-secondary': activeTab === 'questions' }"
                        @click="toggleTab('questions')"
                    >
                        <p
                            class="text-2xl px-2 font-bold"
                            :class="{
                                'text-red-600': activeTab === 'questions',
                            }"
                        >
                            Q&A
                        </p>
                    </div>
                </div>

                <!-- reviews tab content -->
                <div v-if="activeTab === 'reviews'" class="space-y-3">
                    <template
                        v-for="(review, index) in reviews"
                        :key="index"
                        :class="{ 'border-b border-white': reviews.length > 1 }"
                    >
                        <div class="bg-secondary px-4 rounded-md shadow-xl">
                            <div
                                class="text-white border-b border-gray-300 py-3"
                            >
                                <h3 class="text-xl font-semibold">
                                    {{ review.bike.series }}
                                    {{ review.bike.version_name }}
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
                <div v-if="activeTab === 'questions'" class="space-y-3">
                    <template
                        v-for="(question, index) in questions"
                        :key="index"
                        :class="{
                            'border-b border-white': questions.length > 1,
                        }"
                    >
                        <div class="bg-secondary px-4 rounded-md shadow-xl">
                            <div
                                class="text-white border-b border-gray-300 py-3"
                            >
                                <h3 class="text-xl font-semibold">
                                    {{ question.bike.series }}
                                    {{ question.bike.version_name }}
                                </h3>
                                <p>On: {{ datePosted(question.created_at) }}</p>
                            </div>
                            <div class="text-white py-6">
                                <h3 class="text-xl font-semibold">
                                    {{ question.question }}
                                </h3>
                                <p>Answer: {{ question.answer ?? "N/A" }}</p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </user-layout>

    <modal
        class="bg-secondary"
        :show="bikeModal"
        max-width="xl"
        :closeable="true"
        @close="close"
    >
        <div class="px-6 py-4">
            <div class="text-lg">
                <h2 class="text-2xl">Add bike you own</h2>
            </div>

            <div class="mt-4 space-y-4">
                <label>Select your bike</label>
                <v-select
                    v-model="form.serie"
                    :options="series"
                    placeholder="Select Brand/Model"
                    @select="getVariant"
                ></v-select>
                <v-select
                    class="variant-select"
                    v-model="form.version"
                    :options="versions"
                    placeholder="Select Variant"
                    :disabled="variatDisabled"
                ></v-select>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 text-right">
            <jet-button
                class="ml-2"
                @click="saveBike"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Save bike
            </jet-button>
        </div>
    </modal>
</template>

<script>
import moment from "moment";
import { defineComponent } from "vue";
import UserLayout from "@/Layouts/UserLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import Modal from "../../Jetstream/Modal.vue";
import JetButton from "../../Jetstream/Button.vue";

import "vue-select/dist/vue-select.css";

export default defineComponent({
    components: {
        UserLayout,
        Welcome,
        Modal,
        JetButton,
    },
    data() {
        return {
            activeTab: "reviews",
            reviews: [],
            questions: [],
            bikeModal: false,
            variatDisabled: true,
            versions: [],
            series: [],
            serieSelected: null,
            form: {
                serie: null,
                version: null,
                processing: false,
            },
            bike: null,
        };
    },
    mounted() {
        this.reviews = this.$inertia.page.props.reviews;
        this.questions = this.$inertia.page.props.questions;
        this.series = this.$inertia?.page?.props?.series;
        this.bike = this.$inertia?.page?.props?.bike;
    },
    watch: {
        "form.serie"(newVal, oldVal) {
            this.serieSelected = newVal;
            this.getVariant();
        },
    },
    methods: {
        datePosted(date) {
            return moment(date).format("ll");
        },
        toggleTab(tab) {
            this.activeTab = tab;
        },
        showAddBikeModal() {
            this.bikeModal = true;
        },
        close() {
            this.bikeModal = false;
        },
        getVariant() {
            axios
                .post("/get-bike-variant", {
                    serie: this.serieSelected,
                })
                .then((res) => {
                    this.versions = res.data;
                    if (this.versions.length) {
                        this.variatDisabled = false;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        saveBike() {
            axios
                .post("/save-user-bike", {
                    serie: this.form.serie,
                    version: this.form.version,
                })
                .then((res) => {
                    if (res.data.status === 200) {
                        this.bikeModal = false;
                        window.location.reload(true)
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        slugify(text) {
            return text
                .toLowerCase()
                .replace(/ /g, "-")
                .replace(/[^\w-]+/g, "");
        },
    },
});
</script>
