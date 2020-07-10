let all_info = document.getElementById('all_info');
let info = document.getElementById('info');
let overviews = document.getElementById('overview_btn');
let all_navire_programs = document.getElementById('all_navire_programs');
let N_program = document.getElementById('N_program');
let Vessel_program = document.getElementById('Vessel_program');
let Vessel_program_btn = document.getElementById('Vessel_program_btn');
let Overview = document.getElementById('Overview');


// vessel program dashbord show all vessels

function update_program(){
    all_navire_programs.style.display =' none';
    N_program.style.display ='block';
}
// back to all vessels
function back_program(){
    all_navire_programs.style.display =' block';
    N_program.style.display ='none';
}





// Overview dashbord 
function show_all_info(){
    info.style.display = 'none'
    all_info.style.display = 'block'

}
// show detailes info
function all_navires(){
    info.style.display = 'block'
    all_info.style.display = 'none'
}




// menu function 

function menu(Num){
    if(Num == 1){
    Vessel_program.style.display = 'none'
    Overview.style.display = 'block'

    }else if(Num == 2){
        Vessel_program.style.display = 'block'
        Overview.style.display = 'none'
    }
}

// input for searching an Navire

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
