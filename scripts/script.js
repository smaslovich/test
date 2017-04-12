var initializers = {
  onReady: {
    selectCustomization: function() {
      $('select').select2({
        minimumResultsForSearch: Infinity
      });
    },

    subscriptionPopupToggle: function() {
      var $popupWrapper = $('.subscription-popup'),
          FADE_TIME = 300;

      $('.learn-more-button').on('click', function() {
        $popupWrapper.fadeIn(FADE_TIME);
      });

      $('.popup-button.cancel').on('click', function() {
        $popupWrapper.fadeOut(FADE_TIME);
      });
    },

    formSubmit: function() {
      var $form = $('#popup-form'),
          $cancelBtn = $('.popup-button.cancel'),
          $submitBtn = $('.popup-button.submit');

      function setupDefaultSubmitButton(state) {
        $submitBtn.text('Submit');
        $submitBtn.removeAttr('disabled');
        $submitBtn.removeClass('submit-success');
        $submitBtn.removeClass('submit-error');

        if (state === 'success') {
          setTimeout(function() {
            $cancelBtn.trigger('click');
          }, 1000);
        }
      }

      $submitBtn.on('click', function() {
        var data = $form.serialize();

        if ($(this).is('[disabled="disabled"]')) return;

        $.ajax({
          url: 'send.php',
          type: 'POST',
          data: data,
          beforeSend: function() {
            $submitBtn.attr('disabled', 'disabled');
          },
          success: function() {
            $submitBtn.text('Success!')
            $submitBtn.addClass('submit-success');

            setTimeout(setupDefaultSubmitButton.bind(null, 'success'), 5000);
          },
          error: function() {
            $submitBtn.text('Error!');
            $submitBtn.addClass('submit-error');

            setTimeout(setupDefaultSubmitButton, 5000);
          }

        });
      });
    }

  }
}

$(function() {
  var onReady = initializers.onReady;

  for (var func in onReady) {
    onReady[func]();
  }
});
