
$(document).ready(function(){
    getData();

});

$('#userTable').DataTable({

});

function getData(){
    $.ajax({
        url: 'getdata.php',
        dataType: 'html',
        type: 'POST',
        success: function(data, status){
            // console.log(data)
            $('.my-table').empty().append(data);
        }
    });
}

function addUser(){
    $('#addUser').on('click', function(event){
        event.preventDefault();  
        const newFirstname = $('#firstname').val();
        const newLastname = $('#lastname').val();
        const newMail = $('#mail').val();
        const newPassword = $('#password').val();

        if(newFirstname == '' || newLastname == '' || newMail =='' || newPassword =='' ) {
            alert("Please fill all fields.");
            return false;
        }
        $.ajax({
            url: 'adddata.php',
            type: 'POST',
            data: {
                firstname: newFirstname,
                lastname: newLastname,
                mail: newMail,
                password: newPassword
            },
            success: function(data, status){
                // console.log(data)
                // console.log(status)
            }
        });
        
    })
}
addUser();

function editUser(valueId){
    $(".editMail").css('visibility', 'hidden');
    $(".editPassword").css('visibility', 'hidden');

    $(".editMail[data-id='" + valueId +"']").css('visibility', 'visible');
    $(".editPassword[data-id='" + valueId +"']").css('visibility', 'visible');
}

editUser();

function saveUser(valueId, valueMail , valuePassword){
    // console.log(valueId , valueMail, valuePassword)


    let newMail = $(".editMail[data-id='" + valueId +"']").val();;
    let newPassword = $(".editPassword[data-id='" + valueId +"']").val();

    if(newMail =='' || newPassword =='' ) {
        alert("Please fill all fields.");
        return false;
    }
    

    // console.log(newMail, newPassword)

    $.ajax({
        url: 'edit.php',
        type: 'POST',
        data: {
            mail: newMail,
            password: newPassword
        },
        success: function(data, status){
            // console.log(data)
            // console.log(status)
        }
    });
}

saveUser();