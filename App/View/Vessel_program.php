

<div   id='all_navire_programs' >
        <div class='sraech_input d-flex justify-content-between m-3 rounded-sm align-items-center'>
            <input id='myInput' class='p-2' type="text" name="" id="" placeholder='Search'>
            <h3 class="m-0 text-center d-flex justify-content-center text-white align-items-center"><i class="fas fa-search"></i></h3>
        </div>
        <div class='w-100 bar_1 p-2 text-white'>
            <h5>VESSEL PROGRAME</h5>
        </div>
        <!-- all navire -->
        <div  id='program_info'  class='table-responsive-sm m-0 table-responsive-md'>
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
            <tbody id="myTable">
                
                <tr >
                <th scope="row">1</th>
                <td>2020/07.10 22:33</td>
                <td>2020/07.10 22:33</td>
                <td>2020/07.10 22:33</td>
                <td><button onclick='update_program()' class='btn btn-success'>Show All</button></td>
                </tr>
            
            </tbody>
            </table>
        </div>
</div>



<div style='display:none;'  id='N_program' >
    <div class='w-100 m-3 bg-light rounded shadow-sm p-3 d-flex align-items-center'>
        <h3 class='m-0'><i class="far fa-check-circle mr-3 ml-3 text-success"></i></h3>
        <p class='m-0'>YOU CAN PRESS UPDATE IF YOU MADE ANY CHANGES  </p>
        <h3 class='m-0'><i class="text-success far fa-check-circle mr-3 ml-3"></i></h3>
        <p class='m-0'>WHEN YOU CLICK UPDATE WE WILL SEND EMAILS INTO THE CLIENTS</p>
    </div>
        <div class='w-100 bar_1 p-2 text-white'>
            <h5>VESSEL PROGRAME</h5>
        </div>
    <div>
        <div class='w-100 p-2 text-white bg-orange d-flex justify-content-around'>
            <h6>Job ID: </h6>
            <h6>Port: </h6>
            <h6>Vessel: </h6>
            <h6>Principal: </h6>
        </div>
    </div>
    <div>
        <h1 onclick='back_program()'><i class="fas ml-3 mt-3 fa-arrow-left"></i></h1>
    </div>

    <div class='d-flex flex-wrap justify-content-around'>
    
            <div class="bg-light program_card  m-4 p-2 shadow-sm rounded">
                <p class='ml-3'>ETA</p>
                <div class=' d-flex'>
                    <input class=" m-3 w-50 form-control" type="date" name="" id="">
                    <input class=" m-3 w-50 form-control" type="time" name="" id="">
                </div>
                <div class='m-3'>
                    <textarea class='form-control' name="" id="" cols="30" rows="2" placeholder='Comment'></textarea>
                </div>
            </div>
            <div class="bg-light program_card  m-4 p-2 shadow-sm rounded">
                <p class='ml-3'>ETC</p>
                <div class=' d-flex'>
                    <input class=" m-3 w-50 form-control" type="date" name="" id="">
                    <input class=" m-3 w-50 form-control" type="time" name="" id="">
                </div>
                <div class='m-3'>
                    <textarea class='form-control' name="" id="" cols="30" rows="2" placeholder='Comment'></textarea>
                </div>
            </div>
            <div class="bg-light program_card  m-4 p-2 shadow-sm rounded">
                <p class='ml-3'>ETD</p>
                <div class=' d-flex'>
                    <input class=" m-3 w-50 form-control" type="date" name="" id="">
                    <input class=" m-3 w-50 form-control" type="time" name="" id="">
                </div>
                <div class='m-3'>
                    <textarea class='form-control' name="" id="" cols="30" rows="2" placeholder='Comment'></textarea>
                </div>
            </div>
    
    </div>
    <div class='d-flex flex-wrap justify-content-center'>

        <button class='btn btn-success m-3'>Update And Send emails</button>
    </div>
</div>
