$(document).ready(function () {
        var default_woeid = '2295420';
       
        getWeather(default_woeid);

        $('#lnkgo').click(function () {
            getLocation();
        });

        $('#editloclink').click(function () {
            $('#editloc').toggle('fast');
        });
    });    


function getWeather(woeid) {

        var yUrl = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%3D' + woeid + '&format=json&callback=?';

        $.getJSON(yUrl, function (data) {            
            $('#weatherlocation').text(data.query.results.channel.title.replace(/Yahoo! Weather \-/g, ' '));
            $('#weatherlocation').attr('href', data.query.results.channel.link);
            $('#weath-img').attr('src', 'http://us.i1.yimg.com/us.yimg.com/i/us/we/52/' +
					data.query.results.channel.item.condition.code + '.gif');
          
        $('#date-time').html(data.query.results.channel.item.condition.date);  
          
            var unit = '&#xb0;' + data.query.results.channel.units.temperature;
                    $('#conditions').html(data.query.results.channel.item.condition.text + ', ' +                       data.query.results.channel.item.condition.temp + unit);
          
          
          var day = data.query.results.channel.item.forecast;                                            
          $('#five-day').html(day[0].day + ' - ' + day[0].text + '. High: ' + day[0].high + ' Low: ' + day[0].low + '<br>');
          $('#five-day').append(day[1].day + ' - ' + day[1].text + '. High: ' + day[1].high + ' Low: ' + day[1].low + '<br>');
          $('#five-day').append(day[2].day + ' - ' + day[2].text + '. High: ' + day[2].high + ' Low: ' + day[2].low + '<br>');
          $('#five-day').append(day[3].day + ' - ' + day[3].text + '. High: ' + day[3].high + ' Low: ' + day[3].low + '<br>');
          $('#five-day').append(day[4].day + ' - ' + day[4].text + '. High: ' + day[4].high + ' Low: ' + day[4].low+ '<br>');
        });
    }

    function getLocation() {
        var loc = $('#txtlocation').val();
        var locUrl = 'https://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20geo.places%20WHERE%20text%3D%22' + loc + '%22%20LIMIT%201&format=json&callback=?';

        $.getJSON(locUrl, function (data) {
            if (data.query.count == 1) {
                getWeather(data.query.results.place.woeid)
                $('#editloc').toggle('fast');
                $('#locinfo').hide();
            }
            else {
                $('#locinfo').show();
            }
        });

    }   

$(function() {
    $('.ghost').each(function(index) {// Adds the Ghost effect on textbox
        if ($(this).val() === "" || $(this).val() === $(this).attr("title")) {
            $(this).attr("value", $(this).attr("title")).css({"color": "#999"});
        }
    });
    $('.ghost').on("focusin", function() {
        if ($(this).val() === $(this).attr("title")) {
            $(this).val("").css({"color": "#000000"});//Clear text and return normal color
        }
    }).focusout(function() {
        if ($(this).val() === "") {//Nothing has changed
            $(this).val($(this).attr("title")).css({"color": "#999"});//return back to ghost state
        }
    });
});