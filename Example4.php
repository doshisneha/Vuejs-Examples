<!DOCTYPE html>
<html>
<head>
  <title>Example4</title>
  <script src="vue2.5.13.js"></script>
</head>
<body>


  <div id="app" style="margin-top:10%;margin-left:30%">
   <table class="" border="2">
      <tr>
       <th>Sr.</th>
        <th>Product</th>
       <th>Quantity</th>
       <th>Rate</th>
       <th>Total</th>
       <th>Action</th>
      </tr>
      <tr v-for="(row, index) in rows" >
        <td> {{ index +1 }}</td>
        <td>
            <select class="form-control">
                <option value="">Select</option>
                <option value="1">TEST 1</option>
                <option value="2">TEST 2</option>
                <option value="3">TEST 3</option>
            </select>
        </td>
        <td><input type="number" v-model="row.qty"  @keyup="get_total"></td>
        <td><input type="number" v-model="row.rate" @keyup="get_total"></td>
        <td><!--<input type="number"  v-bind:value="row.qty * row.rate">-->
        <input  type="text" readonly :value="row.qty * row.rate"    />
        
        </td>
        <td>
            <button  @click="addRow(index)">Add Row</button>
            <button  @click="removeRow(index)">Remove Row</button>
        </td>
      </tr>
      <tr>
        <td colspan="4" class="text-right">TOTAL</td>
        <td colspan="1" class="text-right"><input  type="text" readonly :value="total "   /></td>
        <td></td>
    </tr> 
   </table>

   

  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        rows: [
            //initial data
            {qty: '0', rate: '0'},
           
          ],
          total: 0,
      },
     created : function()
      {
        this.get_total();
      
     },
     
      methods:
      {
            get_total: function () 
            {
            
                var t = 0;
                for (var i=0; i < this.rows.length; i++) 
                {
                    var e = this.rows[i];
                    tot =  parseFloat(e.qty) * parseFloat(e.rate);
                    if(tot > 0)
                    {
                         t += parseFloat(e.qty) * parseFloat(e.rate);
                    }
                    else
                    {
                        t += 0;
                    }
                };
                this.total = t;
                
            } ,
            addRow: function(index) 
            {
                try {
                this.rows.splice(index + 1, 0, {});
                } 
                catch (e) {
                console.log(e);
                }
                this.get_total();
            },
            removeRow: function(index) 
            {
                this.rows.splice(index, 1);
                this.get_total();
            },
        },
    })

  </script>



  </body>
  </html>