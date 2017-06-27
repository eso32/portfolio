app.directive('imageLoader', function() {
    return {
        restrict: 'E',
        template: '<span><div class="loader"></div><img class="thumb-mini" style="display: none;"/></span>',
        replace: true,
        link: function(scope, element, attrs) {
            attrs.$observe('photoSrc', function(value) { //atrybut dyrektywy
              // console.log(element[0].children[0]);
              element.find('img').attr('src',value)
                      .bind('load', function() {
                          element[0].children[0].style.opacity = "0";
                          element.children('img').css('display', 'block');
                          // console.log('image is loaded' + element);
                      });
            });
        }
    };
});
