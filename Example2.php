<!DOCTYPE html>
<html>
<head>
  <title>Example2</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>


  <div id="app" style="margin-top:10%;margin-left:40%">
    <input type="number" v-model="v1" placeholder="Enter Value 1" > 
    <input type="number" v-model="v2" placeholder="Enter Value 2" >
    <br><br>
    <button @click="sum">ADD</button>  {{add}}
    <br><br>
    <button @click="subustract">Deduct</button>  {{sub}}
    <br><br>
    <button @click="multiply">Multiply</button>  {{multi}}
    <br><br>
    <button @click="devide">Devide</button> {{div}}
    <br><br>

    Addition :
    <input type="number" v-model="v3" @keyup="addition" placeholder="Enter Value 1" > 
    <input type="number" v-model="v4" @keyup="addition" placeholder="Enter Value 2" >
    {{total}}
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        v1:'',
        v2:'',
        v3:'',
        v4:'',
        add: '',
        sub:'',
        multi:'',
        div:'',
        total:'',
      },
      methods:
      {
          sum:function()
          {
            if(this.v1!='' && this.v2!='')
            {
              this.add=parseInt(this.v1)+parseInt(this.v2);
              
            } 
            else
            {
                alert("Both Input Are Complusary");
            }
          },
          subustract:function()
          {
            if(this.v1!='' && this.v2!='')
            {
              this.sub=parseInt(this.v1)-parseInt(this.v2);
            } 
            else
            {
                alert("Both Input Are Complusary");
            }
          },
          multiply:function()
          {
            if(this.v1!='' && this.v2!='')
            {
              this.multi=parseInt(this.v1)*parseInt(this.v2);
            } 
            else
            {
                alert("Both Input Are Complusary");
            }
          },
          devide:function()
          {
            if(this.v1!='' && this.v2!='')
            {
              this.div=parseInt(this.v1)/parseInt(this.v2);
            } 
            else
            {
                alert("Both Input Are Complusary");
            }
          },
         addition:function()
          {
            if(this.v3!='' && this.v4!='')
            {
            
               total_amt = parseInt(this.v3)+parseInt(this.v4);
                this.total = 'Sum is :' + total_amt;
            }
           
          },
      },
    })

  </script>



  </body>
  </html>