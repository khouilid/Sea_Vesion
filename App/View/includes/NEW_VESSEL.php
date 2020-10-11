<div class='d-flex'>
    <div class=' m-3 bg-light rounded shadow-sm p-2 d-flex align-items-center'>
        <h3 class='m-0'><i class="far fa-check-circle mr-3 ml-3 text-success"></i></h3>
        <p class='m-0 pr-3'>YOU CAN PRESS ADD VESSEL WHEN COMPLATE ALL INFORMATIONS</p>
    </div>
</div>
<div class='w-100 bar_1 p-2 text-white'>
    <h5>NEW VESSEL</h5>
</div>
<form action="../Control/New.vessel.php" method='POST'>

<div>
    <!-- info -->
    <div class="m-3">
        <h1 onclick='back_Arrow(4)'><i class="fas fa-arrow-left" ></i></h1>
    </div>
    <div class='card m-3 shadow-sm '>
    <div class='text-center p-2  bg-success title_up text-light'>
                   <h5>Agent informations</h5>
        </div>
        <div class=''>
             <div class="m-3">
                <p class="m-0">Performing Agent:</p>
                <input type="text" name="Agent" class="form-control widthh  m-0" placeholder='Performing Agent'>
            </div>
            <div class="m-3">
                <p class="m-0">Principal:</p>
                <div class='d-flex flex-wrap' >
                    <input type="text" name="Principals_names[]" class="form-control widthh  m-1" placeholder='Full Name'>
                    <input type="email" name="Principal_mails[]" class="form-control widthh  m-1" placeholder='E-mail'>
                </div>
            </div>
            <div class="m-3" id='principals'>
                <p class="m-0">Principal main contact:</p>
                <div class='d-flex flex-wrap' >
                    <input type="text" name="Principals_names[]" class="form-control widthh  m-1" placeholder='Full Name'>
                    <input type="email" name="Principal_mails[]" class="form-control widthh  m-1" placeholder='E-mail'>
                </div>
            </div>
            <div class="d-flex justify-content-end">

                <button onclick='add_principal()' type='button' class="btn btn-success title_up  m-3"><i class="fas fa-user-plus mr-2" ></i>Add Principal</button>
            </div>
           
        <div class='text-center p-2  bg-orange title_up text-white'>
            <h5>informations</h5>
        </div>
        <div class='d-flex flex-wrap'>
        <div class='m-3'>
            <p class="m-0">Work with</p>
                <select class="custom-select widthh" name='WORK_WITH'>
                    <!-- <option ></option> -->
                    <option value="1" selected>Us</option>
                    <option value="2">Other agence</option>
                    
                </select>
            </div>
            <div class="m-3">
                <p class="m-0">Vessel</p>
                <input type="text" name="Vessel" class="form-control widthh  m-0" placeholder='Vessel name'>
            </div>
           
            <div class="m-3">
                <p class="m-0">Port</p>
                <select class="custom-select widthh" name="Port" >
                    <option selected disabled>Ports</option>
                    <option value="CASABLANCA">CASABLANCA</option>
                    <option value="JORF LASFAR">JORF LASFAR</option>
                    <option value="SAFI">SAFI</option>
                    <option value="LAAYOUNE">LAAYOUNE</option>
                    
                </select>
            </div>
            <div class='m-3'>
            <p class="m-0">IMPORT/EXPORT</p>
                <select class="custom-select widthh" name='IMPORT_EXPORT' onclick=' decide_cargo(this.value)'>
                    <option selected></option>
                    <option value="1">IMPORT</option>
                    <option value="2">EXPORT</option>
                    
                </select>
            </div>
        
            <div class='m-3'>
            <p class="m-0">CARGO</p>
                <select name='CARGO' class="custom-select widthh" id='cargo'>
                    <option selected>CARGO</option>
                    
                </select>
            </div>
            <div class='m-3 d-flex flex-wrap'>
                    <div>
                        <p class='m-0'>B/L QTY(MT) :</p>
                        <input class='form-control widthh m-2 ' name='QTY' type="number" name="" placeholder=' 67,438.281' 
                        >
                    </div>  
            </div>
            <div class='m-3 d-flex flex-wrap'>
                    <div>
                        <p class='m-0'>DESTINATION :</p>
                        <input class='form-control widthh m-2 ' name='DESTINATION' type="text"  placeholder=' USA' 
                        >
                    </div>  
            </div>

            <div class='m-3 d-flex flex-wrap'>
                    <div>
                        <p class='m-0'>ETA</p>
                        <input class='form-control widthh m-2 ' type="date" name="ETA[]" 
                        >
                    </div>
                    <div>
                    <p class='m-0'> .</p>
                        <input class='form-control widthh m-2' type="time" name="ETA[]" 
                        >
                    </div>
                    <div>
                    <p class='m-0'> .</p>
                        <textarea class='form-control m-2' name="ETA_Comment" 
                         cols="60" placeholder='Comment'></textarea>
                    </div>
            
                </div>

            <div class='m-3 d-flex flex-wrap'>
                    <div>
                        <p class='m-0'>ARRIVAL DRAFTS</p>
                        <input class='form-control widthh m-2 ' type="number" name="ARRIVAL_DRAFTS[]" placeholder='FORE' 
                        >
                    </div>
                    <div>
                        <p class='m-0'>.</p>
                        <input class='form-control widthh m-2 ' type="number" name="ARRIVAL_DRAFTS[]" placeholder='AFT' 
                        >
                    </div>
                   
            
                </div>
                <div class='m-3 d-flex flex-wrap'>
                    <div>
                        <p class='m-0'>BUNKERS ON ARRIVAL</p>
                        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_ARRIVAL[]" placeholder='FO' 
                        >
                    </div>
                    <div>
                        <p class='m-0'>.</p>
                        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_ARRIVAL[]" placeholder='DO' 
                        >
                    </div>
                    <div>
                        <p class='m-0'>.</p>
                        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_ARRIVAL[]" placeholder='FW' 
                        >
                    </div>
                    <div>
                        <p class='m-0'>.</p>
                        <input class='form-control widthh m-2 ' type="number" name="BUNKERS_ON_ARRIVAL[]" placeholder='LO' 
                        >
                    </div>
                  
            
                </div>
        


               
               
           </div>
       
        </div>
        <div class="d-flex justify-content-end">

            <button  type='submit' class="btn btn-success  title_up  m-3"><i class="fas fa-plus mr-2"></i>Add Vessel</button>
        </div>
           

    </div>
    <!-- principals -->
    <div>


    </div>

</div>
</form>