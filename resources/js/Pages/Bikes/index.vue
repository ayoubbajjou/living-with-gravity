<template>
    <app-layout title="Bikes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Bikes
            </h2>
        </template>

        
        <div class="py-12">
          <div class="flex justify-end mr-24">
          <a href="/add-bike" class="text-white bg-gray-600 rounded-md px-4 py-2 mb-3">Add Bike</a>
        </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                <tr>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Make
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Series
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Model
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    City
                                  </th>
                                  <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="bike in bikes" :key="bike.email">
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                      <div class="flex-shrink-0 h-20 w-40">
                                        <img class="h-20 w-40 rounded" :src="bike.image_url" alt="" />
                                      </div>
                                      <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                          {{ bike.make }}
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ bike.series }}</div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                      {{ bike.model }}
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ bike.city }}
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
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
const bikes = [
    {
      name: 'Jane Cooper',
      title: 'Regional Paradigm Technician',
      department: 'Optimization',
      role: 'Admin',
      email: 'jane.cooper@example.com',
      image:
        'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
    },
    // More bikes...
  ]

    import AppLayout from '@/Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },
        data() {
          return {
            bikes: [],
          }
        },
        mounted() {
          this.bikes = this.$page.props.bikes
        },
        methods: {

        }
    }
</script>
