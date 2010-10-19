
function prepareFormHandler() {
  $('form').submit(function() {
    var values = {};
    $('input, select, textarea').each(function() {
      var elemType = $(this).attr('type');
      if (elemType != 'submit' && elemType != 'reset') {
        values[$(this).attr('name')] = {};
        values[$(this).attr('name')]['value']     = $(this).val();
        values[$(this).attr('name')]['required']  = ($(this).hasClass('required')) ? 1 : 0;
//        $.get();
      }
    });
    validateFormValues(values);
  });
  
  $('input, textarea, select').mouseover(function() {
    
  });
}

function handleFormValidationResult(formValues, validationData) {
  if (getObjectLength(formValues) != sumObjectValues(validationData)) {
    $('.error').show('fast');
    for (var key in validationData) {
      if (validationData[key] == false) {
        $('[name=' + key + ']').addClass('error');
      } else {
        $('[name=' + key + ']').removeClass('error');
      }
    }
    
  } else {
    $('.error').hide('fast');
    
    var params = {'params' : formValues};
    $.post('ajax/forms/sendForm', params, function(data) {
      data = JSON.parse(data);
      log(data);
      switch(data.todo) {
        case 'loadPage':
          log(data.todo);
          var params = data.page.split(' ');
          var file = params.shift();
          var id = params.join(' ');
          $('#main #content').loadURL(file, id);
        break;
      }
    });
  }
}

function validateFormValues(values) {
  var params = {'params' : values};
  $.post('ajax/validation/isValid', params, function(data) {
    data = JSON.parse(data);
    log(data);
    handleFormValidationResult(values, data);
  });
}

function sumObjectValues(obj) {
  var sum = 0;
  for (var key in obj) {
    sum = sum + obj[key];
  }
  return parseInt(sum);
}

function getObjectLength(obj) {
  var i = 0;
  for (var key in obj) {
    i++;
  }
  return parseInt(i);
}