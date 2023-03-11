<template>

    <MainLayout>

        <h1 class="text-lg mb-3">Create Post </h1>

        <form @submit.prevent="store">
            <div>
                <input v-model="title" class="rounded-full mb-2 w-full border-gray-300" type="text" placeholder="Title">
            </div>
            <div v-if="errors" class="text-red-600 text-sm">{{ errors.title}}</div>
            <div>
                <textarea v-model="body" class="rounded-full w-full mb-2 border-gray-300" placeholder="Body"></textarea>
            </div>
            <div v-if="errors" class="text-red-600 text-sm">{{ errors.body}}</div>
            <div class="flex">
                <button
                    class="hover:bg-gray-100 hover:text-black mr-1 block p-2 w-3/4 bg-sky-500 border border-sky-500 rounded-full text-center text-white"
                    type="submit">
                    Store
                </button>
                <Link :href="route('posts.index')"
                      class="hover:bg-pink-100 hover:text-black block p-2 w-1/4 bg-pink-500 border border-pink-500 rounded-full text-center text-white"
                      type="submit">
                    Back
                </Link>
            </div>
        </form>
    </MainLayout>

</template>

<script>
import {Link, router} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    name: "Create",
    components:{
        Link,MainLayout
    },

    data(){
        return {
            title: '',
            body: '',
        }
    },

    props:[
      'errors',
    ]
    ,
    methods:{
        router() {
            return router
        },
        store(){
            this.$inertia.post('/posts',{title:this.title, body:this.body})
        }
    }
}
</script>

<style scoped>

</style>
