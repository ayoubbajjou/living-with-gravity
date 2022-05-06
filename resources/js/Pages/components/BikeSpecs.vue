<template>
    <div class="flex pl-4 bg-secondary pb-12 w-full">
        <div
            class="bg-[#2F2F2F] lg:px-12 w-1/3 py-24 py-8 flex-col items-start flex space-y-12"
        >
            <button
                class="uppercase text-xs lg:text-base"
                :class="
                    activeTab === 1
                        ? 'text-red-500 font-bold'
                        : 'text-white ml-6 font-semibold'
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
                        : 'text-white ml-6 font-semibold'
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
                        : 'text-white ml-6 font-semibold'
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
                        : 'text-white ml-6 font-semibold'
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
                        : 'text-white ml-6 font-semibold'
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
                        : 'text-white ml-6 font-semibold'
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
                        : 'text-white ml-6 font-semibold'
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
            <ul class="w-full lg:ml-12 py-20">
                <li v-for="spec in specsList" :key="spec.id" class="text-bold">
                    <div
                        class="w-full flex items-center justify-start text-white px-12 py-4"
                    >
                        <p class="w-2/3 font-bold">{{ spec.title }}</p>
                        <p class="w-1/3">{{ spec.description }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "BikeSpecs",
    props: ["specs"],
    data() {
        return {
            activeTab: 1,
            specsList: [],
        };
    },
    mounted() {
        setTimeout(() => {
            this.getSpecsCategory();
        }, 250);
    },
    watch: {
        activeTab(newTab, oldTab) {
            this.getSpecsCategory();
        },
    },
    methods: {
        changeActiveTab(tab) {
            this.activeTab = tab;
        },
        getSpecsCategory() {
            this.specsList = this.specs.filter((spec) => {
                return spec.specification_group_id === this.activeTab;
            });
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
