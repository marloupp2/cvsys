$(document).ready(function(){



  // handle menu clicks
  $('ul#nav li a').click(function(){
    var page = $(this).attr('href');
    $('#content').load('viewstudent/content/' + page + '.php');
    return false;
  });

});