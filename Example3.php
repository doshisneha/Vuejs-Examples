<!DOCTYPE html>
<html>
<head>
  <title>Example3</title>
  <script src="vue2.5.13.js"></script>
</head>
<body>


  <div id="app" style="margin-top:10%;margin-left:40%">

    <div v-for="task in tasks">
        <input type="checkbox" v-bind:id="task.id"  v-bind:value="task.description" v-if="task.computed" checked @click="check(task.description)" >
        <input type="checkbox" v-bind:id="task.id"  v-bind:value="task.description" v-if="!task.computed"  @click="check(task.description)">
        {{task.description}}
    </div>

    <h4>You Have Selected</h4>
     <ul >
       <li v-for="task in tasks" v-if="task.computed" v-text="task.description"></li>
     </ul>

  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        tasks:[
          {id:1,description:'Hello World',computed:true,},
          {id:2,description:'How R U',computed:false,},
          {id:3,description:'Fine Thank U',computed:true,},
          {id:4,description:'And U?',computed:false,},

        ]
      },
      methods:{
          check:function(item)
          {
            
            for (var i=0; i < this.tasks.length; i++) 
            {
             
                if (this.tasks[i].description === item)
                 {
                  if(document.getElementById(this.tasks[i].id).checked)
                  {
                    this.tasks[i].computed=true;
                  }
                  else
                  {
                    this.tasks[i].computed=false;
                  }
                    
                   
                }
            }

            
           
          }

      },
    })

  </script>



  </body>
  </html>