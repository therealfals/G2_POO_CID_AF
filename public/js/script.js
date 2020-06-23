$('#bourse').focusout(function(){
    if($('#bourse').val()=='1'){
        var input=document.createElement('input')
        input.setAttribute('type','text')
        input.setAttribute('name','adresse')
        input.setAttribute('class','formcontrol')
        $('#div').append(input)
    }
})