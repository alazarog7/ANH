$(document).ready(function () {
    $('#bus-familia').hide()
    $('#bus-dispositivo').hide()
    $('#btn-bus-familia-hide').hide()
    $('#btn-bus-dispositivos-hide').hide()

    $('#btn-bus-familia').on('click',function () {
        $('#bus-familia').show()
        $('#btn-bus-familia-hide').show()
        $('#btn-bus-familia').hide()
    })
    $('#btn-bus-dispositivos').on('click',function () {
        $('#bus-dispositivo').show()
        $('#btn-bus-dispositivos-hide').show()
        $('#btn-bus-dispositivos').hide()
    })
    var values = new Array();
    $('#bus-familia').children('option').each(function() {
        var text = $(this).text();
        if (values.indexOf(text) === -1) {
            values.push(text);
        } else {
            //  Its a duplicate
            $(this).remove()
        }
    })
    $('#bus-familia').on('change',function () {
        /*$('#bus-dispositivo').hide()
        $('#btn-bus-dispositivo').show()
        $('#btn-bus-dispositivos-hide').hide()*/
        var value = $(this).val().toUpperCase();
        //console.log(value);
        $('#my_table tr').filter(function(){
            $(this).toggle($(this).text().indexOf(value) > -1)
        })
    })
    $('#bus-dispositivo').on('keyup',function () {
        /*$('#bus-familia').hide()
        $('#btn-bus-familia-hide').hide()*/
        var value = $(this).val().toUpperCase();
        //console.log(value);
        $('#my_table tr').filter(function(){
            $(this).toggle($(this).text().indexOf(value) > -1)
        })
    })
    $('#btn-bus-familia-hide').on('click',function () {
        $('#bus-familia').hide()
        $('#btn-bus-familia-hide').hide()
        $('#btn-bus-familia').show()
    })
    $('#btn-bus-dispositivos-hide').on('click',function () {
        $('#bus-dispositivo').hide()
        $('#btn-bus-dispositivos-hide').hide()
        $('#btn-bus-dispositivos').show()
    })
    function busqHistoricos(){
        $('#bus-historico').hide()
        $('#btn-bus-historico').on('click',function () {
            $('#bus-historico').slideToggle()
        })
        $('#bus-historico').on('keyup',function () {
            var value = $(this).val().toUpperCase()
            $('#my_table tr ').filter(function () {
                $(this).toggle(
                    $(this).text().indexOf(value) > -1
                )
            })
        })
    }
    busqHistoricos();

})