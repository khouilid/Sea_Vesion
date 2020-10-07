<div class='d-flex'>
       <div class='d-flex m-3 w-100 line_ups_menu'>
            <!-- <button onclick='event_doc(8)'  class='btn btn-success m-2'></button> -->

            <button onclick='DailyLineUps("fertilizer", 5)'  class='btn btn-success m-2'>line up fertilizer</button>
            <button onclick='DailyLineUps("SULPHUR", 6)'  class='btn btn-success m-2'>line up soufre</button>
            <button onclick='DailyLineUps("Tanker", 9)'  class='btn btn-success m-2'>line up tankers</button>
            
            <button onclick='DailyLineUps("General", 4)' class='btn btn-success m-2'>line up general</button>
            <button onclick='DailyLineUps("Grain", 7)'  class='btn btn-success m-2'>line up grain</button>
            <button onclick='DailyLineUps("Bulk_terminal", 3)'  class='btn btn-success m-2'>Line up at bulk terminals at Jorf Lasfar</button>

            <div class="input-group-prepend">
            
                <button class="btn btn-success m-2 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">line ups</button>
                
                <div class="dropdown-menu">

                    <p class="dropdown-item" onclick='DailyLineUps("CASABLANCA", 3)'>CASABLANCA</p>
                    <p class="dropdown-item" onclick='DailyLineUps("SAFI", 3)'>SAFI</p>
                    <p class="dropdown-item" onclick='DailyLineUps("LAAYOUNE", 3)'>LAAYOUNE</p>
                    <p class="dropdown-item" onclick='DailyLineUps("LJORF_FERT", 3)'>JORF LASFAR FERTILIZER</p>
                    <p class="dropdown-item" onclick='DailyLineUps("LJORF_NOT_FERT", 3)'>JORF LASFAR OTHER BERTHS</p>         
                
                </div>

            </div>

       </div>
   
</div>



<div class='w-100 bar_1 p-2 text-white'>
    <h5>LINE UPS</h5>
</div>




<div id='lineUpContent'>
    <!-- after we get the data from DB we will loop truth them and show it in the table  -->
</div>
<!-- <div class="m-4 " ><button class="btn float-right btn-success">Download</button></div> -->













