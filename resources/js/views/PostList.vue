<template>
    <div class="container">
       <h1 class="m-3 text-center">Lista dei post</h1>
       <div class="row">
           <div v-for="post in posts" :key="post.id" class="col-3 offset-2">
               <div class="card mb-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title bg-success ">{{ post.title }}</h5> 
                        <div class=" my_card my_scroll">
                            <p class="card-text">{{ post.content }}</p>
                            <small class="card-subtitle mb-2 text-muted">{{ post.slug }}</small>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "PostList",
        data() {
            return {
                posts:[]
            }
        },
        created() {
            this.getPosts();
        },
        methods: {
            getPosts() {
                axios.get("/api/posts").then((resp)=> {
                    this.posts = resp.data.results.data;
                });
            }
        }
    }
</script>

<style lang="scss" scoped>
.my_card {
    height: 150px;
    overflow: auto;
}

.my_scroll::-webkit-scrollbar {
    background-color: white;
    width: 0.4rem;
}
.my_scroll::-webkit-scrollbar-thumb {
    background-color: #2aa731;
    border-radius: 100vw;
}
.my_scroll::-webkit-scrollbar-thumb:hover {
    background-color: rgba(65, 197, 13, 0.753);
}
</style>