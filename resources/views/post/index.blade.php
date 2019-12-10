<!DOCTYPE html>
<html>
<head> 
    <title> Posts </title>
</head> 

<body>
    <script src ="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src ="https://unpkg.com/axios/dist/axios.min.js"></script>
    <h1>Post</h1>
    <div id ="root">
        <ul>
            <li v-for="post in posts">@{{post.content}}</li>
        </ul>
    
        <h2> New Post </h2>
        Post content: <input type="text" id= "input" v-model="newPostContent">
        <button @click="createPost">Create</button>
    </div>

    <script>    
        var app = new Vue({
            el: "#root",
            data: {
                posts: [],
                newPostContent: '',
            },
            mounted(){
                axios.get("{{ route ('api.post.index')}}")
                    .then(response=>{
                        this.posts =response.data;
                    })
                    .catch(response=>{
                        console.log(response);
                    })
                
            },
            methods:{
                createPost:function(){
                    axios.post("{{ route('api.post.store')}}",{
                        content: this.newPostContent
                    })
                    .then(response => {
                        this.posts.push(response.data);
                        this.newPostContent ='';
                    })
                    .catch(response =>{
                        console.log(response);
                    })
                }
            }
                
        });
    </script>
</body>
</hmtl>