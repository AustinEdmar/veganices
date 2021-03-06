function hoverImageProfile() {
    $('#iconCamera').css('opacity', '1');
    $('#textImageHover').css('opacity','1');
    $('#imageProfile').css('filter', 'grayscale(80%)');
}

function outImageProfie() {
    $('#iconCamera').css('opacity', '0');
    $('#textImageHover').css('opacity','0');
    $('#imageProfile').css('filter', 'grayscale(0)');
}


$('#imageProfile , #iconCamera , #optionsClickImage').hover(function () {
    hoverImageProfile()
}, function () {
    outImageProfie()
});

function clickImage() {
    $('#optionsClickImage').css('display','block');
}

function clickOutImage() {
    $('#optionsClickImage').css('display','none');
}

$('#imageProfile , #iconCamera').click(function(event){
    clickImage()
});

$('body').click(function (event){
    if (event.target.id != 'imageProfile' &&
        event.target.id != 'iconCamera' &&
        event.target.id != 'optionsClickImage'){
        clickOutImage()
    };
});


function previewImage(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#testePreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#uploadImage").change(function(){
    previewImage(this);
});
