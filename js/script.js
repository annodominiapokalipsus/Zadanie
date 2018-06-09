
// 1.Utwórz obiekt w JS
// 2.Dodaj funckję w obiekcie która wywoła przekierowanie na inną stronę. Jeśli wartość
// parametru wejściowego będzie równa 1 – prośba o sprawdzenie także typu danych czy jest to
// integer

var object = {

    redirection: function (param) {
        if (!isNaN(param) &&
            parseInt(Number(param)) === param &&
            !isNaN(parseInt(param, 10))
            && param === 1) {

            window.location.replace("http://onet.pl");

        }
    }

};

// 3.Wywołaj funckję z utworzonego obiektu

object.redirection(2);

// 5.Złap element po ID i zmień wartość na dowolny tekst
var input = document.getElementsByTagName("input#test");
var input2 = document.getElementById("test");
