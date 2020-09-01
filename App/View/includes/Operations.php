<div    id='all_Vessel_operation' >
        <div class='sraech_input d-flex justify-content-between m-3 rounded-sm align-items-center'>
            <input id='myInput3' class='p-2' type="text" name=""  placeholder='Search'>
            <h3 class="m-0 text-center d-flex justify-content-center text-white align-items-center"><i class="fas fa-search"></i></h3>
        </div>
        <div class='w-100 bar_1 p-2 text-white'>
            <h5>OPERATIONS</h5>
        </div>
        <!-- all navire -->
        <div  id='operation_info'  class='table-responsive-sm m-0 table-responsive-md'>
            <table class="table table-hover " >
            <thead class="thead-dark1 ">
                <tr class="text-white">
                <th scope="col">Job ID:</th>
                <th scope="col">ETA</th>
                <th scope="col">ETC</th>
                <th scope="col">ETD</th>
            
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="myTable3">
                  
            <?php  
              $list = new Show_list;
              $list = $list->Get_vessels_times(2);
            ?>
            
            </tbody>
            </table>
        </div>
</div>





<div style='display:none;' id='operation_details'>
  <form action="../Control/Update.operations.php" method='POST'>
    <div class='d-flex'>
       <div class='d-flex m-3'>
       <button onclick='event_doc(1)' class='btn btn-success m-2'>Event</button>
        <button onclick='event_doc(2)'  class='btn btn-success m-2'>Document</button>
       </div>
        <div class=' m-3 bg-light rounded shadow-sm p-2 d-flex align-items-center'>
        <h3 class='m-0'><i class="far fa-check-circle mr-3 ml-3 text-success"></i></h3>
        <p class='m-0 pr-3'>YOU CAN PRESS UPDATE IF YOU MADE ANY CHANGES</p>
    </div>
    </div>
    <div class='w-100 bar_1 p-2 text-white'>
            <h5>OPERATIONS</h5>
    </div>
    <div id='demo_2' class=' w-100 p-2 text-white bg-orange d-flex justify-content-around'>
          
    </div>



  <div id='Evant' >

<div class='w-100 bar_1 text-center p-2 text-white'>
        <h5>PORT LOG</h5>
</div>

<div>
    <h1 onclick='back_Arrow(3)'><i class=" fas ml-3 mt-3 fa-arrow-left"></i></h1>
</div>


<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>EOSP</p>
        <input class='form-control widthh m-2 ' type="date" name="EOSP[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="EOSP[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="EOSP[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>DROPPED ANCHORAGE</p>
        <input class='form-control widthh m-2 ' type="date" name="DROPPED_ANCHORAGE[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="DROPPED_ANCHORAGE[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="DROPPED_ANCHORAGE[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>HAVED UP ANCHOR</p>
        <input class='form-control widthh m-2 ' type="date" name="HAVED_UP_ANCHOR[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="HAVED_UP_ANCHOR[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="HAVED_UP_ANCHOR[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>PILOT ON BOARD</p>
        <input class='form-control widthh m-2 ' type="date" name="PILOT_ON_BOARD_1[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="PILOT_ON_BOARD_1[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="PILOT_ON_BOARD_1[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>FIRST LINE ASHORE</p>
        <input class='form-control widthh m-2 ' type="date" name="FIRST_LINE_ASHORE[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="FIRST_LINE_ASHORE[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="FIRST_LINE_ASHORE[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>ALL FAST</p>
        <input class='form-control widthh m-2 ' type="date" name="ALL_FAST[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="ALL_FAST[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="ALL_FAST[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>PILOT OFF</p>
        <input class='form-control widthh m-2 ' type="date" name="PILOT_OFF_1[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="PILOT_OFF_1[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="PILOT_OFF_1[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>GANGWAY READY</p>
        <input class='form-control widthh m-2 ' type="date" name="GANGWAY_READY[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="GANGWAY_READY[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="GANGWAY_READY[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>COMMENCED DISCHARGING</p>
        <input class='form-control widthh m-2 ' type="date" name="COMMENCED_DISCHARGING[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="COMMENCED_DISCHARGING[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="COMMENCED_DISCHARGING[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>COMPLETED DISCHARGING</p>
        <input class='form-control widthh m-2 ' type="date" name="COMPLETED_DISCHARGING[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="COMPLETED_DISCHARGING[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="COMPLETED_DISCHARGING[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>PILOT ON BOARD</p>
        <input class='form-control widthh m-2 ' type="date" name="PILOT_ON_BOARD_2[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="PILOT_ON_BOARD_2[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="PILOT_ON_BOARD_2[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>SAILING</p>
        <input class='form-control widthh m-2 ' type="date" name="SAILING[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="SAILING[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="SAILING[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>PILOT OFF</p>
        <input class='form-control widthh m-2 ' type="date" name="PILOT_OFF_2[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <input class='form-control widthh m-2' type="time" name="PILOT_OFF_2[]" >
    </div>
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="PILOT_OFF_2[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>NUMBER TUGS ENTRY</p>
        <input class='form-control widthh m-2 ' type="number" name="NUMBER_TUGS_ENTRY[]" >
    </div>
  
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="NUMBER_TUGS_ENTRY[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>
<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>NUMBER TUGS SAILING</p>
        <input class='form-control widthh m-2 ' type="number" name="NUMBER_TUGS_SAILING[]" >
    </div>
   
    <div>
    <p class='m-0'> .</p>
        <textarea class='form-control m-2' name="NUMBER_TUGS_SAILING[]"  cols="60" placeholder='Comment'></textarea>
    </div>

</div>

<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>SAILING DRAFTS</p>
        <input class='form-control widthh m-2 ' type="number" name="SAILING_DRAFTS[]" placeholder='FORE' >
    </div>
    <div>
        <p class='m-0'>.</p>
        <input class='form-control widthh m-2 ' type="number" name="SAILING_DRAFTS[]" placeholder='AFT' >
    </div>
  

</div>


<div class='m-3 d-flex flex-wrap'>
    <div>
        <p class='m-0'>BUNKERS ON SAILING</p>
        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_SAILING[]" placeholder='FO' >
    </div>
    <div>
        <p class='m-0'>.</p>
        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_SAILING[]" placeholder='DO' >
    </div>
    <div>
        <p class='m-0'>.</p>
        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_SAILING[]" placeholder='FW' >
    </div>
    <div>
        <p class='m-0'>.</p>
        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_SAILING[]" placeholder='LO' >
    </div>
  

</div>


<div class='w-100 bar_1 p-2 text-white'>
        <h5>OPERATIONS</h5>
</div>

<div class='d-flex flex-wrap'>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" value="GARBAGE" name='SERVICES[]' id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
        GARBAGE 
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='CREW CHANGE' id="defaultCheck2">
        <label class="form-check-label" for="defaultCheck2">
        CREW CHANGE
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='SLUDGE' id="defaultCheck3">
        <label class="form-check-label" for="defaultCheck3">
        SLUDGE
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='DOCTOR VISIT' id="defaultCheck4">
        <label class="form-check-label" for="defaultCheck4">
        DOCTOR VISIT
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='FRESH WATER' id="defaultCheck5">
        <label class="form-check-label" for="defaultCheck5">
        FRESH WATER
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='PROVISION' id="defaultCheck6">
        <label class="form-check-label" for="defaultCheck6">
        PROVISION
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='CTM' id="defaultCheck7">
        <label class="form-check-label" for="defaultCheck7">
        CTM
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='WACHMAN' id="defaultCheck8">
        <label class="form-check-label" for="defaultCheck8">
        WACHMAN
        </label>
    </div>
    <div class="form-check m-3">
        <input class="form-check-input" type="checkbox" name='SERVICES[]' value='DIVER' id="defaultCheck9">
        <input hidden class="form-check-input" type="checkbox" checked name='SERVICES[]' value='1' >
        <label class="form-check-label" for="defaultCheck9">
        DIVER
        </label>
    </div>
</div>

<div class='d-flex flex-wrap justify-content-center'>

    <button type='submit' class='btn btn-success m-3'>Update</button>
</div>
</div>
</form>
    <div id='Document' style='display:none;'>

    <div class='d-flex flex-wrap'>
    <div class='d-flex bg-light rounded-md m-3 p-2 shadow-sm flex-wrap files align-items-center'> 
           <h3><i class="fas fa-file-excel"></i></h3>
           <p class='m-2'>PORT LOG VIERGE.XLSX</p>
           <h3 class='btn'><i class="fas fa-download"></i></h3>
       </div>
    
    </div>




         <div class="d-flex justify-content-center">
                <div class="input-group upload_files w-50 w-md-100">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                    </div>
                </div>
         </div>

    </div>


    
</div>