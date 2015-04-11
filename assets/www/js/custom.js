

$(document).ready(function() {
    var api = 'http://ihnlbd.com/happy_moment_api/';

    $('#search').submit(function() {
        var wish_type = $('#wish_type').val();
        var date = $('#date').val();
        var tag_search = $('#tag_search').val();
        $.ajax({
            type: 'POST',
            url: api + 'search.php?page=image',
            crossDomain: true,
            dataType: 'json',
            data: {category_id: wish_type, date: date, tag_search: tag_search},
            async: false,
            success: function(data) {
                if (data.dataset > 0) {
//http://ihnlbd.com/happymoment/public/uploads_products_pic/JkUS1u_star_shooting_T.png

//                    var i = 0;
//                    var arr = new array();
//                    $.each(data.response, function(key, value) {
//                        arr[i] = value;
//                        i++;
//                    });
                    window.localStorage["wish_type"] = wish_type;
                    window.localStorage["date"] = date;
                    window.localStorage["tag_search"] = tag_search;
//                    print_r(arr);
                    window.location.href = "./preview.html";
                }
                else {
                    alert('Data Not found');
//                    window.location.replace('search.html');
                    window.location.href = "./search.html";
                }
            },
            error: function(error) {
                //alert(response.success);
                alert('Network Error');
            }
        });
    });

});