<template>
    <div class="w-3/4 mx-auto pt-8">
        <h1 class="text-lg text-center">Posts</h1>

        <div>
            <Link :href="route('posts.create')"
                  class="hover:bg-gray-100 hover:text-black block p-2 w-32 bg-sky-500 border border-sky-500 rounded-full text-center text-white">
                Add Post
            </Link>

            <div v-if="posts">

                <div class="flex flex-col">
                </div>
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Title</th>
                                    <th scope="col" class="px-6 py-4">Body</th>
                                    <th scope="col" class="px-6 py-4">Created At</th>
                                    <th scope="col" class="px-6 py-4">Updated At</th>
                                </tr>
                                </thead>
                                <tbody v-for="post in posts">
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ post.id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ post.title }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ post.body }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ post.created_at }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ post.updated_at }}</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
import {Link, router} from "@inertiajs/vue3";

export default {
    name: "Index",
    methods: {
        router() {
            return router
        },

    },
    components: {
        Link
    },
    props: [
        'posts',
    ]
}
</script>

<style scoped>

</style>
