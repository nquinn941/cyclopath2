<!DOCTYPE html>
<html>
<head> 
    <title> Posts </title>
</head> 

<body>
    <script src ="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <h1>Post</h1>
    <div id ="root">
        <p>@{{message}}</p>
    </div>

    <script>    
        var app = new Vue({
            el: "#root",
            data: {
                message: "",
            },
        });
    </script>
</body>
</hmtl>