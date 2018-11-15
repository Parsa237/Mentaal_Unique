<script type="text/javascript">
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
    });
  });
});

// $(document).ready(function() {
//
//   var page_url = window.location.href;
//
//   var page_id = page_url.substring(page_url.lastIndexOf("#") + 1);
//
//   if (page_url == "whatwedo") {
//     $('html, body').animate({
//       scrollTop: $('#whatwedo' + page_id).offset().top + 20
//     }, 1000);
//   } else if (page_id == "whatwedo") {
//     $(html, body).animate({
//       scrollTop: $('#whatwedo' + page_id).offset().top
//     }, 1000);
//   }
//
// });

</script>
