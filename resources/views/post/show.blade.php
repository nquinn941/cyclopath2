@extends('layouts.app')

@section('content')
    <ul>
        <li>ID: {{$post->id}}</li>
        <li>User ID: {{$post->user_id}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Rating: {{$post->rating}}</li>
    </ul>

    <script src = "https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <Script src = "https://unpkg.com/axios/dist/axios.min.js"></script>
    <div id ="root">
        <ul>
            <li v-for="comment in comments">@{{ comment.content }}</li>
        </ul>  
        Comment content: <input type ="text" id="input" v-model="newCommentContent">
        <button @click="createComment">Create</button>
    </div>

    <script>
        var app = new Vue({
            el:"#root",
            data:{
                comments:[],
                newCommentContent: '',
            },
            mounted(){
                axios.get("{{route ('api.comments.index',['id' => $post->id])}}")
                .then(response=>{
                    this.comments =response.data;
                })
                .catch(response=>{
                    console.log(response);
                })
            },
            methods:{
                createPost: function(){
                    axios.post("{{route('api.comments.store',['id' => $post->id])}}",{
                        content:this.newPostContent
                    })
                    .then(response=>{
                        this.posts.push(response.data);
                        this.newPostContent= '';
                    })
                    .catch(response=>{
                        console.log(response);
                    })
                }
            }
        });
    </script>
@endsection