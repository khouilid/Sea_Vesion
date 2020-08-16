<div class='d-flex'>
       <div class='d-flex m-3 w-100 line_ups_menu'>
            <button onclick='event_doc(8)'  class='btn btn-success m-2'>line ups</button>
            <button onclick='event_doc(4)' class='btn btn-success m-2'>line up general</button>
            <button onclick='event_doc(5)'  class='btn btn-success m-2'>line up fertilizer</button>
            <button onclick='event_doc(6)'  class='btn btn-success m-2'>line up soufre</button>
            <button onclick='event_doc(7)'  class='btn btn-success m-2'>line up grain</button>
            <button onclick='event_doc(9)'  class='btn btn-success m-2'>line up tankers</button>
            <button onclick='event_doc(3)'  class='btn btn-success m-2'>Line up at bulk terminals at Jorf Lasfar</button>
       </div>
   
</div>



<div class='w-100 bar_1 p-2 text-white'>
    <h5>LINE UPS</h5>
</div>


<!--we have 7 line up , all looks the same  -->

<div>
    <!-- after we get the data from DB we will loop truth them and show it in the table  -->
    <?php include 'lineUp.php'; ?>
</div>













