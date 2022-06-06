<template>
    <Head>
        <title>
            {{ bike?.series }} {{ bike?.version_name }} price, specs, mileage &
            dealers
        </title>
        <!-- <meta name="description" content="Your page description"> -->
    </Head>
    <Navigation />
    <div class="h-screen">
        <div class="">
            <div
                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
            >
                <div
                    class="inline-block align-bottom text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle px-32"
                >
                    <div class="h-full text-center sm:text-left">
                        <div class="">
                            <a
                                :href="backUrl"
                                class="flex items-center cursor-pointer text-white space-x-4"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 cursor-pointer transform rotate-180"
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
                                <p>Back to Bike</p>
                            </a>
                        </div>
                        <div class="flex items-center justify-between py-6">
                            <h1
                                class="text-white border-b-4 w-max border-red-600 text-3xl uppercase font-bold italic ml-6 lg:ml-0"
                            >
                                Write a review
                            </h1>
                        </div>
                        <div class="flex justify-between w-full">
                            <!-- left side -->
                            <div class="w-full lg:w-1/3">
                                <img
                                    :src="bike?.images[0].image_link"
                                    :alt="bike?.series"
                                    class="relative w-full h-full object-cover"
                                    loading="lazy"
                                />
                                <p
                                    class="absolute text-white top-32 px-4 font-bold text-xl"
                                >
                                    {{ bike?.series }} -
                                    {{ bike?.version_name }}
                                </p>
                            </div>

                            <!-- right side -->
                            <div class="w-full lg:w-2/3 px-8">
                                <div
                                    class="py-4 rounded-lg bg-secondary shadow-2xl my-4 px-4"
                                >
                                    <p
                                        class="text-lg font-bold text-white uppercase"
                                    >
                                        <span class="text-red-500">*</span>Rate
                                        on Basis of
                                    </p>

                                    <div
                                        class="flex items-center justify-between text-white text-center py-6"
                                    >
                                        <div class="space-y-1">
                                            <img
                                                :src="`/icons/${mileageRate}.svg`"
                                                class="w-10 h-10 mx-auto"
                                                alt=""
                                            />
                                            <p>Mileage</p>
                                            <star-rating
                                                :rounded-corners="true"
                                                :show-rating="false"
                                                inactive-color="#333333"
                                                border-color="#EAEDF1"
                                                :border-width="1"
                                                :star-size="18"
                                                v-model:rating="mileageRate"
                                            ></star-rating>
                                        </div>
                                        <div>
                                            <img
                                                :src="`/icons/${safetyRate}.svg`"
                                                class="w-10 h-10 mx-auto"
                                                alt=""
                                            />
                                            <p>Safety</p>
                                            <star-rating
                                                :rounded-corners="true"
                                                :show-rating="false"
                                                inactive-color="#333333"
                                                border-color="#EAEDF1"
                                                :border-width="1"
                                                :star-size="18"
                                                v-model:rating="safetyRate"
                                            ></star-rating>
                                        </div>
                                        <div>
                                            <img
                                                :src="`/icons/${pricingRate}.svg`"
                                                class="w-10 h-10 mx-auto"
                                                alt=""
                                            />
                                            <p>Pricing</p>
                                            <star-rating
                                                :rounded-corners="true"
                                                :show-rating="false"
                                                inactive-color="#333333"
                                                border-color="#EAEDF1"
                                                :border-width="1"
                                                :star-size="18"
                                                v-model:rating="pricingRate"
                                            ></star-rating>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-around px-10 text-white"
                                    >
                                        <div>
                                            <img
                                                :src="`/icons/${performanceRate}.svg`"
                                                class="w-10 h-10 mx-auto"
                                                alt=""
                                            />
                                            <p>Performance</p>
                                            <star-rating
                                                :rounded-corners="true"
                                                :show-rating="false"
                                                inactive-color="#333333"
                                                border-color="#EAEDF1"
                                                :border-width="1"
                                                :star-size="18"
                                                v-model:rating="performanceRate"
                                            ></star-rating>
                                        </div>
                                        <div>
                                            <img
                                                :src="`/icons/${designRate}.svg`"
                                                class="w-10 h-10 mx-auto"
                                                alt=""
                                            />
                                            <p>Design & Styling</p>
                                            <star-rating
                                                :rounded-corners="true"
                                                :show-rating="false"
                                                inactive-color="#333333"
                                                border-color="#EAEDF1"
                                                :border-width="1"
                                                :star-size="18"
                                                v-model:rating="designRate"
                                            ></star-rating>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="rounded-lg border border-gray-100 p-4 space-y-3"
                                >
                                    <input
                                        v-model="title"
                                        type="text"
                                        class="focus:outline-none focus:border-b focus:border-gray-100 focus:ring-none focus:ring-0 ring-0 border-t-0 border-r-0 border-l-0 w-full bg-transparent outline-none text-white"
                                        placeholder="Give a Title to your review *"
                                    />
                                    <textarea
                                        v-model="description"
                                        cols="20"
                                        rows="4"
                                        class="bg-transparent w-full focus:outline-none focus:border-none border-none ring-0 focus:ring-none focus:ring-0 text-white"
                                        placeholder="Write your riview about the product *"
                                    ></textarea>
                                </div>
                                <div class="w-full">
                                    <p
                                        class="flex items-center py-2 italic mx-auto w-full"
                                        :class="
                                            !inputsError
                                                ? 'text-green-500'
                                                : 'text-red-500'
                                        "
                                    >
                                        {{ errorMessage }}
                                    </p>
                                </div>
                                <div
                                    @click="submitReview"
                                    class="flex justify-end mt-4 mb-8"
                                >
                                    <button
                                        class="text-white px-3 py-2 uppercase shadow-md font-semibold text-md bg-button rounded-l-lg"
                                    >
                                        Submit Review
                                    </button>
                                    <button
                                        class="bg-icon-button text-white px-3 rounded-r-lg"
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Subscribe />

        <Footer />
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Navigation from "../components/Navigation.vue";
import Footer from "../components/Footer.vue";
import Subscribe from "../components/Subscribe.vue";
import StarRating from "vue-star-rating";
export default defineComponent({
    components: {
        Head,
        Link,
        Navigation,
        Footer,
        Subscribe,
        StarRating,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        bike: Object,
    },
    data() {
        return {
            bike: null,
            mileageRate: 0,
            safetyRate: 0,
            pricingRate: 0,
            performanceRate: 0,
            designRate: 0,
            backUrl: null,
            title: null,
            description: null,
            inputsError: false,
            successMessage:
                "Thanks for Submitting the review, We will publish it shortly",
            failMessage: "Please make sure the fields are not empty!",
            errorMessage: null,
        };
    },
    mounted() {
        this.bike = this.$inertia.page.props.bike;
        const url = window.location.pathname.replace("review/", "");
        this.backUrl = url;
    },
    methods: {
        submitReview() {
            if (
                this.mileageRate === 0 ||
                this.safetyRate === 0 ||
                this.pricingRate === 0 ||
                this.performanceRate === 0 ||
                this.designRate === 0 ||
                this.title === null ||
                this.description === null
            ) {
                this.inputsError = true;
                this.errorMessage = this.failMessage;
                return;
            }
            axios
                .post(`/submit-review/${this.bike.id}`, {
                    mileageRate: this.mileageRate,
                    safetyRate: this.safetyRate,
                    pricingRate: this.pricingRate,
                    performanceRate: this.performanceRate,
                    designRate: this.designRate,
                    title: this.title,
                    description: this.description,
                })
                .then((res) => {
                    if (res.status === 200) {
                        this.mileageRate = 0;
                        this.safetyRate = 0;
                        this.pricingRate = 0;
                        this.performanceRate = 0;
                        this.designRate = 0;
                        this.title = null;
                        this.description = null;
                        this.inputsError = false;
                        this.errorMessage = this.successMessage;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
});
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");
* {
    font-family: "Poppins", sans-serif;
}
</style>
