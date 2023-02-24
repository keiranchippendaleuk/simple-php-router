var preURL = "";
var curURL = "";

window.setInterval(function () {
  curURL = document.location.href;

  if (curURL != preURL) {

    $(".pageAjax").attr("style", "opacity: .6;");
    var split = curURL.split('https://keiranchippendaleuk-urban-parakeet-r5wvwpxxp7p356p-8000.preview.app.github.dev/');
    if (split[1] == "/" || split[1] == "") {
      document.location.href = "home";
    }
    $.ajax({
      url: `pages/Router.php?page=${split[1]}`,
      method: 'GET',
      success: function (data) {
        if (data) {
          $('.pageAjax').html(data);
          $(".pageAjax").attr("style", "opacity: 1;");
        } else {
            window.history.pushState('data', 'simple php router', 'home');
            console.log('Page Not found: ' + data);
        }
      }
    });

  }

  preURL = curURL;
}, 500);

$(document).ready(function () {
    $(document).on("click", "a[target='page']", function (pageOpen) {
      if ($(this).attr('target') == "modal" || $(this).attr('href') == "javaScript:void();") {
  
      } else {
        if ($(this).attr('href') !== "#") {
          curURL = "";
          preURL = "";
          pageOpen.preventDefault();
          window.history.pushState('data', 'simplae php router', $(this).attr("href"));
        }
      }
    });
  });