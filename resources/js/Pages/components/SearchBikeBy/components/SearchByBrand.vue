<template>
  <div
        class="
          lg:w-full
          bg-[#2F2F2F]
          grid grid-cols-2
          md:grid-cols-3
          lg:grid-cols-4
          xl:grid-cols-5
          gap-4
          py-8
          px-12
        "
      >
        <div v-for="brand in brands" :key="brand.id" class="w-full">
          <a :href="`/${brand.brand_name}`">
            <div class="w-full h-36 md:w-56 rounded bg-gray-50">
              <img
                class="w-full h-36 md:w-56 mx-auto"
                :src="`/images/brands/${brand.brand_logo}`"
                :alt="brand.brand_name"
              />
            </div>
            <p class="text-white text-center mt-2">{{ brand.brand_name }}</p>
          </a>
        </div>
      </div>
</template>

<script>
export default {
    name: 'SearchByBrand',
    props: ['brands']
}
</script>

<style>

</style>