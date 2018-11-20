
    <script>
$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".menu").addClass("navbar--active");
        }

        else {
            $(".menu").removeClass("navbar--active");
        }

    });
});
</script>
