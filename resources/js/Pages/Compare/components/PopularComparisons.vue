<template>
    <div class="bg-secondary">
        <h1
            class="text-white border-b-4 w-max border-red-600 text-3xl uppercase font-bold italic mt-12 ml-6 lg:ml-0"
        >
            Popular comparisons
        </h1>
        <div class="mt-12 bg-secondary">
            <div class="flex items-center overflow-x-auto space-x-4">
                <!-- <div class="w-full h-20 bg-[#2F2F2F]"></div> -->
                <div class="overflow-x-auto scrollBar" id="popularComparisons">
                    <div class="w-max flex pt-12 pb-6">
                        <!-- 1 -->
                        <div
                            v-for="(bike, index) in loop"
                            class="relative cursor-pointer"
                            @click="
                                startComparing(
                                    bikesData?.[index]?.series,
                                    bikesData?.[index]?.version_name,
                                    bikesData?.[index + 1]?.series,
                                    bikesData?.[index + 1]?.version_name
                                )
                            "
                        >
                            <div
                                class="bg-[#2F2F2F] flex px-6 py-4 items-center space-x-12 mx-8 w-112"
                            >
                                <div class="flex">
                                    <img
                                        class="z-50 w-48 h-32 rounded-lg mr-4"
                                        :src="
                                            bikesData?.[index]?.images[0]
                                                .thumb_link
                                        "
                                        alt=""
                                    />
                                    <div
                                        class="text-white flex-col flex justify-evenly"
                                    >
                                        <h3 class="font-bold">
                                            {{ bikesData?.[index]?.series }} {{ bikesData?.[index]?.version_name }}
                                        </h3>
                                        <span class="text-xs"
                                            >Starting from</span
                                        >
                                        <p class="text-light italic">
                                            <!-- ₹{{ bike??.prices?.[0]??.ex_showroom_price }} -->
                                            ₹{{
                                                bikesData?.[index]?.prices[0]
                                                    ?.ex_showroom_price
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute w-24 left-24 top-32 z-0">
                                <img src="/icons/vs_icon.svg" alt="" />
                            </div>
                            <div
                                class="bg-[#2F2F2F] flex px-6 py-4 items-center space-x-12 mx-8 w-112"
                            >
                                <div
                                    class="flex cursor-pointer"
                                    @click="
                                        startComparing(
                                            bikesData?.[index]?.series,
                                            bikesData?.[index]?.version_name,
                                            bikesData?.[index + 1]?.series,
                                            bikesData?.[index + 1]?.version_name
                                        )
                                    "
                                >
                                    <img
                                        class="z-50 w-48 h-32 rounded-lg mr-4"
                                        :src="
                                            bikesData?.[index + 1]?.images[0]
                                                .thumb_link
                                        "
                                        alt=""
                                    />
                                    <div
                                        class="text-white flex-col flex justify-evenly"
                                    >
                                        <h3 class="font-bold">
                                            {{
                                                bikesData?.[index + 1]
                                                    ?.model_name
                                            }}
                                            {{
                                                bikesData?.[index + 1]
                                                    ?.version_name
                                            }}
                                        </h3>
                                        <span class="text-xs"
                                            >Starting from</span
                                        >
                                        <p class="text-light italic">
                                            <!-- ₹{{ bike??.prices?.[0]??.ex_showroom_price }} -->
                                            ₹{{
                                                bikesData?.[index + 1]
                                                    ?.prices[0]
                                                    ?.ex_showroom_price
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="flex justify-end items-center text-center pl-pl-4 text-gray-50 pt-4 pb-12 px-8"
            >
                <div class="flex space-x-6">
                    <button type="button" @click="scrollBack()">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 cursor-pointer transform rotate-180"
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

                    <button type="button" @click="scrollNext()">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 cursor-pointer"
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
</template>

<script>
export default {
    name: "PopularComparisons",
    data() {
        return {
            scrollVal: 300,
            bikesData: [],
            bikes: [3, 53, 110, 160, 267, 140, 245, 313, 292, 336],
            loop: [0, 1, 2, 3, 4, 5],
        };
    },
    mounted() {
        console.log("sadsa");
        axios
            .post("/popular-bikes", {
                bikes: this.bikes,
            })
            .then((res) => {
                console.log(res.data);
                this.bikesData = res.data;
            })
            .catch((err) => {
                console.log(err);
            });
    },
    methods: {
        scrollNext() {
            this.validateScroll();
            this.documentScroll("+");
            this.scrollTo();
        },
        scrollBack() {
            this.validateScroll();
            this.documentScroll("-");
            this.scrollTo();
        },
        documentScroll(operator) {
            const scrollWith = 300;
            operator === "+"
                ? (this.scrollVal += scrollWith)
                : (this.scrollVal -= scrollWith);
        },
        scrollTo() {
            const el = document.getElementById("popularComparisons");
            el.scrollTo({
                left: this.scrollVal,
                behavior: "smooth",
            });
        },
        validateScroll() {
            if (this.scrollVal <= 0) {
                this.scrollVal = 300;
            }
            if (this.scrollVal >= 2400) {
                this.scrollVal = 2400;
            }
        },

        startComparing(brand1, variant1, brand2, variant2) {
            var bikes = [];
            if (brand1 && variant1) {
                bikes.push({
                    brand: brand1,
                    variant: variant1,
                });
            }
            if (brand2 && variant2) {
                bikes.push({
                    brand: brand2,
                    variant: variant2,
                });
            }
            if (bikes.length < 2) {
                //   alert('Ooops! You need to select at least 2 bikes')
                this.selectedBikes = true;
            } else {
                axios
                    .post("/compare-bikes", bikes)
                    .then((res) => {
                        console.log(res);
                        this.comparedBikes = res.data;

                        var emitter = require("tiny-emitter/instance");
                        emitter.emit("compare-bikes", this.comparedBikes);
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            }
        },
    },
};
</script>

<style>
.scrollBar::-webkit-scrollbar {
    height: 10px;
}
.scrollBar::-webkit-scrollbar-thumb {
    background: #858484;
    border-radius: 10px;
}
.scrollBar::-webkit-scrollbar-track {
    background: linear-gradient(
        90deg,
        #444444,
        #444444 1px,
        #444444 0,
        #444444
    );
}
</style>
