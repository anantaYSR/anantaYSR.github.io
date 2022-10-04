$(document).ready(function() {
    const darkmodeToggle = document.getElementById
    ('darkmode-toggle')
    darkmodeToggle.addEventListener('click', function() {
      const theme = $('html').attr('data-theme');
      if(theme == 'light') {
        // * CHANGE TO DARK
        $('html').css({'filter': 'invert(1)'})
        $('html').attr('data-theme', 'dark');
        darkmodeToggle.innerHTML = 'Dark Mode'
        
      } else {
        // * CHANGE TO LIGHT
        $('html').removeAttr('style');
        $('html').attr('data-theme', 'light')
        darkmodeToggle.innerHTML = 'Light Mode'
        
      }
    });
  });
  function ppbox(){
    alert("Anda akan melanjutkan ke Halaman Lain !!!")
}


