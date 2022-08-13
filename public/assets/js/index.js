$(document).ready(function () {
  //responsive menu toggle
  $("#menutoggle").click(function () {
    $(".xs-menu").toggleClass("displaynone");
  });
  //add active class on menu
  //drop down menu
  $(".drop-down").click(function () {
    $(".mega-menu").toggleClass("display-on");
  });
});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".menu");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".apps");
    $nav.toggleClass("scroll", $(this).scrollTop() > $nav.height());
  });
});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".logo");
    $nav.toggleClass("logo_scrolled", $(this).scrollTop() > $nav.height());
  });
});

function myFunction() {
  var x = document.getElementById("mynav");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
$(".imgchange > img").mouseover(function () {
  $(this).attr("src", "images/follower (7).jpg");
});
$(".imgchange > img").mouseleave(function () {
  $(this).attr("src", "images/follower (9).jpg");
});
$(".imgchange1 > img").mouseover(function () {
  $(this).attr("src", "images/follower (1).jpg");
});
$(".imgchange1 > img").mouseleave(function () {
  $(this).attr("src", "images/follower (8).jpg");
});
$(".imgchange2 > img").mouseover(function () {
  $(this).attr("src", "images/follower (7).jpg");
});
$(".imgchange2 > img").mouseleave(function () {
  $(this).attr("src", "images/follower (12).jpg");
});
$(".imgchange3 > img").mouseover(function () {
  $(this).attr("src", "images/follower (8).jpg");
});
$(".imgchange3 > img").mouseleave(function () {
  $(this).attr("src", "images/follower (1).jpg");
});
$(".imgchange4 > img").mouseover(function () {
  $(this).attr("src", "images/follower (8).jpg");
});

// pricing_method

$('.amount > input[type="number"]').on("input", updateTotal);

function updateTotal(e) {
  var amount = parseInt(e.target.value);

  if (!amount || amount < 0) return;

  var $parentRow = $(e.target).parent().parent();
  var cost = parseFloat($parentRow.find(".cost").text());
  var total = (cost * amount).toFixed(2);

  $parentRow.find(".total").text(total);
}

let counter = 0;
function increment() {
  counter = counter + 1;
  document.getElementById("boxes").innerText = counter;
}
function decrement() {
  counter = counter - 1;
  document.getElementById("boxes").innerText = counter;
}
document.getElementById("boxes").innerText = counter;

function change_tab(id) {
  document.getElementById("page_content").innerHTML = document.getElementById(
    id + "_desc"
  ).innerHTML;
  document.getElementById("page1").className = "notselected";
  document.getElementById("page2").className = "notselected";
  //  document.getElementById("page3").className="notselected";
  document.getElementById(id).className = "selected";
}
function password_toggle(){
  let password = document.getElementById('pass');
  if (password.type === 'password'){
    password.type = 'text'
  }
  else{
    password.type = 'password'
  }
}
function buyProducts() {
  location.href = "./PointofSale.html";
};
function tryProducts() {
  location.href = "./Selected_apps.html";
};