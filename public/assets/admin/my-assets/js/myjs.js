$("#thongbao").delay(3000).slideUp();
$(document).ready( function() {
//add practice question
$(document).on("click", "#add-item", function() {
	//$(".show-item").append($(".wrap-item").html());
    var html = "<tr>\n\
                    <td class='next-step-item'></td>\n\
                    <td><input class='form-control' type='text' name='questions[]' required='required'></td>\n\
                    <td><input class='form-control' type='text' name='answers[]' required='required'></td>\n\
                    <td class='center'>\n\
                        <a class='btn btn-default btn-xs action' id='add-item'  href='javascript:void(0)' title='Add Item'><i class='fa fa-plus'></i></a>\n\
                        <a class='btn btn-default btn-xs action remove-this-step-item' href='javascript:void(0)' title='Delete Item'><i class='fa fa-minus'></i></a>\n\
                    </td></tr>";
    $(".show-item").append(html);
});

//practice image
$(document).on("click",".add-practice-image-button",function(){
    var theRel = Math.floor(Math.random() * 100000);/*Important this value will be store in the id#hiddenInputName*/
    var html = "<tr class='"+theRel+"'>\n\
                    <td class='next-step-item'></td>\n\
                    <td class='td"+theRel+"'><a class='btn bnt-default btnUploadImage' href='javascript:void(0)' rel='"+theRel+"'><i class='fa fa-upload'></i></a><span class='wrap-question-image'></span><input class='form-control question-"+theRel+"' type='hidden' name='questions[]' required='required'></td>\n\
                    <td><input class='form-control' type='text' name='answers[]' required='required'></td>\n\
                    <td class='center'>\n\
                        <a class='btn btn-default btn-xs action add-practice-image-button' href='javascript:void(0)' title='Add Item'><i class='fa fa-plus'></i></a>\n\
                        <a class='btn btn-default btn-xs action remove-this-step-item' href='javascript:void(0)' title='Delete Item'><i class='fa fa-minus'></i></a>\n\
                    </td></tr>";
    $(".show-item").append(html);
})

//upload file
    $(document).on('click', '.btnUploadImage', (function (e) {
        var rel = $(this).attr('rel');
        $("#imageUploadForm #hiddenInputName").val(rel);
       /* if (checkLimitUpload(rel) == false) {
        alert("Remove current image before upload new image");
        }
        else {
        $('#imageUploadForm #file').trigger('click');
        }*/
           $('#imageUploadForm #file').trigger('click');

    }));

    $('#imageUploadForm').on('submit', (function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        var elementReturn = $('#hiddenInputName').val();
        // alert('elementReturn'+elementReturn);
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.error != 0) {
                    console.log(data);
                    alert('upload pictures failed, please try again');
                } else {
                    addImage(elementReturn, data);
                }
            },
            error: function (data) {
            }
        });
        $(this).trigger('reset');
        return false;
    }));


$(document).on("click", "#add-item-image", function() {
	$(".show-item-image").append($(".wrap-item-image").html());
});
//end add practice question

$(document).on("click", ".remove-this-step-item", function() {
       $(this).closest('tr').remove();
});

    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imgInp").change(function(){
        readURL(this);
    });
    $(document).on("click", "#clear", function() {
        var elmnPrev = this.previousSibling;
        //console.log(elmn);
        //var nextSibling = div.nextSibling;
        while(elmnPrev && elmnPrev.nodeType != 1) {
            elmnPrev = elmnPrev.previousSibling
        }
        //console.log(elmnPrev);
        //alert(elmn.getAttribute('class'));
        var iNumber = elmnPrev.getAttribute('id').slice(-1);
        var idElmn = '#list'+iNumber;
        //console.log(idElmn);

        $(idElmn+' img').attr('src','');
        $(idElmn+' span').remove();
    });
    $("#clear").click(function(){
        $('#img-upload').attr('src','');
        $('#urlname').val('');
    });

    //add row paymentplan
    jQuery('#btnAddRow').on('click', function () {
        var html = "<tr>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='stripe[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='stripeCouponCode[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='price[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='firstPaymentPrice[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='title[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='month[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='paypal[]' required='required'/></td>\n\
<td><input type='text' class='form-control col-md-7 col-xs-12' name='firstPaymentPaypal[]' required='required'/></td>\n\
<td><a href='javascript:void(0)' class='btn btn-danger' id='btnRemoveRow' onclick='onRemove(this)'>Remove</a></td></tr>";
        jQuery('.plans-table tbody').append(html);
    });
});

//remove row paymentplan
function onRemove(elmt){
    jQuery(elmt).parent().parent().remove();
}

$(document).ready(function(){
    $("#show-practice").hide();
    $("#show-exam").hide();
    $(".show-tab-abacus-movement").hide();
    var learnItem = $("#show-learn").html();
    var practiceItem = $("#show-practice").html();
    var examItem = $("#show-exam").html();
    $("#course-type").change(function(){
        if ($("#course-type").val() == 1) {
            $("#show-item-course").html(learnItem);
                  
        }
        if ($("#course-type").val()==2) {
            
            $("#show-item-course").html(practiceItem);
            $("#show-learn").hide();
            $("#show-exam").hide();
        }
        if ($("#course-type").val()==3) {
           
            $("#show-item-course").html(examItem);
             $("#show-learn").hide();
            $("#show-practice").hide();
        }
    });



    var simpleItem = $("#tab-simple").html();
    var abacusMovementItem = $("#tab-abacus-movement").html();
    $("#slt-content-type").change(function(){
        if ($("#slt-content-type").val() == 1) {
            $("#tab-abacus-movement").hide();
            $("#show-content-type-here").html(simpleItem);
        }
        if ($("#slt-content-type").val() == 2) {
            $("#tab-simple").hide();
            $("#show-content-type-here").html(abacusMovementItem);
        }
    })
});


function doDashes(str) {
    var re = /[^a-z0-9]+/gi; // global and case insensitive matching of non-char/non-numeric
    var re2 = /^-*|-*$/g;     // get rid of any leading/trailing dashes
    str = str.replace(re, '-');  // perform the 1st regexp
    return str.replace(re2, '').toLowerCase(); // ..aaand the second + return lowercased result
}
$(document).ready(function(){
 
  /*$(".add-news-title" ).change(function() {
    $('.news-slug').val(doDashes($(this).val()));
});*/
  $(".add-pages-title" ).change(function() {
    $('.pages-slug').val(doDashes($(this).val()));
    });

  /*onchange type of course*/
    $('.course-type').change(function(){
        var theValue=$(this).val();
        $('.sub-type-value').attr('selected', false);//remove all selected
        if(theValue==''||theValue==null)
        {
            $('.sub-type-value').attr('disabled', 'disabled');

        }
        else {
            $('.sub-type-value').attr('disabled', 'disabled');
            $('.'+theValue).removeAttr('disabled');
            $('.sub-type-none-value').attr('selected', true);
        }

    })

})
function alertMsg(theURL,msg)
{
    if (confirm(msg))
    {
        window.location.href=theURL;
    }
    else
    {
        return false;
    }
}

function addImage(elementReturn, response) {
    //show images
    $('.td' + elementReturn +" .wrap-question-image").html('<div class="box-image-checkout"><img src="' + response.url + '" width="200px" class="e-visa-pic"></div>');
    $('.question-' + elementReturn).val(response.url);

}

function submitUploadForm(files) {
        $("#imageUploadForm").submit();
}

// exam calculator
$(document).ready(function(){
    
    var c = 0;
    var showItem = 1;

    $( "body" ).on( "click", "#click", function() {
        var cnt = showItem;
        var groupIndex = $('.show').find('p#groupx').length;
        //console.log(groupIndex);

        // for (var i = 0; i < cnt; i++) {
        //     c++;
        // }

        c = parseInt(groupIndex) +1;

        var html = $('.wrap').html();
        //console.log(html);
        var inputs = [
            '<input type="text" search="name" name="item['+c+'][name]" class="form-control col-md-7 col-xs-12" required="required">',
            '<input type="text" search="limit_time" name="item['+c+'][limit_time]" class="form-control col-md-7 col-xs-12" required="required">',
            '<input type="text" search="qualify" name="item['+c+'][qualify]" class="form-control col-md-7 col-xs-12" required="required">',
            '<input id="imageExamItem" type="file" search="imagefile" name="item['+c+'][imagefile]" accept="image/png, image/jpeg, image/gif">',
            '<input id="urlname" type="text" search="image" name="item['+c+'][image]" class="form-control" readonly>',
            '<p id="groupx" search="groupx" name="groupx">'+c+'</p>',
        ];

        for (i = 0; i < inputs.length; i++) {
            var str_search = '{'+$(inputs[i]).attr('search')+'}';
            var re = new RegExp(str_search, "ig");
            //console.log(str_search);
            html = html.replace(re, inputs[i]);
            //text += cars[i] + "<br>";
        }
        //console.log(html);
        $( ".show" ).append(html);
    });
    
    $(document).on("click", ".remove-this-step-1", function() {
        $(this).closest('.x_panel').remove();
        c--;
        resetInputsCount();
    });

    $( "body" ).on( "click", "#add-item2", function() {
        
        var groupIndex = $(this).closest('.x_panel').find('p#groupx').html();
        //console.log(groupIndex); 
        var html = $(".wrap-item").html();
        console.log(html);

        var inputs = [
            '<input type="text" search="questions" name="item['+groupIndex+'][question][]" class="form-control" required="required">',
            '<input type="text" search="answers" name="item['+groupIndex+'][answer][]" class="form-control" required="required">',
            '<input type="radio" search="horizontal" name="item['+groupIndex+'][position]['+$.now()+']" value="1" required="required">',
            '<input type="radio" checked search="vertical" name="item['+groupIndex+'][position]['+$.now()+']" value="2" required="required">',
            '<input type="text" search="score" name="item['+groupIndex+'][score][]" class="form-control" required="required">',
        ];

        for (i = 0; i < inputs.length; i++) {
            var str_search = '{'+$(inputs[i]).attr('search')+'}';
            var re = new RegExp(str_search, "ig");
            //console.log(str_search);
            html = html.replace(re, inputs[i]);
            //text += cars[i] + "<br>";
        }

        // $('input', wrapItem).each(function () {
        //     //console.log($(this).attr('name'));                    
        //     if($(this).prop('type')=='radio') {
        //         elmHtml = elmHtml.replace('name="'+$(this).attr('name')+'"', 'name="'+$(this).attr('name')+'['+groupIndex+']['+$.now()+']"');    
        //     } else {  
        //         elmHtml = elmHtml.replace('name="'+$(this).attr('name')+'"', 'name="'+$(this).attr('name')+'['+groupIndex+']"');
        //     }
        // });
        //console.log(elmHtml)
        $(this).closest('.x_panel').find("tbody.show-item").append(html);
    });

    //exam image item
    $(document).on('change', '#imageExamItem', function(e){
        showImageItemExam(e, this);
    });

    //remove image item
    $(document).on('click', '#clearItem', function(){
        removeImageItemExam(this);
    });

    //add simple learn
    $( "body" ).on( "click", "#add-content-image", function() {
        $("#aaa").hide();
        var html = $('.content-image-course').html();
        $( ".show-content-item" ).append(html);
        updateSimpleLearnIndex();
    });
    $( "body" ).on( "click", "#add-content-document", function() {
        $("#aaa").hide();
        var html = $('.content-document-course').html();
        $( ".show-content-item" ).append(html);
        updateSimpleLearnIndex();
    });
    $( "body" ).on( "click", "#add-content-text", function() {
        $("#aaa").hide();
        var html = $('.content-text-course').html();
        $( ".show-content-item" ).append(html);
        updateSimpleLearnIndex();
    });
    $(document).on("click", ".remove-this-step-course", function() {
       $(this).closest('.x_panel').remove();
       updateSimpleLearnIndex();
    });
    //

    function updateSimpleLearnIndex() {
        $('.show-content-item .x_panel').each(function () {
            var index = $(this).index();
            $(this).find('[name]').each(function () {
                var name = $(this).attr("name");
                name = name.replace(/\[INDEX\]/gi, '[' + index + ']');
                name = name.replace(/\[[0-9]+\]/gi, '[' + index + ']');
                $(this).attr("name", name);
            });
        });
    }

    function resetInputsCount(){
        $('.show').find('p#groupx').each(function(i){
            $(this).html(i+1);
            //console.log(i);

            var parents = $(this).closest('.x_content');
            parents.find('input').each(function(){
                var attrName = $(this).attr('name');
                //console.log('old : '+attrName);

                //var re = new RegExp(str_search, "g");
                
                //attrName = attrName.replace(str_search, res);
                attrName = attrName.replace(/\d+/i, (i+1));
                
                $(this).attr('name', attrName);
                //console.log('new : '+attrName);
                //console.log('-----------');
            });
        });
    }

    function showImageItemExam(event, elm) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        //console.log(tmppath);
        var elmParent = $(elm).parents('#uploadExamImg');
        //console.log(elmParent);
        $(elmParent).find("#urlname").val(event.target.files[0].name);
        //console.log($(elmParent).children("#urlname"));
        $(elmParent).children("#img-upload").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
    }

    function removeImageItemExam(elm) {
        var elmParent = $(elm).parent();
        //console.log(elmParent);
        var fileImg = $(elmParent).find('input#imageExamItem');
        fileImg.val(null);
        $(elmParent).find("#urlname").val(null);
        $(elmParent).children("#img-upload").attr('src', '');
    }                                       
})


//call modal
var btnTarget;
//limmit data > 100
var start;
var end ;
var limit;
var dataAjaxImage;
var dataAjaxAudio;
var dataAjaxAbacus;
var dataAjaxDocument;
var is_busy;
var is_stop;
//console.log(html);
//$("#myModal").modal();
$(document).on('show.bs.modal','#myModal', function (e) {
    start = 0;
    end = 200;
    limit = 200;
    is_busy = false;
    is_stop = false;
    btnTarget = $(e.relatedTarget);
    $("#myModal").find('#content-list').empty();
    createContentModal();
});

$(document).on('shown.bs.modal','#myModal', function (e) {
    $(".modal-body").scrollTop(0) ;
});

//load data with scroll
$(document).ready(function(){
    $('.modal-body').on('scroll', function(){
        // console.log('content-data '+$(".content-data").height());
        // console.log('modal-body.height '+$(".modal-body").height());
        // console.log('modal-body scroll ' + $(".modal-body").scrollTop());
        // console.log('calculator ' + ($(".content-data").height()-$(".modal-body").height()));
        // console.log('==========================================');
        if ($(".modal-body").scrollTop() > (($(".content-data").height()-1) - $(".modal-body").height())) {
            // console.log('loadding...');
            // console.log('is_busy '+is_busy);
            // console.log('is_stop '+is_stop);
            // console.log('dataAjaxImage.length '+dataAjaxImage.length);
            // console.log('start '+start);
            // console.log('end '+end);
            
            if (is_busy){
                return false;
            }
            
            if (is_stop){
                return false;
            }
             
            start = start+limit;
            end = end+limit;
            is_busy = true;
            //console.log(start);
            createContentModal();
        }
    });
});

function createContentModal() {
    var type = btnTarget.attr('data-type');
    var url = btnTarget.attr('data-url');
    var inp = btnTarget.closest('div.input-group').find('input#inpAjax');
    var html = "";
    var lang = $("input[name='langCode']").val();
    var typeOfLearning = $("input[name='typeOfLearning']").val();

    switch(type) {
        case 'image':
            if(!$.isArray(dataAjaxImage) || dataAjaxImage.length === 0) {
                dataAjaxImage = ajaxLoadLists(url, lang, typeOfLearning);
            }
            if(start >= dataAjaxImage.length) {
                is_stop = true;
            }
            // move item selected to header
            moveItemInArray(dataAjaxImage, inp);

            data = dataAjaxImage.slice(start, end);
            // console.log('data.length '+data.length);
            html = createImage(data);
            break;
        case 'audio':
            if(!$.isArray(dataAjaxAudio) || dataAjaxAudio.length === 0) {
                dataAjaxAudio = ajaxLoadLists(url, lang, typeOfLearning);
                console.log('create data audio');
                console.log(dataAjaxAudio.length);
            }
            if(start >= dataAjaxAudio.length) {
                is_stop = true;
            }

            // move item selected to header
            moveItemInArray(dataAjaxAudio, inp);

            data = dataAjaxAudio.slice(start, end);
            html = createAudio(data);
            break;
        case 'document':
            if(!$.isArray(dataAjaxDocument) || dataAjaxDocument.length === 0) {
                dataAjaxDocument = ajaxLoadLists(url, lang, typeOfLearning);
                //console.log(dataAjaxDocument);
            }
            if(start >= dataAjaxDocument.length) {
                is_stop = true;
            }

             // move item selected to header
            moveItemInArray(dataAjaxDocument, inp);

            data = dataAjaxDocument.slice(start, end);
            html = createDocument(data);
            break;
        case 'abacus':
            if(!$.isArray(dataAjaxAbacus) || dataAjaxAbacus.length === 0) {
                dataAjaxAbacus = ajaxLoadLists(url, lang, typeOfLearning);
            }
            if(start >= dataAjaxAbacus.length) {
                is_stop = true;
            }

            // move item selected to header
            moveItemInArray(dataAjaxAbacus, inp);

            data = dataAjaxAbacus.slice(start, end);
            html = createAbacus(data);
            break;
        default:
            break
    }

    $(".modal-title").html('Select '+type);
    $("p.loading").remove();
    $("#myModal").find('#content-list').append(html);
    
    //add class selected
    $("#myModal").find('.wrap-item').each(function(){
        if ($(this).attr('data-item')==inp.val()) {
            $(this).addClass('selected');
        }else if($(this).hasClass('selected')){
            $(this).removeClass('selected');
        }
    });

    //move to header element has class selected
    // var elmSelected;
    // $("#myModal").find('.wrap-item').each(function(){
    //     if ($(this).attr('data-item')==inp.val()) {
    //         elmSelected = $(this);
    //         //console.log(elmSelected);
    //         $(this).remove();
    //     }else if($(this).hasClass('selected')){
    //         $(this).removeClass('selected');
    //     }
    // });

    // if(elmSelected) {
    //     elmSelected.addClass('selected');
    //     $("#myModal").find('#content-list').prepend(elmSelected);
    // }

    is_busy = false;
}

function moveItemInArray(data, inp) {
    console.log(data);
    $.each(data,function(index, value){
        if(value['name'] == inp.val() && index !=0) {
            elm = data[index];
            data.splice(index, 1);
            data.unshift(elm);
            //console.log(data);
            return false;
        }
    });
}

function createImage(data){
    var html = "";
    if(data.length > 0){
        $.each(data,function(index, value){
            html += '<div class="wrap-item" item-index="'+index+'" data-item="'+value['name']+'" style="height: 80px; padding-top: 5px; padding-bottom: 5px;">\n\
                    <a href="#'+index+'" class="">\n\
                    <img id="img-item" class="img-responsive" name="image-item" src="'+value['url']+'" style="max-width: 100px; max-height: 50px;">\n\
                    <br>'+value['name']+'</a></div>';
        });
    }
    return html;
}

function createAudio(data){
    var html = "";
    if(data.length > 0){
        $.each(data,function(index, value){
            //console.log(value['url']);
            html += '<div class="wrap-item" item-index="'+index+'" data-item="'+value['name']+'" style="height: 80px; padding-top: 5px; padding-bottom: 5px;">\n\
                    <a href="#'+index+'" class="">\n\
                    <audio controls> <source src="'+value['url']+'" type="audio/mpeg"></audio>\n\
                    <br>'+value['name']+'</a></div>';
        });
    }
    return html;
}

function createDocument(data){
    var html = "";
    if(data.length > 0){
        $.each(data,function(index, value){
            html += '<div class="wrap-item" item-index="'+index+'" data-item="'+value['name']+'" style="height: 80px; padding-top: 5px; padding-bottom: 5px;">\n\
                    <a href="#'+index+'" style="max-width: 100px; max-height: 50px;">\n\
                        <i class="fa fa-file" style="font-size:45px;"></i>\n\
                        <br>'+value['name']+'</a></div>';
        });
    }
    return html;
}

function createAbacus(data){
    var html = "";
    if(data.length > 0){
        //console.log(data);
        $.each(data,function(index, value){
            html += '<div class="wrap-item" item-index="'+index+'" data-item="'+value['id']+'" style="width: 25%; display: block;">\n\
                    <a href="#'+value['id']+'" class="">\n\
                    <h3>'+value['name']+'</h3>\n\
                    </a></div>';
        });
    }
    return html;
}

//select image from list
// //var btnTarget;
// $('#myModal').on('show.bs.modal', function (e) {
//     //console.log('modal is show');
//     btnTarget = $(e.relatedTarget);
    
//   //if (!data) return e.preventDefault() // stops modal from being shown
// });

//one click image
$(document).on('click', '#content-list .wrap-item', function () {
    var item = $(this);
    $('.wrap-item').each(function(){
        if($(this).attr('item-index') !== item.attr('item-index')){
            $(this).removeClass('selected');
        }
    });
    $(this).toggleClass('selected')
});

//double click image
$(document).on('dblclick', '#content-list .wrap-item', function () {
    var item = $(this);
    $('.wrap-item').each(function(){
        if($(this).attr('item-index') !== item.attr('item-index')){
            $(this).removeClass('selected');
        }
    });
    $(this).toggleClass('selected')
    $('#myModal').modal('hide');

    // store image
    itemSelected();
});

$(document).on("hide.bs.modal","#myModal", function () {
    //if ( !$(document.activeElement).hasClass('close') ) {
    if($(event.target).attr('id')=='btn-select-item') {
        // store image
        itemSelected(); 
    } else {
        //console.log('The user close the modal dialog using Backdrop or Keyboard ESC key');
    }
});

function itemSelected() {
    var selected = false;
    var elmSeleted;
    $('.wrap-item').each(function(){
        if($(this).hasClass('selected')) {
            selected = true;
            elmSeleted = $(this);
        }
    });

    var inp = btnTarget.closest('div.input-group').find('input#inpAjax');
    if(selected) {
        inp.val(elmSeleted.attr('data-item'));
        btnTarget.css('background', 'red');
    }else {
        inp.val('');
        btnTarget.css('background', 'none');
    }
}

function ajaxLoadLists(url, lang, typeOfLearning) {
    var results = null;
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'lang': lang, 
            'typeOfLearing': typeOfLearning
        },
        dataType: 'JSON',
        async: false,
        success: function(data) {
            if(data){
                results = data;
            }
            //console.log(data);  
        },
        error: function (data) {
            return results;
        }
    });

    return results;
}
