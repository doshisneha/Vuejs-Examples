<!DOCTYPE html>
<html>
<head>
  <title>Example3</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>


  <div id="app" style="margin-top:10%;margin-left:40%">

    <div v-for="task in tasks">
        <input type="checkbox"  v-bind:value="task.description" v-if="task.computed" checked @click="check(task.description)" >
        <input type="checkbox"  v-bind:value="task.description" v-if="!task.computed"  @click="check(task.description)">
        {{task.description}}
    </div>

    <h4>Computed  Task</h4>
     <ul >
       <li v-for="task in tasks" v-if="task.computed" v-text="task.description"></li>
     </ul>

  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        tasks:[
          {description:'Hello World',computed:true,},
          {description:'How R U',computed:false,},
          {description:'Fine Thank U',computed:false,},
          {description:'And U?',computed:false,},

        ]
      },
      methods:{
          check:function(item)
          {
              alert(item);
          }

      },
    })

  </script>



  </body>
  </html>