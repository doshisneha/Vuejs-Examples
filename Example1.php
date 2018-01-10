<!DOCTYPE html>
<html>
<head>
  <title>Example1</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>


  <div id="app" style="margin-top:10%;margin-left:40%">
    <input type="text" v-model="firstname" placeholder="Enter First Name" > <input type="text" v-model="lastname" placeholder="Enter Last Name" >
    <br><br>
    Your Name Is : {{ firstname }} {{ lastname }}
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        firstname: '',
        lastname:'',
      }
    })

  </script>



  </body>
  </html>