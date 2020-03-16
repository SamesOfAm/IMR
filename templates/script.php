<script>
    let fixed = false;
    window.addEventListener('scroll', function(e) {
        const menu = document.querySelector('.mobile_menu_trigger');
        const scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        if(scrollTop > 45 && !fixed) {
            menu.classList.add('trigger-fixed');
            fixed = true;
        } else if (scrollTop <= 45 && fixed) {
            menu.classList.remove('trigger-fixed');
            fixed = false;
        }
    });
</script>