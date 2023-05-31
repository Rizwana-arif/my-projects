<style type="text/css">
    form{
        width:400px;
        height:auto;
        background:#FFCC66;
        margin:0px auto;
        padding:30px;
        }
    form label{
        color:white;
        font-size:20px;
        font-weight:bold;
    }
    form input{
        width:100%;
        height:40px;
        margin-bottom:10px;
        border-radius:30px;
        border:none;
        border-bottom:3px #000 solid;
    }

</style>
   
   
   
   <form method="get" enctype="multipart/form-data" action="get_Data.php" >
    <h1 align="center">Bill charges Mangement System </h1>
        <label>Consumer Id</label>
        <input type="text" name="cons_idn"  value=""/>
        <label>Consumer name</label>
        <input type="text" name="cons_name"/>
        <label>Address</label>
        <input type="text" name="address"/>
        <label>Bill Month</label>
        <input type="month" name="bill_month"/>
        <label>Due date</label>
        <input type="date" name="due_date"/>
        <label>Line Rent</label>
        <input type="text" name="line_rent" value="450" readonly/>
        <label>Land Line Charges</label>
        <input type="numbers" name="L_line"/>
        <label>Mobile line charges</label>
        <input type="number" name="mbl_charges"/>
        <label>International line charges</label>
        <input type="number" name="inter_charges"/>
        <input type="submit" name="bill_Cal" value="Display Bill" />      



    </form>

