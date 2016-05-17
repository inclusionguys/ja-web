 $(function(){

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");

        // Toggle('#menu-toggle');


        // glyphicon glyphicon-menu-hamburger

        if ($("#wrapper").hasClass("toggled")){
          $(this).find('.glyphicon').removeClass('glyphicon-menu-left');
          $(this).find('.glyphicon').addClass('glyphicon-menu-hamburger');
        } else {
          $(this).find('.glyphicon').removeClass('glyphicon-menu-hamburger');
          $(this).find('.glyphicon').addClass('glyphicon-menu-left');
        }

    });
        if ($("#wrapper").hasClass("toggled")){
          toggleicon = $(this).find('.glyphicon');
          toggleicon.removeClass('glyphicon-menu-left');
          toggleicon.addClass('glyphicon-menu-hamburger');
        } else {
          toggleicon.removeClass('glyphicon-menu-hamburger');
          toggleicon.addClass('glyphicon-menu-left');
        }



    $(".assignbtn").click(function(e){
      console.log('assignbtn');

var mentor_id =     $(this).parent().parent().find('#assign-question-form').find('select').val();
var question_id =     $(this).parent().parent().find('#assign-question-form').find('#question_id').val();

          $.post("assign-question", {
                    mentor_id: mentor_id,
                    question_id: question_id
                }).done(function (data) {
                  $('.modal').modal('hide');
                  alert('Question has been assigned successfully');
                  $(location).attr('href', '');
                });

        e.preventDefault();

    });


    });
