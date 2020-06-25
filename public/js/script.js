$('#bourse').focusout(function(){
    if($('#bourse').val()=='aucune'){
        $('#div').html('');
        $('#dive').html('');
        var input=document.createElement('input')
        input.setAttribute('type','text')
        input.setAttribute('name','adresse')
        input.setAttribute('class','form-control border border-primary bg bg-dark text-white rounded rounded-pill')
        $('#div').append(input)
    }
    if($('#bourse').val()=='20000' || $('#bourse').val()=='40000'){
        $('#div').html('');
        $('#dive').html('');
        var input=document.createElement('input')
        input.setAttribute('type','text')
        input.setAttribute('name','adresse')
        input.setAttribute('class','form-control float-left border border-primary bg bg-dark text-white rounded rounded-pill')
        var radio=document.createElement('input')
        radio.setAttribute('type','radio')
        radio.setAttribute('name','loge')
        radio.setAttribute('value','no')

        radio.setAttribute('class','form-inline float-right ')
        radio.setAttribute('onChange','teste(this)')

        radio.setAttribute('id','loge ')
        var checkbox=document.createElement('input')
        checkbox.setAttribute('type','radio')
        checkbox.setAttribute('name','loge')
        checkbox.setAttribute('value','yes')

        checkbox.setAttribute('class','form-inline float-right ')
        checkbox.setAttribute('onChange','teste(this)')

        checkbox.setAttribute('id','loge ')
     //   $('#div').append(input)
        $('#div').append(checkbox)
        $('#div').append(radio)

    }
 

})
function teste(e){
   var p= e.getAttribute('value')
   if(p=='yes'){
    $('#dive').html('');
var y=4;
    $.ajax({
        method:"POST",
        url:"http://localhost/G2_POO_CID_AF/etudiant/listeNum",
        data:{search:y},
        dataType:'JSON',
        success:function(data){
            console.log(data);
            var select=document.createElement('select')
            select.setAttribute('name','list')
            for (let i = 0; i < data[0].length; i++) {
               var option=document.createElement('option')
               option.setAttribute('value',data[0][i].id)
               option.innerText=data[0][i].type
                select.append(option)
                
            }
            for (let i = 0; i < data[1].length; i++) {
                var option=document.createElement('option')
                option.setAttribute('value',data[1][i].id)
                option.innerText=data[1][i].type
                 select.append(option)
                 
             }
            $('#dive').append(select)
        }
    })

   }
   if(p=='no'){
    $('#dive').html('');
    var input=document.createElement('input')
    input.setAttribute('type','text')
    input.setAttribute('name','adresse')
    input.setAttribute('class','form-control border border-primary bg bg-dark text-white rounded rounded-pill')
    $('#dive').append(input)
   }
}