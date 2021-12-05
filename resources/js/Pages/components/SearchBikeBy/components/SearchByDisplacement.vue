<template>
  <div>
        <div
          class="w-11/12
          lg:w-full bg-gray-600 grid grid-cols-3 lg:grid-cols-5 gap-4 py-8 px-4"
        >
          <div
          @click="searchBy('100')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Upto 100cc
            </p>
          </div>
          <div
          @click="searchBy('100-110')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              100cc - 110cc
            </p>
          </div>
          <div
          @click="searchBy('110-125')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              110cc - 125cc
            </p>
          </div>
          <div
          @click="searchBy('125-150')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              125cc - 150cc
            </p>
          </div>
          <div
          @click="searchBy('150-200')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              150cc - 200cc
            </p>
          </div>
        </div>
        <div
          class="w-11/12
          lg:w-full bg-gray-600 grid grid-cols-3 lg:grid-cols-5 gap-4 py-8 px-4"
        >
          <div
          @click="searchBy('200-250')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              200cc - 250cc
            </p>
          </div>
          <div
          @click="searchBy('250-500')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              250cc - 500cc
            </p>
          </div>
          <div
          @click="searchBy('500-750')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              500cc - 750cc
            </p>
          </div>
          <div
          @click="searchBy('750-1000')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              750cc - 1000cc
            </p>
          </div>
          <div
          @click="searchBy('1000')"
            class="
              items-center
              flex
              justify-center
              cursor-pointer
              hover:bg-white
              border-2 border-red-500
            "
          >
            <p
              class="
                w-full
                text-white
                font-bold
                text-md
                lg:text-xl
                py-4
                px-8
                text-center
                hover:text-red-500
              "
            >
              Above 1000cc
            </p>
          </div>
        </div>
      </div>
</template>

<script>
export default {
    name: 'SearchByDisplacement',
    methods: {
        searchBy(val) {
            window.location.href = `/search/displacement/${val}`
        }
    }
}
</script>

<style>

</style>