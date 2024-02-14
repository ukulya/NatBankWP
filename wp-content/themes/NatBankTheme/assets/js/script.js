$(document).ready(function () {
  var intervalTime = 24 * 60 * 60 * 1000; //refresh every 1 day
  function refresher() {
    $.post("/wp-content/themes/NatBankTheme/currency.php", function (res) {
      let data = JSON.parse(res);
      $.each($(".currency-text"), function (i, val) {
        $(val).text(data[i]);
      });
      $(".rates-text").show();
      setTimeout(() => {
        $(".rates-text").hide();
      }, 1000);
    });
  }
  var timerID;
  function start() {
    timerID = setInterval(refresher, intervalTime);
  }

  start();
  $(".currency-btn").click(refresher);
  $.ajax({
    url: "/wp-content/themes/NatBankTheme/currency.php",
    type: "GET",
    error: function (err) {
      console.log(err);
    },

    success: function (res) {
      let data = JSON.parse(res);
      $.each($(".currency-text"), function (i, val) {
        $(val).text(data[i]);
      });
    },
  });
});
