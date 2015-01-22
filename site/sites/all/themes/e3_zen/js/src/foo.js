var $ = require('jquery-browserify');

module.exports = function (n) {


  console.log();

  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {
      $('h1', context).click(function () {
        $(this).after('<div>Hello World!</div>');
      });
    }
  };
};