<div id='search_input' class='sraech_input d-flex justify-content-between m-3 rounded-sm align-items-center'>
    <input id="myInput2" class='p-2' type="text" name="" id="" placeholder='Search'>
    <h3 class="m-0 text-center d-flex justify-content-center text-white align-items-center"><i class="fas fa-search"></i></h3>
</div>
<div class='w-100 bar_1 p-2 text-white d-flex justify-content-between'>
    <h5>Overview</h5>
    <button class='text-white btn btn-success ' onclick='menu(5)'><i class="fas fa-plus mr-2" ></i>NEW VESSEL</button>
</div>

<!-- all navire -->
<div  id='info'  class='table-responsive-sm m-0 table-responsive-md'>
    <table class="table table-hover ">
    <thead class="thead-dark1 ">
        <tr class="text-white">
        <th scope="col">Job ID:</th>
        <th scope="col">Port:</th>
        <th scope="col">Vessel:</th>
        <th scope="col">Principal:</th>
        <th scope="col">Agent</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody id='myTable2'>       
          <?php  
              $list = new Show_list;
              $list = $list->Get_vessels_lists();
          ?>
    </tbody>
    </table>
</div>



<!-- show all into -->
<div class='m-3' id='all_info' style='display:none;'>

</div>




