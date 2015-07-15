$(document).ready(function(){
  $('.tabs').each(function(){
    var tab = $(this);
    tab.find('.tab_content').hide(); // Hide all divs
	
    tab.find('ul.tab_nav li a').click(function(){ //When any link is clicked
        if($(this).hasClass('current_tab')) return false;
        tab.find('ul.tab_nav li a').removeClass('current_tab');
        $(this).addClass('current_tab'); //Set clicked link class to active

        var currentTab = tab.find($(this).attr('href')); // Set variable currentTab to value of href attribute of clicked link

        tab.find('.tab_content').hide(); // Hide all divs
        $(currentTab).slideDown(); // Show div with id equal to variable currentTab
        return false;
    });
  });
});