$(document).ready(function() {
    $('#form').submit(function(e) {
      e.preventDefault();
  
      var formData = $(this).serialize();
        
      $.ajax({
        type: 'POST',
        url: './data.php',
        data: formData,
        success: function(response) {
          console.log(response);
          alert('Регистрация прошла успешно!');
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText, status, error);
          alert('Произошла ошибка при регистрации.');
        }
      });
    });
  });
  