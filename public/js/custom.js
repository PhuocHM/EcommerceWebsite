function checkCoupon() {
    var url = `{{ route('coupon.checkCoupon') }}`;
    var coupon_code = $("#coupon_code_input").val();
    var total = $("#total_money").val();
    $.ajax({
        url: url
        , method: 'GET'
        , data: {
            coupon_code: coupon_code
        }
        , success: function (response) {
            if (response.success) {
                total = total - response.success;
                $("#total_money").val(total);
                $("#display_total_money").html(total.toFixed(3) + `&ensp;<u>đ</u>`);
                $("#success_coupon").html('<p>Đã sử dụng mã giảm giá : Giảm ' + response.success + '&ensp;<u>đ</u></p>')
                $("#success_coupon").show();
                setTimeout(function () {
                    $("#success_coupon").hide();
                }, 1500)
            } else {
                $("#message_coupon").html('<p>' + response.error + '</p>')
                $("#message_coupon").show();
                setTimeout(function () {
                    $("#message_coupon").hide();
                }, 1500)
            }
        }
    })
}

function hasCoupon() {

    if ($('#checkbox_coupon').is(":checked"))
        $("#coupon_main").show();
    else
        $("#coupon_main").hide();
}

function checkCart() {
    var url = `{{ route('cart.checkCart') }}`;
    $.ajax({
        url: url
        , method: 'GET'
        , success: function (response) {
            $("#mini-cart").html(response)
        }
    })
}

function deleteCartItem(product_id) {
    var url = `{{ route('cart.deleteCartItem') }}`;
    $.ajax({
        url: url
        , method: 'GET'
        , data: {
            product_id: product_id
        }
        , success: function (response) {
            checkCart();
        }
    })
}

function addToCart(product_id) {
    var url = `{{ route('cart.addToCart') }}`;
    $.ajax({
        url: url
        , method: 'GET'
        , data: {
            product_id: product_id
        }
        , success: function (response) {
            if (response.success) {
                $("#noti-main").html('Đã thêm ' + response.success.name + ' vào giỏ hàng !')
                checkCart();
                $("#noti-button").trigger("click");
            } else {
                //
            }
        }
    })
}

