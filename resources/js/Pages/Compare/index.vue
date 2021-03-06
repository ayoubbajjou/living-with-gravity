<template>
    <Head>
        <title>
            {{ bike?.series }} {{ bike?.version_name }} price, specs, mileage &
            dealers
        </title>
        <!-- <meta name="description" content="Your page description"> -->
    </Head>
    <Navigation />
    <div class="bg-secondary h-screen">
        <div class="max-w-screen-xl mx-auto">
            <div class="lg:flex w-full bg-hero-compare bg-cover bg-center">
                <div
                    class="uppercase italic py-[7rem] bg-gradient-to-r from-secondary w-full"
                >
                    <h3 class="text-xl text-red-400 font-semibold">Compare</h3>
                    <h1 class="text-5xl text-white font-bold">Bikes</h1>
                </div>
            </div>
            <div>
                <div
                    v-if="!comparedBikes.length"
                    class="items-center justify-between lg:space-x-6 lg:mx-0 lg:my-0 lg:flex mx-8 my-8 shadow-2xl space-y-4"
                >
                    <compare-bike-card>
                        <template #select>
                            <v-select
                                v-model="series1"
                                :options="series"
                                placeholder="Select Brand/Model"
                                @select="getVariant"
                            ></v-select>
                            <v-select
                                class="variant-select"
                                v-model="variant1"
                                :options="versions1"
                                placeholder="Select Variant"
                                :disabled="variat1Disabled"
                            ></v-select>
                        </template>
                    </compare-bike-card>
                    <compare-bike-card
                        :class="{ 'border-2 border-red-500': selectedBikes }"
                    >
                        <template #select>
                            <v-select
                                v-model="series2"
                                :options="series"
                                placeholder="Select Brand/Model"
                            ></v-select>
                            <v-select
                                class="variant-select"
                                v-model="variant2"
                                :options="versions2"
                                placeholder="Select Variant"
                                :disabled="variat2Disabled"
                            ></v-select>
                        </template>
                    </compare-bike-card>
                    <compare-bike-card>
                        <template #select>
                            <v-select
                                v-model="series3"
                                :options="series"
                                placeholder="Select Brand/Model"
                            ></v-select>
                            <v-select
                                class="variant-select"
                                v-model="variant3"
                                :options="versions3"
                                placeholder="Select Variant"
                                :disabled="variat3Disabled"
                            ></v-select>
                        </template>
                    </compare-bike-card>
                </div>
                <div v-else>
                    <div class="px-10 py-4 text-white">
                        <a href="/compare" class="flex items-center space-x-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M11 17l-5-5m0 0l5-5m-5 5h12"
                                />
                            </svg>
                            <span class="text-lg">Back</span>
                        </a>
                    </div>
                    <specs-comparison
                        :bikes="comparedBikes"
                        @bike-edited="bikeEdited"
                    ></specs-comparison>
                </div>
                <div
                    v-if="!comparedBikes.length"
                    class="flex justify-center lg:justify-end mt-8 mb-8 lg:mt-16 px-4"
                    @click="startComparing"
                >
                    <button
                        class="text-white px-6 py-2 uppercase shadow-md font-bold text-lg bg-button rounded-l"
                    >
                        Start comparing
                    </button>
                    <button
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
                    </button>
                </div>
            </div>
            <div>
                <PopularComparisons @start-comparing="popularCompare" />
            </div>
        </div>
        <Subscribe />

        <Footer />
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import Navigation from "../components/Navigation.vue";
import Footer from "../components/Footer.vue";
import Subscribe from "../components/Subscribe.vue";
import CompareBikeCard from "./components/CompareBikeCard.vue";
import PopularComparisons from "./components/PopularComparisons.vue";
import "vue-select/dist/vue-select.css";
import SpecsComparison from "./components/SpecsComparison.vue";

export default defineComponent({
    components: {
        Head,
        Link,
        JetApplicationLogo,
        Navigation,
        Footer,
        Subscribe,
        CompareBikeCard,
        PopularComparisons,
        SpecsComparison,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    data() {
        return {
            bike: null,
            dealers: null,
            suggestedBikes: null,
            cities: null,
            versions1: [],
            versions2: [],
            versions3: [],
            currentImg: 1,
            reviews: [],
            versionSelected: null,
            dealersCount: null,
            specs: [],
            colors: [],
            displayColors: false,
            colorSelected: null,
            activeTab: "bikes",
            series1: null,
            series2: null,
            series3: null,
            series: [],
            variant1: null,
            variant2: null,
            variant3: null,
            comparedBikes: [],
            serie1Selected: null,
            serie2Selected: null,
            serie3Selected: null,
            variat1Disabled: true,
            variat2Disabled: true,
            variat3Disabled: true,
            selectedBikes: false,
        };
    },
    mounted() {
        this.series = this.$inertia?.page?.props?.series;
    },
    created() {
        var emitter = require("tiny-emitter/instance");

        emitter.on("compare-bikes", (val) => {
            this.series1 = val?.[0]?.series;
            this.variant1 = val?.[0]?.version_name;
            this.series2 = val?.[1]?.series;
            this.variant2 = val?.[1]?.version_name;
            this.startComparing();
        });
    },
    watch: {
        series1(newVal, oldVal) {
            this.serie1Selected = newVal;
            this.getVariant();
        },
        series2(newVal, oldVal) {
            this.serie2Selected = newVal;
            this.getVariant();
        },
        series3(newVal, oldVal) {
            this.serie3Selected = newVal;
            this.getVariant();
        },
    },
    methods: {
        startComparing() {
            var bikes = [];
            if (this.series1 && this.variant1) {
                bikes.push({
                    brand: this.series1,
                    variant: this.variant1,
                });
            }
            if (this.series2 && this.variant2) {
                bikes.push({
                    brand: this.series2,
                    variant: this.variant2,
                });
            }
            if (this.series3 && this.variant3) {
                bikes.push({
                    brand: this.series3,
                    variant: this.variant3,
                });
            }
            var slug = "";
            if (bikes.length === 2) {
                slug = `${this.slugify(
                    this.serie1Selected + " " + this.variant1
                )}-vs-${this.slugify(
                    this.serie2Selected + " " + this.variant2
                )}`;
            } else if (bikes.length === 3) {
                slug = `${this.slugify(
                    this.serie1Selected + " " + this.variant1
                )}-vs-${this.slugify(
                    this.serie2Selected + " " + this.variant2
                )}-vs-${this.slugify(
                    this.serie3Selected + " " + this.variant3
                )}`;
            }
            const bikesUrl = `/compare/${slug}`;

            history.pushState(null, null, bikesUrl);

            if (bikes.length < 2) {
                //   alert('Ooops! You need to select at least 2 bikes')
                this.selectedBikes = true;
            } else {
                axios
                    .post("/compare-bikes", bikes)
                    .then((res) => {
                        this.comparedBikes = res.data;
                        window.scroll({
                            top: 200,
                            behavior: "smooth",
                        });
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            }
        },
        slugify(text) {
            const separator = "-";
            return text
                .toString()
                .normalize("NFD") // split an accented letter in the base letter and the acent
                .replace(/[\u0300-\u036f]/g, "") // remove all previously split accents
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9 ]/g, "") // remove all chars not letters, numbers and spaces (to be replaced)
                .replace(/\s+/g, separator);
        },
        getVariant() {
            axios
                .post("/fetch-bike-variant", {
                    series1: this.serie1Selected,
                    series2: this.serie2Selected,
                    series3: this.serie3Selected,
                })
                .then((res) => {
                    this.versions1 = res.data[0];
                    this.versions2 = res.data[1];
                    this.versions3 = res.data[2];
                    if (this.versions1.length) {
                        this.variat1Disabled = false;
                    }
                    if (this.versions2.length) {
                        this.variat2Disabled = false;
                    }
                    if (this.versions3.length) {
                        this.variat3Disabled = false;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        bikeEdited(val) {
            console.log({ val });
            if (val.id === 1) {
                this.series1 = val.form.serie;
                this.variant1 = val.form.version;
            }
            if (val.id === 2) {
                this.series2 = val.form.serie;
                this.variant2 = val.form.version;
            }
            if (val.id === 3) {
                this.series3 = val.form.serie;
                this.variant3 = val.form.version;
            }
            this.startComparing();
        },
        popularCompare(val) {
            this.series1 = val.bike1.series;
            this.variant1 = val.bike1.version_name;
            this.series2 = val.bike2.series;
            this.variant2 = val.bike2.version_name;
            this.series3 = null;
            this.variant3 = null;
            this.startComparing();
        },
    },
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");
* {
    font-family: "Poppins", sans-serif;
}

select {
    -moz-appearance: none; /* Firefox */
    -webkit-appearance: none; /* Safari and Chrome */
    appearance: none;
    background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='45' viewBox='0 0 24 24' width='45' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
}
</style>
