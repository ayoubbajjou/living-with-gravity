<template>
    <div class="ml-[480px] py-10 grid grid-cols-3 gap-4">
        <div class="text-white" v-for="(bike, index) in bikesData" :key="index">
            <div class="space-y-3">
                <img
                    :src="bikesData[index]?.images[0].thumb_link"
                    class="w-60"
                    alt=""
                />
                <div>
                    <div class="flex items-center justify-between">
                        <p class="font-bold">
                            {{ bike?.series }}
                        </p>
                        <div class="flex items-center space-x-2">
                            <svg
                                @click="editBike(bike?.id)"
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
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                />
                            </svg>
                            <svg
                                v-if="index === 2"
                                @click="removeBike(bike?.id)"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-red-500 cursor-pointer"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                />
                            </svg>
                        </div>
                    </div>
                    <p class="font-light text-sm">{{ bike?.version_name }}</p>
                    <p class="font-bold text-xl">
                        ₹{{ bike?.prices[0]?.onroad_price }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex pl-4 bg-secondary pb-12 w-full">
        <div
            class="bg-[#2F2F2F] lg:px-12 w-1/3 py-24 flex-col items-start flex space-y-12"
        >
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 1
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(1)"
            >
                <span
                    v-if="activeTab === 1"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>
                Engine And Transmission
            </button>
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 2
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(2)"
            >
                <span
                    v-if="activeTab === 2"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>

                Features And Safety
            </button>
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 3
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(3)"
            >
                <span
                    v-if="activeTab === 3"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>

                Charging
            </button>
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 4
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(4)"
            >
                <span
                    v-if="activeTab === 4"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>

                Chassis and Suspension
            </button>
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 5
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(5)"
            >
                <span
                    v-if="activeTab === 5"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>

                Dimensions and Capacity
            </button>
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 6
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(6)"
            >
                <span
                    v-if="activeTab === 6"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>

                Electricals
            </button>
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 7
                        ? 'text-red-500 font-bold'
                        : 'text-white font-semibold'
                "
                @click="changeActiveTab(7)"
            >
                <span
                    v-if="activeTab === 7"
                    class="mr-4 border-l-[6px] leading-4 border-red-500"
                ></span>

                Tyres And Brakes
            </button>
        </div>
        <div class="flex w-2/3 max-h-168 overflow-y-auto scrollBar">
            <ul class="grid grid-cols-3 gap-0 w-full lg:ml-12">
                <li
                    v-for="(spec, idx) in specsList"
                    :key="spec.id"
                    class="text-bold space-y-3"
                >
                    <div
                        v-for="(val, index) in spec"
                        :key="index"
                        class="w-full text-white py-4 min-h-[150px] border-b"
                    >
                        <div class="space-y-3">
                            <p
                                class="flex items-start justify-start font-bold text-red-500"
                                :class="{ 'opacity-0': idx !== 0 }"
                            >
                                {{ val?.title }}
                            </p>
                            <div
                                class="text-white flex items-start justify-between"
                            >
                                <p>{{ val?.description }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "SpecsComparison",
    props: ["bikes"],
    data() {
        return {
            activeTab: 1,
            bikesData: [],
            specsData: [],
        };
    },
    computed: {
        bikesList: {
            // getter
            get() {
                return this.bikes;
            },
            // setter
            set(newValue) {
                this.bikesData = newValue;
                this.bikesList = newValue;
            },
        },
        specsList: {
            get() {
                var specsList = [];

                this.bikesList.forEach((bike, index) => {
                    const specBike = this.bikesList[
                        index
                    ]?.specifications?.filter((spec) => {
                        return spec.specification_group_id === this.activeTab;
                    });
                    if (specBike?.length) {
                        specsList.push(specBike);
                    }
                });

                return specsList;
            },
            // setter
            set(newValue) {
                this.specsData = newValue;
                this.specsList = newValue;
            },
        },
    },
    mounted() {
        this.bikesData = this.bikes;
        this.getSpecsCategory();
    },
    watch: {
        activeTab(newTab, oldTab) {
            this.getSpecsCategory();
        },
        bikes(newVal, oldVal) {
            this.bikesData = this.bikes;
        },
    },
    methods: {
        changeActiveTab(tab) {
            this.activeTab = tab;
        },
        getSpecsCategory() {
            this.specsData = [];
            this.bikesList.forEach((bike, index) => {
                const specBike = this.bikesList[index]?.specifications?.filter(
                    (spec) => {
                        return spec.specification_group_id === this.activeTab;
                    }
                );
                if (specBike?.length) {
                    this.specsData.push(specBike);
                }
            });
        },
        editBike(id) {
            console.log(id);
        },


        slugify(text) {
            const separator = "-"
            return text
                .toString()
                .normalize("NFD") // split an accented letter in the base letter and the acent
                .replace(/[\u0300-\u036f]/g, "") // remove all previously split accents
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9 ]/g, "") // remove all chars not letters, numbers and spaces (to be replaced)
                .replace(/\s+/g, separator);
        },
        removeBike(id) {
            if (this.bikesData.length > 1) {
                const bikes = this.bikesList.filter((bike) => {
                    return bike?.id !== id;
                });

                const specs = this.specsList.filter((specs, index) => {
                    console.log(specs[index]);
                    console.log(specs[index].bike_id !== id);
                    if (specs[index].bike_id !== id) {
                        this.specsList.splice(index, 1);
                    }
                });
                var slug = "";
                if (bikes.length === 2) {
                    slug = `${this.slugify(
                        bikes?.[0].series + " " + bikes?.[0].version_name
                    )}-vs-${this.slugify(
                        bikes?.[1].series + " " + bikes?.[1].version_name
                    )}`;
                }
                const bikesUrl = `/compare/${slug}`;

                history.pushState(null, null, bikesUrl);

                this.bikesList = bikes;
                this.specsData = this.specsList;
            }
        },
    },
};
</script>

<style>
.scrollBar::-webkit-scrollbar {
    width: 10px;
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
