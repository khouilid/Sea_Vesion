let all_info = document.getElementById('all_info');
let info = document.getElementById('info');
let overviews = document.getElementById('overview_btn');
let all_navire_programs = document.getElementById('all_navire_programs');
let N_program = document.getElementById('N_program');
let Vessel_program = document.getElementById('Vessel_program');
let Vessel_program_btn = document.getElementById('Vessel_program_btn');
let Overview = document.getElementById('Overview');
let Operation = document.getElementById('Operation');
let operation_details = document.getElementById('operation_details');
let all_Vessel_operation = document.getElementById('all_Vessel_operation');
let line_up1 = document.getElementById('line_up1');
let Evant = document.getElementById('Evant');
let Document = document.getElementById('Document');
let add = document.getElementById("principals");

let new_vessel = document.getElementById('line_up');


// line up dashbord 
// this function will addnew input when user clcik 'add principa'
function add_principal() {
    let div = `<div class='d-flex flex-wrap'>
    <input type="text" name="Principals_names[]" class="form-control widthh  m-1" placeholder='Full Name'>
    <input type="email" name="Principal_mails[]" class="form-control widthh  m-1" placeholder='E-mail'>
    </div>`;
    return add.insertAdjacentHTML("beforeend", div)
};



// show cargo when user chose if inport or export
function decide_cargo(sel) {
    let option_1 = `<option value="FERTILIZER">FERTILIZER</option><option value="PHOSPHATE">PHOSPHATE </option>`;
    let option_2 = `<option value="SULPHUR">SULPHUR</option>`;

    if(sel == 2) {
        document.getElementById('cargo').innerHTML = option_1;
    }else if (sel == 1) {
        document.getElementById('cargo').innerHTML = option_2;

    }
}


// vessel program dashbord show all vessels
function Get_info(id) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
       }
    };
    xmlhttp.open("GET", "../Control/Get.vessel.info.php?id=" + id, true);
    xmlhttp.send();
    update_program();

}

function update_program(){
    
    all_navire_programs.style.display =' none';
    N_program.style.display ='block';

}
// back to all vessels
function back_Arrow(v){
    if(v == 1){
        all_navire_programs.style.display =' block';
        N_program.style.display ='none';
    }else if(v == 2){
        info.style.display = 'block'
        all_info.style.display = 'none'
    }else if (v == 3){
        all_Vessel_operation.style.display ='block '
        operation_details.style.display ='none'
    }else if (v == 4){
        new_vessel.style.display = 'none'
        Overview.style.display = 'block'
    }
}







// Overview dashbord 
function show_all_info(){
    info.style.display = 'none'
    all_info.style.display = 'block'

}


function update_operation(){
    all_Vessel_operation.style.display ='none'
    operation_details.style.display ='block '
}

// add new vessel 

// menu function 

function menu(Num){
    if(Num == 1){
        Vessel_program.style.display = 'none';
        Operation.style.display = 'none';
        Overview.style.display = 'block';
        line_up1.style.display = 'none';
        new_vessel.style.display = 'none';

    }else if(Num == 2){
        Vessel_program.style.display = 'block'
        Operation.style.display = 'none';
        Overview.style.display = 'none';
        line_up1.style.display = 'none';
        new_vessel.style.display = 'none';

    }else if(Num == 4){
        Vessel_program.style.display = 'none';
        Operation.style.display = 'block'
        Overview.style.display = 'none';
        line_up1.style.display = 'none';
        new_vessel.style.display = 'none';
 
    }else if(Num == 5){;
        new_vessel.style.display = 'block';
        Overview.style.display = 'none';
        
    }else if(Num == 6){
        Vessel_program.style.display = 'none';
        Operation.style.display = 'none';
        Overview.style.display = 'none';
        line_up1.style.display = 'block';
        new_vessel.style.display = 'none';

    }
}

// input for vessels searching 

function searsh(id1 , id2) {
    $(id1).on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $(id2 + " tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
$(document).ready(searsh("#myInput", '#myTable'));
$(document).ready(searsh("#myInput2", '#myTable2'));
$(document).ready(searsh("#myInput3", '#myTable3'));





function event_doc(btn){
    if(btn == 1){
        Evant.style.display = 'block';
        Document.style.display = 'none';
    }else if(btn == 2){
        Evant.style.display = 'none';
        Document.style.display = 'block';
    }
}



