var News = {};
(function() {
    $.extend(News, {
        initSearch: function () {
            $('#search-weather').autocomplete({
                minLength: 1,
                source: function () {
                    var items = [];
                    $.getJSON('public/data/city.json', function (data) {
                        $.each(data, function (key, val) {
                            items.push("<li id=" + key + ">" + val + "</li>");
                        });
                    });
                    add(items);
                },
                select: function (e, ui) {
                    alert(ui.items.items);
                }
            });
        }
    });
})(jQuery);