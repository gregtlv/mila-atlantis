// Header Menu
headerToggle.onclick = function expandMenu() {

  var headerNavList = document.getElementById('headerNavList');
  var headerTop = document.getElementById('headerTop');
  var header = document.getElementById('header');

  let headerNavListClass = headerNavList.classList;
  let headerTopClass = headerTop.classList;

  if (headerNavList.style.display === "none" || headerNavList.style.display === "") {

      headerNavList.style.display = "block";
      headerNavList.style.opacity = "1";

      // Padding Animation
      headerTop.style.paddingBottom = "145px";
      header.style.paddingBottom = "70px";

  } else {
    headerNavList.style.display = "none";
    headerTop.style.paddingBottom = "0px";
    header.style.paddingBottom = "0";

    }

}

//Scroll

$(document).ready(function(){
 $("#headerNav").on("click","a", function (event) {
   //отменяем стандартную обработку нажатия по ссылке
   event.preventDefault();

   //забираем идентификатор бока с атрибута href
   var id  = $(this).attr('href'),

   //узнаем высоту от начала страницы до блока на который ссылается якорь
     top = $(id).offset().top;

   //анимируем переход на расстояние - top за 1500 мс
   $('body,html').animate({scrollTop: top}, 1500);
 });
});
