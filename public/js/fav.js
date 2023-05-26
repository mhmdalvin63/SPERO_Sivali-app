$('.add-to-fav').on('click',function(e) {
    e.preventDefault();

    var product_slug = $(this).attr('product-slug');

    $.ajax({
        type: 'POST',
        url: '/wishlist',
        data:{
            _token: $('meta[name="csrf=token"]').attr('content'),
            product_slug: product_slug
        },
        success: function(response){
            alert(response);
        },
        // error: function(xhr, textStatus, errorThrown){
        //     if(xhr.status == 401){
        //         $('#')
        //     }
        // }
    });
}); 